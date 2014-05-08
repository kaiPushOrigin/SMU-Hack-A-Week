<?php

    //db.php
      $db_location = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_database = "tumble";
    $db_connection = mysql_connect("$db_location","$db_username","$db_password")
        or die ("Error - Could not connect to MySQL Server");
    $db = mysql_select_db($db_database,$db_connection)
        or die ("Error - Could not open database");


$sql="INSERT INTO info(name, discussions)
VALUES
('$_POST[name]','$_POST[discussions]')";


if (mysql_query($sql,$db_connection)) {

    header ("location: http://localhost:8888/discussions.php"); 

    }
    else {
echo "Something is wrong";
}


mysql_close($db_connection)

?>

