<?php
 include "connect.php";

 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))){
   header("location:index.html");
   exit;
 }

 $tid = $_POST["type_id"];
 $tname = $_POST["type_name"];

 if($tname ==""){
 echo "<h3>Insert Category</h3>";
 exit();
 }
 $sql = "update product_type set type_name='$tname' where type_id='$tid'";
 $ex = mysql_query($sql, $conn);
 if($ex){
   echo "<meta http-equiv='refresh' content='0;
   url=admin_product_type.php'>";
 } else {
 echo "<h3>Error</h3>";
 }
 mysql_close($conn);
?>
