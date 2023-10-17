<?php

$student_name = $_POST['stname'];
$student_class = $_POST['class_name'];
$student_phone = $_POST['phone_no'];

$servername = 'localhost';
$username = 'root';
$pass2word = '';
$database = 'institute';
$conn = new mysqli($servername, $username, $pass2word, $database);


$sql_query = "INSERT INTO student_info (name, class, phone_no) 
VALUES ('$student_name', '$student_class', $student_phone)";

$conn->query($sql_query);

header('location: curd_php.php');
