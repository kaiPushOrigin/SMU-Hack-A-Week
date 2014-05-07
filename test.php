
<?php include "db.php"; ?>

<?php $sql = "SELECT distinct interests FROM info GROUP BY interests;";

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


 
<html>
  <head>
    <title>Pass variable from PHP to JavaScript - Cyberster's Blog'</title>
  



<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>
<link rel="stylesheet" href="myLoc.css">
<script src="myAppScript.js"></script>



  <body>

<div id="map-canvas">
</div>

<div id="location">
</div>

</body>
</html>