<?php
require("DBconnect.php");
session_start();
$sessionPN = $_SESSION["Pname"];

$sql = "DELETE FROM product WHERE name = '$sessionPN'";
$result = mysqli_query($link,$sql);

if(mysqli_affected_rows($link)==1){
    echo "<script type='text/javascript'>";
    echo "alert ('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert ('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
}
?>