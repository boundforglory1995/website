<?php 

// De databaseverbinding
// Zie http://www.php.net/manual/en/book.mysqli.php

$con=mysqli_connect("localhost", "gianni", "punter14", "15545_basic");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo $mysqli->host_info . "<hr>";

$con->set_charset('utf8');
