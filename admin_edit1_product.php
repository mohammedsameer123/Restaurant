<?php
 session_start();
 if ((empty($_SESSION["username"])) or (empty($_SESSION["password"]))) {
   header("location:index.html");
   exit;
 }

 include "admin_menu.php";
 include "connect.php";
 $id = $_GET["id"];
 $sql = "select * from product where product_id = $id";
 $ex = mysql_query($sql, $conn);
 $rs=mysql_fetch_array($ex);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<body><br><br>
<p align="center">Edit Menu</p>
<form action="admin_edit2_product.php" method="post"enctype="multipart/form-data">
 <table width="500" border="0" align="center" cellpadding="5">
 <tr>
 <td>Menu Name</td>
 <td><input name="pname" type="text"value="<?php echo $rs['product_name']?>"></td>
 </tr>
 <tr>
 <td>Category</td>
 <td><select name="ptype" >
<option value="">Please select Category</option>
<?php
 $sql_type = "select * from product_type";
 $ex_type = mysql_query($sql_type, $conn);
 while ($rs_type=mysql_fetch_array($ex_type)) {
   if ($rs_type['type_id'] == $rs['type_id'])
{
?>
<option value="<?php echo $rs_type['type_id']?>"selected><?php echo $rs_type['type_name']?></option>
<?php
 } else {
?>
 <option value="<?php echo $rs_type['type_id']?>"><?php echo $rs_type['type_name']?></option>
<?php
 }
}
?>
 </select>
 </td>
 </tr>
 <tr>
 <td valign="top">Menu details</td>
 <td><textarea name="pdetail" rows="5" ><?php echo $rs['product_detail']?></textarea></td>
 </tr>
 <tr>
 <td>Price</td>
 <td><input name="pprice" type="text" value="<?php echo $rs['product_price']?>"></td>
 </tr>
 <tr>
 <td>&nbsp;</td>
 <td><input type="hidden" name="pid" value="<?php echo $rs['product_id']?>">
 <input type="submit" value="Save"> <input type="button" value="Cancel" onClick="history.back(0)"></td>
 </tr>
 </table>
 <p>&nbsp;</p>
</form>
<?php
 mysql_close($conn);
?>
</body>
</html>
