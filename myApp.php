<?php 

session_start();

include "db.php";
  

$re = $_SESSION['email'];

$sql = "SELECT interests FROM info WHERE email = '$re';";
$second_sql = "SELECT secondInterests FROM info WHERE email = '$re';";

$result = mysql_query($sql)
        or die(mysql_error());

$second_result = mysql_query($second_sql)
        or die(mysql_error());


  while($row = mysql_fetch_assoc($result)){

    $summary[]= $row['interests'];        //for checkboxes
  }

  $frown = implode(",",$summary);





  while($row = mysql_fetch_assoc($second_result)){

    $second_summary= $row['secondInterests'];   //for textbox
  }





?>

<!doctype HTML>
<html>
<head>
<title>Wherever you go, there you are</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>
      <link href="stylesheets/two.css" rel="stylesheet"><link href="stylesheets/one.css" rel="stylesheet">
        <link href="bower_components/bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">



    <link href="stylesheets/navmenu-push.css" rel="stylesheet">

<script>
var js_var = "<?php echo $interests; ?>";
var second_js_var = "<?php echo $second_summary; ?>";
</script>

<script src ="myAppScript.js"></script>
<link rel="stylesheet" href="myLoc.css">
<style>
#tap
{
  background-color:#7D26CD;
}
</style>
</head>
<body>

<div id="map-canvas"></div>
<div id="results" style="display:none;">
      <h2>Results</h2>
      <ul id="places"></ul>
      <button id="more">More results</button>
</div>


<div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <a class="navmenu-brand" href="#">TUMBLE</a>
      <ul class="nav navmenu-nav">
        <li><a href="discussions.php">Share Your Experience</a></li>
        <li><a href="interests.php">Edit Your Interests</a></li>
        <li><a href="index.html">Logout</a></li>
      </ul>
            
      
    </div>

    <div class="navbar navbar-default navbar-fixed-bottom">
      <button type="button" id = "tap" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <button id="sex" class="btn btn-md btn-danger" value="button" onclick="toggle();">Popular Listings</button>
    </div>


    
<div id="location">
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="bower_components/bootstrap-jasny/dist/js/bootstrap.min.js"></script>

</body>
</html>
