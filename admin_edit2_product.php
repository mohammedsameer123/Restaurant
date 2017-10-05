<?php
 include "connect.php";
 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))) {
 header("location:index.html");
 exit;
}
 $id = $_POST["pid"];
 $name = $_POST["pname"];
 $type = $_POST["ptype"];
 $detail = $_POST["pdetail"];
 $price = $_POST["pprice"];
 if ($name == "") {
 echo "Enter Name";
 exit();
 } else if ($type == "") {
 echo "Select Category";
 exit();
 } else if (empty($detail)){
 echo "Enter Details";
 exit();
 } else if ($price == "") {
 echo "Enter Price";
 exit();
 }

 $sql = "insert into product (product_id, product_name, type_id,product_detail, product_price) values ('','$name', '$type','$detail', '$price')";
 $sql = "update product set product_name='$name', type_id='$type',product_detail='$detail', product_price='$price' where product_id='$id'";
 $ex = mysql_query($sql, $conn);
 if($ex){
   echo "<meta http-equiv='refresh' content='0;
   url=admin_product.php'>";
 } else {
 echo "<h3>Error</h3>" . mysql_error();
 }
 mysql_close($conn);
?>
