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


if(isset($_GET['email']) && isset($_GET['password'])){
    foreach ($userslist as $user):
    if ($user['email']==$_GET['email'] && $user['password']==$_GET['password']){
        session_start();
        $_SESSION['email']=$_GET['email'];
        $_SESSION['password']=$_GET['password'];
        echo "true";
    }
    endforeach;

	}


if(isset($_GET['display_users'])){
    foreach ($userslist as $user):
        $line=$user['id'].','.$user['lastname'] .','.$user['firstname'];
        echo $line;
        echo "<br>";
        
    endforeach;

	}
	
if(isset($_GET['display_issues'])){
    foreach ($issueslist as $issue):
        $line=$issue['id'].','.$issue['title'] .','.$issue['priority'];
        echo $line;
        echo "<br>";
        
    endforeach;
}
if(isset($_GET['new_user'])){
        echo "<h1>New User</h1>";
        echo "First name:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Firstname# >");
        echo "<br>";
        echo "Last name:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Lastname# >");
        echo "<br>";
        echo "Password:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Password# >");
        echo "<br>";
        echo "Email:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Email# >");
        echo "<br>";
        echo "<br>";
        echo str_replace('#', '"', "<input type=#submit# value=#Submit#>");

}

if(isset($_GET['Firstname']) && isset($_GET['Lastname']) && isset($_GET['Password']) && isset($_GET['Email'])){
    $firstname=$_GET['Firstname'];
    $lastname=$_GET['Lastname'];
    $password=$_GET['Password'];
    $email=$_GET['Email'];
    $date_joined="Test";
    $id=1004;
    $conn->query(str_replace('#', '"',"INSERT INTO users (id, firstname, lastname,password,email,date_joined)
        VALUES (#$id#,#$firstname#, #$lastname#, #$password#,#$email#,#$date_joined#); "));
}
if(isset($_GET['new_issue'])){
	    echo "<h1>New Issue</h1>";
	    echo "Title:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Title# >");
	    echo "<br>";
	    echo "Description:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Description# >");
	    echo "<br>";
	    echo "Assigned To:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Assignedto# >");
	    echo "<br>";
	    echo "Type:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Type# >");
	    echo "<br>";
	    echo "Priority:<br>";
        echo str_replace('#', '"',"<input type=#text# name=#Priority# >");
	    echo "<br>";
        echo "<br>";
        echo str_replace('#', '"', "<input id=#submitIssue# type=#submit# value=#Submit#>");
    
}

if(isset($_GET['home'])){
	    echo "<h1>Home</h1>";
}

if(isset($_GET['logout'])){
	    
	    session_unset();
	    session_destroy(); 
    
}

?>
