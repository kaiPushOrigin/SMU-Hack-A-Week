<?php
session_start();

$fuck = $_SESSION['email'];

include "db.php";

$passtime=$_POST['passtime'];


	foreach ($passtime as $value){
		$query="INSERT INTO info (interests, email) VALUES ('$value','$fuck')";
		mysql_query($query);
	}


 header ("location: http://localhost:8888/myApp.php");     	
    mysql_close($db_connection);    

?>




