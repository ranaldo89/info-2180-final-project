<?php 
$host = getenv('IP');
$username = 'Cduncan';
$password = 'Damdog_101';
$dbname = 'DB';
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM users");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

 if(isset($_REQUEST['display_id'])){
    foreach ($results as $user):
        $line=$user['id'].','.$user['lastname'] .','.$user['firstname'];
        echo $line;
        echo "<br>";
        
    endforeach;

	}
	


?>