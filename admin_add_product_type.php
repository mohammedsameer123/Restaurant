<?php
 include "connect.php";

 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))){
 header("location:index.html");
 exit;
 }

 $pname = $_POST["product_type"];
 $sql = "insert into product_type (type_id,type_name) values ('DEFAULT','$pname')";
 mysql_query($sql, $conn)
 or die ("Error<br>" . mysql_error());
 mysql_close($conn);
 echo "<meta http-equiv='refresh' content='0;
url=admin_product_type.php'>";
?>
