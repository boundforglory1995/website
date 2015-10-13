<?php

$con=mysqli_connect("localhost", "gianni", "punter14", "15545_basic");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo $mysqli->host_info . "<hr>";

$con->set_charset('utf8');



$result = mysqli_query($con,"SELECT path FROM slider ORDER BY id DESC LIMIT 3");
$setPictures = array();
while ($pictures = mysqli_fetch_array($result)){
$setPictures[] = $pictures;

	
}	