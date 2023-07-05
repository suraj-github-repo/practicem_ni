<?php

ini_set('memory_limit', '512M'); 
ini_set('max_execution_time', '600'); 

$con = mysqli_connect('localhost', 'root', '', 'pbillinginvoice');
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>