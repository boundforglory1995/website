
<?php

$con=mysqli_connect("localhost", "gianni", "punter14", "15545_basic");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo $mysqli->host_info . "<hr>";

$con->set_charset('utf8');


$result3 = mysqli_query($con,"SELECT *  FROM tour" );
$secheadTour=array();
while($tourdata = mysqli_fetch_array($result3)){
$secheadTour[]=$tourdata;	
}