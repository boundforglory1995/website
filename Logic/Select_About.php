

<?php
$con=mysqli_connect("localhost", "gianni", "punter14", "15545_basic");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo $mysqli->host_info . "<hr>";

$con->set_charset('utf8');
//echo $mysqli->host_info . "<hr>";





$result=mysqli_query($con,"select * from about");

$secAbout=array();
while($items = mysqli_fetch_array($result)){
$secAbout[]=$items;	
}
