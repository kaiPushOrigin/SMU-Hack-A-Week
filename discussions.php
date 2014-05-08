
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
  <<link href="bower_components/bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../stylesheets/profile.css" rel="stylesheet">
      <link href="stylesheets/signin.css" rel="stylesheet">


<style>
.title {

color: #FFA500;
padding-top: -20px;
margin-top: -70px;
margin-bottom: -40px;
}

.pad{

padding-left: 5%;}
</style>

</head>


<body>

<h2> <div class = "title"> Current Discussions on this topic:</div> </h2> <br /> <br /> <br /> <br />


	<?php include "db.php"; ?>








<?php

//$sql = "SELECT distinct discussions FROM SMUnityCourses WHERE topics = '$topics';";


$sql = 'SELECT distinct discussions, name FROM info WHERE discussions <> " "';



$news_query = mysql_query($sql) or die(mysql_error());
$rsNews = mysql_fetch_assoc($news_query);
?>

<?php do {?>
<p><h2><div class = "jumbotron"> <?php echo $rsNews['name']; ?> <br /></h2> <div class = "pad"><? echo $rsNews['discussions']; ?> 

</div>
</div>
<?php } while ($rsNews = mysql_fetch_assoc($news_query)) ?>


<br /><br /><br /><br /><br /><br /><br />

<form class="form-signin" role="form" action="post-discussions.php" method="post">

            <h2 class="form-signin-heading">Help your Classmates!</h2>
	     Name: <input type="text" name="name" id="name" class="form-control" placeholder="Name" required><br />
            Comments : <input type="text" name="discussions" id="discussions" class="form-control" placeholder="Comments" required><br />
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Start!</button>
          </form>





</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap-jasny/dist/js/bootstrap.min.js"></script>

  </body>
  </html>
