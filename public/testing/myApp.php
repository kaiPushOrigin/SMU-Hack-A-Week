<?php 

session_start();

include "db.php";

	

$re = $_SESSION['meow'];

$sql = "SELECT distinct interests FROM info WHERE name = '$re';";

$result = mysql_query($sql)
        or die(mysql_error());
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
<script>
var js_var = "<?php echo $interests; ?>";
</script>
<script src ="myAppScript.js"></script>
<link rel="stylesheet" href="myLoc.css">
</head>
<body>

<div id="map-canvas">
</div>

<div id="results">
      <h2>Results</h2>
      <ul id="places"></ul>
      <button id="more">More results</button>
</div>

<div id="location">
</div>

</body>
</html>
