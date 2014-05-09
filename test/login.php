<?php

	session_start();

$username = $_POST['id'];
$password = $_POST['pass'];

if($username && $password)
{
	$connect = mysql_connect("localhost","cs4477223","sid") or die("Couldn't Connect!");
	mysql_select_db("cs4477223") or die("Couldn't find db");
	
	$query = mysql_query("SELECT * FROM info WHERE name = '$username'");
	
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
		
			$dbusername =$row['name'];
			$dbpassword =$row['password'];	
		}
		
		//check if they match
		
		if($username==$dbusername && $password==$dbpassword)
		{
			$_SESSION['userid'] = $username;
			header('location: http://cs.smu.ca/~csc35511/smu/myApp.php');
			exit();
		}
		else{
			echo "<script>alert('Incorrect username or password');</script>";
			//header( 'location: http://cs.smu.ca/~csc35511/smu/index.html' ) ;
			
		}

	}
	else{
	    echo "<script>alert('That user doesn't exist');</script>";	
	    //header( 'Location: http://cs.smu.ca/~csc35511/smu/index.html' ) ;
	    
	}
}

else{
	echo "<script>alert('Please enter a username and password');</script>";
	//header( 'Location: http://cs.smu.ca/~csc35511/smu/index.html' ) ;
	
}


?>
