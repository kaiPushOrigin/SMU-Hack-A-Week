<?php
session_start();

$fucked = $_SESSION['email'];

include "db.php";

$texting=$_POST['texting'];

$query="INSERT INTO info (secondInterests, email) VALUES ('$texting','$fucked')";
mysql_query($query);



    header ("location: http://localhost:8888/myApp.php"); 
    	
    mysql_close($db_connection);

     

?>