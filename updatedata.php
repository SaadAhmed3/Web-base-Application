<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "crud");
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
$sql = "UPDATE student SET sname ='{$stu_name}', saddress = '{$stu_address}', sclass ='{$stu_class}', sphone ='{$stu_phone}' WHERE sid ={$stu_id}";
$result = mysqli_query($db, $sql) or die("Query Unsuccessful.");

header("location: http://localhost/Crud/index.php");
mysqli_close($db);
?>
