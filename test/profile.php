
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
  <link href="../bower_components/bootstrap-jasny/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../stylesheets/navbar-fixed-top.css" rel="stylesheet">
      <link href="../stylesheets/signin.css" rel="stylesheet">


<body>
  <?php include "db.php"; ?>

<br />
<br />
<br />
<?php $sql = "SELECT distinct interests FROM info GROUP BY interests;";

$result = mysql_query($sql)
        or die(mysql_error());
if ($result != 0) {
    $num_results = mysql_num_rows($result);
    for ($i=1;$i<2;$i++) {
        $row = mysql_fetch_array($result);
        $interests = $row['interests'];
  echo '<div class="row row-offcanvas row-offcanvas-right">';
echo '<div class="jumbotron">';

        echo "<h2>Welcome to TUMBLE, Your interests are $interests </h2><br />";

echo '</div> </div>';
    }
   $pr = $_GET["interests"];
   echo $pr;
    echo '</select>';
    echo '</label>';    
}
?>

<br />
<br />
<br />
<br />












<a href = "courses-list.php"><button class="btn btn-lg btn-primary" type="submit">Connect with Classmates for help!</button></a>







     <div class="navbar navbar-inverse navbar-default navbar-fixed-top">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   </div>

   <div class="navmenu navmenu-inverse navmenu-fixed-left offcanvas">
    <a class="navmenu-brand" href="#">Your Menu</a>
    <ul class="nav navmenu-nav">
      <li><a href="welcome.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="../navmenu-reveal/"><span class="glyphicon glyphicon-book"></span> Courses</a></li>
      <li><a href="market.html"><span class="glyphicon glyphicon-shopping-cart"></span> Market</a></li>
      <li><a href="../navmenu-reveal/"><span class="glyphicon glyphicon-flag"></span> Events</a></li>
      <li><a href="../navmenu-reveal/"><span class="glyphicon glyphicon-user"></span> People</a></li>
      <li><a href="../navmenu-reveal/"><span class="glyphicon glyphicon-question-sign"></span> Questions</a></li>
      <li><a href="../navmenu-reveal/"><span class="glyphicon glyphicon-info-sign"></span> Links</a></li>
      <li><a href="../navmenu-reveal/"><span class="glyphicon glyphicon-phone"></span> My SMU Contacts</a></li>
      <li><a href="../navmenu-reveal/"><span class="glyphicon glyphicon-time"></span> Calendar</a></li>
      <li><a href="map.html"><span class="glyphicon glyphicon-globe"></span> Map</a></li>
      <li><a href="../navmenu-reveal/"><span class="glyphicon glyphicon-dashboard"></span> Upcoming Events</a></li>
    </ul>
  </div>

           

</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap-jasny/dist/js/bootstrap.min.js"></script>
  </body>
  </html>
