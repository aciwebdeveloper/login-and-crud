<?php
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


$sql_query = "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$password')";

$conn->query($sql_query);

header('location: login.php');
