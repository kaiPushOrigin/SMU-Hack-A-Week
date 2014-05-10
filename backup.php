<?php 

session_start();

include "db.php";
//include "map_process.php";
  

$re = $_SESSION['email'];

$sql = "SELECT distinct interests FROM info WHERE email = '$re';";

$result = mysql_query($sql)
        or die(mysql_error());

$woo = mysql_fetch_array($result);

echo "<script>alert('$woo')</script>";

if ($result != 0) {
    $num_results = mysql_num_rows($result);
    for ($i=1;$i<2;$i++) {
        $row = mysql_fetch_array($result);
        $interests = $row['interests'];

    }
   $pr = $_GET["interests"]; 
}
?>

<!doctype HTML>
<html>
<head>
<title>Wherever you go, there you are</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>
  <link href="bower_components/bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/navmenu-push.css" rel="stylesheet">

<script>
var js_var = "<?php echo $interests; ?>";
</script>
<script src ="myAppScript.js"></script>
<link rel="stylesheet" href="myLoc.css">
<!--<style>
#tap
{
  background-color:#7D26CD;
}
</style>-->
</head>
<body>

<div id="map-canvas"></div>
<div id="results" style="display:none;">
      <h2>Results</h2>
      <ul id="places"></ul>
      <button id="more">More results</button>
</div>


<div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
      <a class="navmenu-brand" href="#">Project name</a>
      <ul class="nav navmenu-nav">
        <li><a href="../navmenu/">Slide in</a></li>
        <li class="active"><a href="./">Push</a></li>
        <li><a href="../navmenu-reveal/">Reveal</a></li>
        <li><a href="../navbar-offcanvas/">Off canvas navbar</a></li>
      </ul>
      <ul class="nav navmenu-nav">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu navmenu-nav">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="navbar navbar-default navbar-fixed-top">
      <button type="button" id = "tap" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>





<button id="sex" value="button" onclick="toggle();">More Info.</input>
    
<div id="location">
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="bower_components/bootstrap-jasny/dist/js/bootstrap.min.js"></script>

</body>
</html>
