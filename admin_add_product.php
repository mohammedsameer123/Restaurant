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
    <p align="center">Add menu</p>
    <form action="admin_add1_product.php" method="post"enctype="multipart/form-data">
 <table width="500" border="0" align="center" cellpadding="5">
 <tr>
   <td>Name</td>
   <td><input name="pname" type="text"></td>
 </tr>
 <tr>
   <td>Category</td>
   <td><select name="ptype" >
     <option value=""> Please Select </option>
 <?php
 include "connect.php";
 $sql = "select * from product_type";
 $ex = mysql_query($sql, $conn);
 while ($rs=mysql_fetch_array($ex)) {
 ?>
<option value="<?php echo $rs["type_id"]?>"><?php echo $rs["type_name"]?></option>
  <?php
}
 mysql_close($conn);
?>
</select>
</td>
</tr>
<tr>
  <td valign="top">Details </td>
  <td><textarea name="pdetail" rows="5" ></textarea></td>
</tr>
<tr>
  <td>Price</td>
  <td><input name="pprice" type="text" ></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input type="submit" value="Add"> <input type="reset" value="Cancel"></td>
</tr>
</table>
<p>&nbsp;</p>
</form>
</body>
</html>
