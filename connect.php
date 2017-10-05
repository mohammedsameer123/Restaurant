<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";
$conn = mysql_connect($hostname,$username,$password);
if (!$conn)
  die("cant connect MySQL");
mysql_select_db ($dbname, $conn)
or die ("cant select database");
?>
