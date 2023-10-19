<?php
session_start();

if($_GET['logout'])
{
    session_destroy();

    header('location: index.php');
}


if (isset($_POST['submit']))
{

    include 'connection.php';

    $password = $_POST['upassword'];
    $email = $_POST['uname'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $res = $conn->query($sql);
    if ($res->num_rows > 0)
    {
        $data = $res->fetch_assoc();
        $_SESSION['username'] = $data['email'];

        header('location: index.php');
    }
    else
    {
        echo ' wrong email or password';
    }
}


