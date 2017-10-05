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
<?php
 $no = 0;
 include "connect.php";

 $sql = "select * from product_type";
 $ex = mysql_query($sql, $conn);
 $result = mysql_db_query($dbname,$sql);
 $num = mysql_numrows($result);
 if($result>0){
 $show1 = "<table width=600 cellpadding=4 align=center border>";
 $show2 = "<tr bgcolor=#00CCCC align=center><td>Sl No.</td><td> Category
</td><td> Edit</td><td> Delete</td></tr>";
 while ($row = mysql_fetch_array($result)){
 $show3 = "<td align=center>".$row["type_id"]. "</td>";
 $show4 = "<td>" .$row["type_name"]." </td>";
 $show5 = "<td align=center><a
href=admin_edit1_product_type.php id=".$row["type_id"].">แก้ไข</a></td>";
 $show6= "<td align=center><a
href=admin_delete_product_type.php?id=$row[type_id] onclick=\"return
confirm('Delete Confirms?')\">Delete</a></td>";
 $show7= "</tr>";
 }
 $show8 = "</table>";
 echo $show1, $show2,$show3, $show4,$show5, $show6,$show7, $show8;
}
 mysql_close($conn);
?>
</body>
</html>
