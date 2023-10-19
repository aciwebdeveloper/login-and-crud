<?php

$student_name = $_POST['stname'];
$student_class = $_POST['class_name'];
$student_phone = $_POST['phone_no'];
$id = $_POST['user_id'];

$servername = 'localhost';
$username = 'root';
$pass2word = '';
$database = 'student_management';
$conn = new mysqli($servername, $username, $pass2word, $database);

$sql_query = "UPDATE student_info SET name='$student_name', class = '$student_class', 
phone_no = '$student_phone' WHERE id ='$id'";
//
//$sql_query = "INSERT INTO student_info (name, class, phone_no)
//VALUES ('$student_name', '$student_class', $student_phone)";

$conn->query($sql_query);

header('location: curd_php.php');
