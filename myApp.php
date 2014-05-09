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


<html>
<head>
<title>Wherever you go, there you are</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>
<script>
var js_var = "<?php echo $interests; ?>";
</script>
<script src ="myAppScript.js"></script>
<link href="bower_components/bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
<link rel="stylesheet" href="../myLoc.css">
</head>
<body>

	

<div id="map-canvas"></div>
<div id="results" style="display:none;">
      <h2>Results</h2>
      <ul id="places"></ul>
      <button id="more">More results</button>
</div>

<div id ="street"></div>

<button id="sex" value="button" onclick="toggle();">More Info.</input>
    
<div id="location">
</div>




    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap-jasny/dist/js/bootstrap.min.js"></script>




</body>
</html>