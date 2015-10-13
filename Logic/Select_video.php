<?php
$con=mysqli_connect("localhost", "gianni", "punter14", "15545_basic");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo $mysqli->host_info . "<hr>";

$con->set_charset('utf8');


$result4 = mysqli_query($con,"SELECT video_path FROM videos");
$setVideo = array();
while ($video = mysqli_fetch_array($result4)){
$setVideo[] = $video;

	
}