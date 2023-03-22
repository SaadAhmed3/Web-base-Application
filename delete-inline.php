<?php
$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student WHERE sid ={$stu_id}";

#Function

$result = mysqli_query($db, $sql) or die("Query Unsuccessful.");

#Re Direction

header("location: http://localhost/crud/index.php");

#Close Connection 
mysqli_close($db);



?>