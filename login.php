<?php
ob_start();
session_start();





 
$name = $_POST['username'];
$password = $_POST['password'];
 
$db_location = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_database = "tumble";
    $db_connection = mysql_connect("$db_location","$db_username","$db_password")
 
$username = mysql_real_escape_string($username);
$query = "SELECT id, username, password, salt
        FROM member
        WHERE username = '$username';";
 
$result = mysql_query($query);
 
if(mysql_num_rows($result) == 0) // User not found. So, redirect to login_form again.
{
    header('Location: login.html');
}
 
$userData = mysql_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
 
if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
{
    header('Location: login.html');
}else{ // Redirect to home page after successful login.
	session_regenerate_id();
	$_SESSION['sess_user_id'] = $userData['id'];
	$_SESSION['sess_username'] = $userData['username'];
	session_write_close();
	header('Location: home.php');
}
?>