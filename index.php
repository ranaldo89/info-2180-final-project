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

 if(isset($_REQUEST['display_users'])){
    foreach ($userslist as $user):
        $line=$user['id'].','.$user['lastname'] .','.$user['firstname'];
        echo $line;
        echo "<br>";
        
    endforeach;

	}
	
 if(isset($_REQUEST['display_issues'])){
    foreach ($issueslist as $issue):
        $line=$issue['id'].','.$issue['title'] .','.$issue['priority'];
        echo $line;
        echo "<br>";
        
    endforeach;

	}

?>