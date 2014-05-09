<?

include "db.php";

$passtime=$_POST['passtime'];
foreach ($passtime as $value){
$query="INSERT INTO info (interests) VALUES ('$value')";
mysql_query($query);
}


    header ("location: http://cs.smu.ca/~csc35511/smu/myApp.php"); 
    	
    mysql_close($db_connection);

     

?>
