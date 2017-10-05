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
 <form action="admin_add_product_type.php" method="post">
 <table width="500" align="center" border="0">
 <tr>
 <td width="200">Add Category</td>
 <td><input type="text" name="product_type" size="30"></td>
 </tr>
 <tr>
 <td width="150"></td>
 <td><input name="Submit" type="submit" value="Add">
 <input name="Reset" type="reset" value="Cancel"></td>
 </tr>
 </table>
</form>
<br><br>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
  <body><br><br>
    <p align="center">Display all Menu</p>
    <table width="700" border="1" align="center">
    <tr bgcolor="#00CCCC" align="center">
     <td>SI No.</td>
     <td>Category</td>
     <td>Edit</td>
     <td>Delete</td>
   </tr>
   <?php
    include "connect.php";
    $sql = "select * from product_type";
    $ex = mysql_query($sql, $conn);
    while($rs=mysql_fetch_array($ex)) {
   ?>
 <tr align="center">
 <td><?php echo $rs["type_id"]?></td>
 <td><?php echo $rs["type_name"]?></td>
 <td><a href=admin_edit1_product_type.php?id=<?=$rs["type_id"]?>>Edit</a></td>
 <td><a href=admin_delete_product_type.php?id=<?=$rs["type_id"]?>onclick="return confirm('Delete Confirm?')">Delete</a></td>
 </tr>
<?php
 }
 mysql_close($conn);
?>
</table>
</body>
</html>
