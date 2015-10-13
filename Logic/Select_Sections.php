
     
<?php

$con=mysqli_connect("localhost", "gianni", "punter14", "15545_basic");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo $mysqli->host_info . "<hr>";

$con->set_charset('utf8');


$page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1;

$limit=3;

$start=($page_nr-1)*$limit;

$result=mysqli_query($con,"select * from homepage LIMIT $start, $limit");

$secHeaders=array();
while($item = mysqli_fetch_assoc($result)){
$secHeaders[]=$item;	
}

$result2 = $con->query("SELECT * from homepage");
$rows= $result2 ->num_rows;
$total=ceil($rows/$limit);

