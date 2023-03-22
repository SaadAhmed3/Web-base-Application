<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "crud");
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUE ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}') ";
$result = mysqli_query($db, $sql) or die("Query Unsuccessful.");

header("location: http://localhost/Crud/index.php");
mysqli_close($db);
?>