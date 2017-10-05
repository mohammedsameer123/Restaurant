<?php
 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))){
   header("location:index.html");
   exit();
 }
 include "connect.php";

 $name = $_POST["pname"];
 $type = $_POST["ptype"];
 $detail = $_POST["pdetail"];
 $price = $_POST["pprice"];
 $pic = $_FILES["pimage"];

 if ($name == ""){
   echo "Please Enter Name";
   exit();
 } else if ($type == "") {
   echo "Select Category";
   exit();
 } else if (empty($detail)){
   echo "Details of Menu";
   exit();
 } else if ($price == "") {
   echo "Enter Price";
   exit();
} else if (empty($pic["size"])){
  echo "Insert Image";
  exit();
}
$sql = "insert into product (product_id, product_name, type_id,
product_detail, product_price, product_image) values ('', '$name', $type,'$detail', $price, '')";
mysql_query($sql, $conn)
or die ("Error<br>" . mysql_error());
$sqlmax = "select max(product_id) from product";
$ex = mysql_query($sqlmax, $conn);
$row = mysql_fetch_row($ex);
$filename = $pic["name"];
$filetemp = $pic["tmp_name"];
$ext = strtolower(end(explode('.',$filename)));
$filename = $row[0] . "." . $ext;
copy($filetemp, "images/".$filename);
$sql_update = "update product set product_image='$filename' where
product_id=$row[0]";
mysql_query($sql_update, $conn);
mysql_close($conn);
include "admin_menu.php";
echo "<center><h1>Added into Database</h1></center>";
?>
