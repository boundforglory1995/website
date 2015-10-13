<?php
$con = mysql_connect("localhost", "gianni", "punter14");

mysql_select_db("15545_basic", $con);


if(isset($_POST['get_val']))
{
   $term = $_POST['get_val'];
   $find = mysql_query("select * from homepage where section like'%$term%' or header like '%$term%' order by id LIMIT 2",$con);
   echo mysql_errno($con) . ": " . mysql_error($con) . "\n";
   while($row = mysql_fetch_array($find))
   {
     
     
     echo $row['header'];
    
   }  

   exit;
}

if(isset($_POST['findval']))
{
   $findval = $_POST['findval'];
   $find = mysql_query( "select * from homepage where section = '$findval' " );
   while($row = mysql_fetch_array($find))
   {
     
     echo $row['header'];
     
   }
   
   exit;
}
?>
