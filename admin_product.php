<?php
 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))){
   header("location:index.html");
   exit;
 }

 include "admin_menu.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
  <body><br><br>
    <p align="center">Display all Menu</p>
    <table width="700" border="1" align="center">
    <tr bgcolor="#00CCCC" align="center">
     <td>Number</td>
     <td>Menu</td>
     <td>Category</td>
     <td>Price</td>
     <td>Edit</td>
     <td>Delete</td>
   </tr>
<?php
 include "connect.php";
 $sql = "select * from product inner join product_type where
product.type_id = product_type.type_id order by product_id desc ";
 $ex = mysql_query($sql, $conn);
 while($rs=mysql_fetch_array($ex)) {
?>
 <tr align="center">
 <td><?=$rs["product_id"]?></td>
 <td><?=$rs["product_name"]?></td>
 <td><?=$rs["type_name"]?></td>
 <td><?=$rs["product_price"]?></td>
 <td><a href=admin_edit1_product.php?id=<?=$rs["product_id"]?>>Edit</a></td>
 <td><a href=admin_delete_product.php?id=<?=$rs["product_id"]?>onclick="return confirm('Delete Confirm?')">Delete</a></td>
 </tr>
<?php
 }
 mysql_close($conn);
?>
</table>
<p>&nbsp;</p>
</body>
</html>
