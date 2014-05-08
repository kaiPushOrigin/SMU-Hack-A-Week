<?php 
include 'library/config.php'; 
include 'library/opendb.php'; 
$query="select database() AS `db`, user() AS `name`"; 
$result=mysql_query($query); 
$row = mysql_fetch_assoc($result); 
echo 'database: '.$row['db'],'<p>'; 
echo 'user: '.$row['name']; 
include 'library/closedb.php'; 
?> 






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <title>SMUnity</title>


  <!-- Bootstrap core CSS -->
<link href="stylesheets/home.css" rel="stylesheet">
  <link href="bootstrap-jasny/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="stylesheets/navbar-fixed-top.css" rel="stylesheet">
      <link href="stylesheets/signin.css" rel="stylesheet">


<body>
	<?php include "db.php"; ?>

<br />
<br />
<br />
<?php 
include 'library/config.php'; 
include 'library/opendb.php'; 
$query="select database() AS `db`, user() AS `user`"; 
$result=mysql_query($query); 
$row = mysql_fetch_assoc($result); 
echo 'database: '.$row['db'],'<p>'; 
echo 'user: '.$row['user']; 
include 'library/closedb.php'; 
?> 


<br />
<br />
<br />
<br />
</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery/dist/jquery.min.js"></script>
    <script src="bootstrap-jasny/dist/js/bootstrap.min.js"></script>
  </body>
  </html>
