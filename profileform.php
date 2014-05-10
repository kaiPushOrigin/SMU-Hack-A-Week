<?php
    //db.php
session_start();
 
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$interests = $_POST['interests'];

//////////////////////////////////////////////////////////////validating fields


    if(empty($name) || empty($email) || empty($password) || empty($repassword) )
{
    die('{status:0,txt:"All the fields are required"}');
}

  if(!preg_match('/^[A-Za-z\s ]+$/', $name))
{
    die('{status:0,txt:"Please check your name"}');
}



    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    die('{status:0,txt:"Enter a valid email"}');
}


    if(strlen($password)<6 || strlen($password)>16)
{
    echo "<script> alert('Password must be between 6-16 characters')</script>";
    header ("location: http://localhost:8888/profileinfo.php"); 
}

  if($password != $repassword)
{
    die('{status:0,txt:"Passwords doesn&sbquo;t match"}');
}


  if('{status:1}') 

{

    $db_location = "localhost";
    $db_username = "root";
    $db_password = "root";
    $db_database = "tumble";
    $db_connection = mysql_connect("$db_location","$db_username","$db_password")
        or die ("Error - Could not connect to MySQL Server");
    $db = mysql_select_db($db_database,$db_connection)
        or die ("Error - Could not open database");



    $checkuser = mysql_query("SELECT email FROM info WHERE email = '$email'"); 
    $username_exist = mysql_num_rows($checkuser);
    if ( $username_exist !== 0 )
    {
    die('{status:0,txt:"This email Address is already registered!"}');
    }
    else
    {

       $query = "INSERT INTO info (name, password, repassword, email, interests) VALUES ('$name', '$password', '$repassword', '$email', '$interests')";
       $link = mysql_query($query);


    $_SESSION['email'] = $email;
    $_SESSION['user1'] = $name;
 
    if ($link) {

      header ("location: http://localhost:8888/interests.php"); 
        }
        else {
        echo "Something is wrong";
    }
   
 
    mysql_close($db_connection);

     }

}


?>
</body>
</html>