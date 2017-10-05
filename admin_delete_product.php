<?php
 include "connect.php";
 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))) {
   header('location:index.html');
   exit;
 }
 $id = $_GET["id"];
 $sql_del = "select * from product where product_id='$id'";
 $ex_del = mysql_query($sql_del, $conn);
 $rs_del =mysql_fetch_array($ex_del);
 $sql = "delete from product where product_id='$id'";
 $ex = mysql_query($sql, $conn);
if($ex) {
  echo "<meta http-equiv='refresh' content='0;
  url=admin_product.php'>";
 } else {
 echo "<h3>Error to Delete</h3>";
 }
 mysql_close($conn);
?>
