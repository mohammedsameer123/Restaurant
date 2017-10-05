<?php
 include "connect.php";
 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))){
   header("location:index.html");
   exit;
 }
 $id = $_GET["id"];
 $sql = "delete from product_type where type_id='$id'";
 $ex = mysql_query($sql, $conn);
 if($ex){
 echo "<meta http-equiv='refresh' content='0;
 url=admin_product_type.php'>";
 } else {
 echo "<h3>Error</h3>";
 }
 mysql_close($conn);
?>
