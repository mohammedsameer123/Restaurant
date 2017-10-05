<?php
 include "connect.php";
 session_start();
 $user = $_POST["user"];
 $pass = $_POST["pass"];
 $sql = "select * from login";
 $ex = mysql_query($sql, $conn);
 while ($rs = mysql_fetch_array($ex)){
 if (($user==$rs["username"]) and ($pass==$rs["password"])) {
   $_SESSION["username"] = $user;
   $_SESSION["password"] = $pass;
   $show = header('Location: admin_home.php');
    } else {
      echo "error";
    }
 }
 echo $show;
 mysql_close($conn);
?>
