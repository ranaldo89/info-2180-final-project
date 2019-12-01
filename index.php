<?php 
$host = getenv('IP');
$username = 'Cduncan';
$password = 'Damdog_101';
$dbname = 'DB';
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$users = $conn->query("SELECT * FROM users");
$userslist = $users->fetchAll(PDO::FETCH_ASSOC);
$issues = $conn->query("SELECT * FROM issues");
$issueslist = $issues->fetchAll(PDO::FETCH_ASSOC);

#Session
if(isset($_GET['session_id'])){
    echo $_SESSION['id'];
}

# Login and set session variables
if(isset($_GET['email']) && 
isset($_GET['password'])){
    foreach ($userslist as $user):
    if ($user['email']==$_GET['email'] && $user['password']==$_GET['password']){
        session_start();
        $_SESSION['email']=$user['email'];
        $_SESSION['password']=$user['password'];
        $_SESSION['id']=$user['id'];
        echo "true";
    }
    endforeach;

	}

# Display all users
if(isset($_GET['display_users'])){
    foreach ($userslist as $user):
        $line=$user['id'].','.$user['lastname'] .','.$user['firstname'];
        echo $line;
        echo "<br>";
        
    endforeach;

	}
	
# Display all issues
if(isset($_GET['display_issues'])){
   echo " <table>";
        echo "<tr>";
        echo "    <th>Title</th>";
        echo "    <th>Type</th>";
        echo "    <th>Status</th>";
        echo "    <th>Assigned To</th>";
        echo "    <th>Created</th>";
        echo "  </tr>";
    foreach ($issueslist as $issue):
        $id=$issue['id'];
        $title=$issue['title'];
        $type=$issue['type'];
        $status=$issue['status'];
        $assigned_to=$issue['assigned_to'];
        $created=$issue['created'];
        echo "<tr>";
        echo "    <th>$id.$title</th>";
        echo "    <th>$type</th>";
        echo "    <th>$status</th>";
        echo "    <th>$assigned_to</th>";
        echo "    <th>$created</th>";
        echo "  </tr>";
        
    endforeach;
        echo "</table>";
}

# Display all open issues
if(isset($_GET['display_issues_open'])){
   echo " <table>";
        echo "<tr>";
        echo "    <th>Title</th>";
        echo "    <th>Type</th>";
        echo "    <th>Status</th>";
        echo "    <th>Assigned To</th>";
        echo "    <th>Created</th>";
        echo "  </tr>";
    foreach ($issueslist as $issue):
        if (strcmp($issue['status'], 'OPEN') == 0){
        $id=$issue['id'];
        $title=$issue['title'];
        $type=$issue['type'];
        $status=$issue['status'];
        $assigned_to=$issue['assigned_to'];
        $created=$issue['created'];
        echo "<tr>";
        echo "    <th>$id.$title</th>";
        echo "    <th>$type</th>";
        echo "    <th>$status</th>";
        echo "    <th>$assigned_to</th>";
        echo "    <th>$created</th>";
        echo "  </tr>";
        }
    endforeach;
    echo "</table>";
}

# Display all my tickets
if(isset($_GET['display_issues_tickets'])){
   echo " <table>";
        echo "<tr>";
        echo "    <th>Title</th>";
        echo "    <th>Type</th>";
        echo "    <th>Status</th>";
        echo "    <th>Assigned To</th>";
        echo "    <th>Created</th>";
        echo "  </tr>";
    foreach ($issueslist as $issue):
        if (strcmp($issue['created_by'], $_SESSION['email']) == 0){
        $id=$issue['id'];
        $title=$issue['title'];
        $type=$issue['type'];
        $status=$issue['status'];
        $assigned_to=$issue['assigned_to'];
        $created=$issue['created'];
        echo "<tr>";
        echo "    <th>$id.$title</th>";
        echo "    <th>$type</th>";
        echo "    <th>$status</th>";
        echo "    <th>$assigned_to</th>";
        echo "    <th>$created</th>";
        echo "  </tr>";
        }
    endforeach;
    echo "</table>";
}

# Add a new user
if(isset($_GET['Firstname']) && 
isset($_GET['Lastname']) && 
isset($_GET['Password']) && 
isset($_GET['Email'])){
    $firstname=$_GET['Firstname'];
    $lastname=$_GET['Lastname'];
    $password=$_GET['Password'];
    $email=$_GET['Email'];
    $date_joined=date("Y/m/d");;
    $id=rand();
    $conn->query(str_replace('#', '"',"INSERT INTO users (id, firstname, lastname,password,email,date_joined)
        VALUES (#$id#,#$firstname#, #$lastname#, #$password#,#$email#,#$date_joined#); "));
}

# Add a new issue
if(isset($_GET['title']) && 
isset($_GET['description']) && 
isset($_GET['assignedto']) && 
isset($_GET['type'])&& 
isset($_GET['priority'])){
    $title=$_GET['title'];
    $description=$_GET['description'];
    $assignedto=$_GET['assignedto'];
    $type=$_GET['type'];
    $priority=$_GET['priority'];
    $status="OPEN";
    $createdBy=$_SESSION['email'];
    $created=date("Y/m/d");
    $updated=date("Y/m/d");
    $id=rand();
    $conn->query(str_replace('#', '"',"INSERT INTO issues 
    VALUES (#$id#,#$title#,#$description#, #$type#, #$priority#,#$status#,#$assignedto#,#$createdBy#,#$created#,#$updated#); "));
    
}

# Log out
if(isset($_GET['logout'])){
	    
	    session_unset();
	    session_destroy(); 
    
}

?>
