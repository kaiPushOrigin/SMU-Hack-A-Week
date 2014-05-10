
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
  <link href="bower_components/bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="stylesheets/jumbotron.css" rel="stylesheet">
    <link href="stylesheets/signin.css" rel="stylesheet">
    <link href="stylesheets/background.css" rel="stylesheet">




    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>

.line {
  border-color:yellow;
}
</style>

  </head>

  <body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2>Don't be SELFISH! Share it with the World!</h2>
        <p>Found a new place to kick back and enjoy the Sun, ate an amazing burger from that food truck, 
          bought those earrings for a killer price - Don't hold out from us. Let us know. Write a review about your experiences, 
          name the place and let others share your happines. :)</p>
        <p><a href = "myApp.php" class="btn btn-primary btn-lg" role="button">Back To Tumble &raquo;</a></p>
      </div>
    </div>

<?php include "db.php"; ?>




<?php

//$sql = "SELECT distinct discussions FROM SMUnityCourses WHERE topics = '$topics';";


$sql = 'SELECT distinct name, loc, discussions FROM info WHERE discussions <> " "';

$name1 = $_SESSION['user1'];


$news_query = mysql_query($sql) or die(mysql_error());
$rsNews = mysql_fetch_assoc($news_query);
?>

<?php do {?>
<div class="col-lg-4">
          <img class="img-circle" data-src="img/google.png" src = "img/google.png" alt="Generic placeholder image">
<p><h2><div class = "pad"> <?php echo $rsNews['name']; ?> <br /></h2> <div id = "line" class = "jumbotron">

  - <u><? echo $rsNews['loc']; ?></u> <br /> <? echo $rsNews['discussions']; ?> 
  





</div>
</div>
<?php } while ($rsNews = mysql_fetch_assoc($news_query)) ?>


<br /><br /><br /><br /><br /><br /><br />

</div>


<form class="form-signin" role="form" action="post-discussions.php" method="post">

            <h2 class="form-signin-heading">Share Your Experience!</h2>
       User Name: <input type="text" name="name" id="name" class="form-control" placeholder="User Name" required><br />
       Name Of The Place/Activity: <input type="text" name="loc" id="loc" class="form-control" placeholder="Name Of The Place/Activity" required><br />
            Comments : <input type="text" name="discussions" id="discussions" class="form-control" placeholder="Comments" required><br />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Start!</button>
          </form>





</div>



      <hr>

      <footer>
        <p>&copy; TUMBLE 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/bootstrap-jasny/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap-jasny/dist/js/docs.min.js"></script>
  </body>
</html>
