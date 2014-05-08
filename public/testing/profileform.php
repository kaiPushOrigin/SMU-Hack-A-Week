<?php
    
    session_start();   
    //db.php
    $db_location = "localhost";
    $db_username = "cs4477223";
    $db_password = "sid";
    $db_database = "cs4477223";
    $db_connection = mysql_connect("$db_location","$db_username","$db_password")
        or die ("Error - Could not connect to MySQL Server");
    $db = mysql_select_db($db_database,$db_connection)
        or die ("Error - Could not open database");



$sql="INSERT INTO info(name, password, email, interests)
VALUES
('$_POST[name]','$_POST[password]','$_POST[email]','$_POST[interests]')";

$username = $_POST['name'];

/*
function name_from_username($username){

	return mysql_result(mysql_query("SELECT 'name' FROM 'info' WHERE 'name' = '$username'"), 0, 'name');
}
*/


$_SESSION['meow'] = $username;
 
if (mysql_query($sql,$db_connection)) {

    header ("location: http://cs.smu.ca/~csc35511/smu/myApp.php"); 
    }
    else {
echo "Something is wrong";
}

 
mysql_close($db_connection)

?>
