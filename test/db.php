<?php
    //db.php
    $db_location = "localhost";
    $db_username = "cs4477223";
    $db_password = "sid";
    $db_database = "cs4477223";
    $db_connection = mysql_connect("$db_location","$db_username","$db_password")
        or die ("Error - Could not connect to MySQL Server");
    $db = mysql_select_db($db_database,$db_connection)
        or die ("Error - Could not open database");
?>
