<?php
require("DBconnect.php");

$N=$_POST["name"];
$T=$_POST["type"];
$S=$_POST["supplier"];
$R=$_POST["rating"];
$P=$_POST["price"];

$sql = "INSERT INTO product (name,type,supplier,picture,rating,price) VALUES ('$N','$T','$S','','$R','$P')";
$result = (mysqli_query($link,$sql));
if(mysqli_affected_rows($link)==1){
    echo "<script type='text/javascript'>";
        echo "alert ('新增產品成功');"; 
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=admin.php'>";
}else{
    echo "<script type='text/javascript'>";
        echo "alert ('新增產品失敗');"; 
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=insert.php'>";
}
?>