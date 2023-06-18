<?php
session_start();
$GETname=$_GET["name"];
$_SESSION["Pname"] = $GETname;
$sessionPN = $_SESSION["Pname"];

echo "<script> if(confirm( '確定刪除?'))  location.href='deleteSQL.php';else location.href='delete.php'; </script>"; 

?>