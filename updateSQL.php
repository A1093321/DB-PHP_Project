<?php 
require("DBconnect.php");

session_start();
$sessionPN = $_SESSION["Pname"];

$S=$_POST["supplier"];
$R=$_POST["rating"];
$P=$_POST["price"];

$sql = "UPDATE product SET supplier='$S', rating='$R', price='$P' WHERE name='$sessionPN'";
$result = (mysqli_query($link,$sql));
if(mysqli_affected_rows($link)==1){
    echo "<script type='text/javascript'>";
        echo "alert ('修改產品資料成功');"; 
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
}else{
    echo "<script type='text/javascript'>";
        echo "alert ('修改產品資料失敗');"; 
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
}
?>