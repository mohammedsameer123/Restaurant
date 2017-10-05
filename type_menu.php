<?php
$sql = "select * from product_type";
$ex = mysql_query($sql, $conn);
echo "<ul>";
while ($rs=mysql_fetch_array($ex)){
 echo "<li><a href=product_list.php?id=$rs["type_id"]>$rs["type_name"]</li>";
}
?>
