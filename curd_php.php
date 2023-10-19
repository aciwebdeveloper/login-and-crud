<?php
session_start();
if (!isset($_SESSION['username']))
{
    echo $_SESSION['username'];
}

include 'connection.php';
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student_info";
$res = $conn->query($sql);
if (empty($res->num_rows))
    $res = [];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-dark">
<div class="container mt-5">
            <h1 class="text-center text-white">Students Data</h1>
    <a class="btn btn-primary" href="insert.php" style="float: right; font-weight: bold">Add Student</a>
    <a class="btn btn-primary" href="check_login.php?logout=1" style="float: right; font-weight: bold">Logout</a>
    <table class="table bg-secondary text-white rounded mt-5 border table-bordered text-center">
        <thead class="bg-info ">
        <tr class="h3">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone No</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $res->fetch_assoc()) : ?>
            <tr>
                <th><?php echo $row['id'] ?></th>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['class'] ?></td>
                <td><?php echo $row['phone_no'] ?></td>
                <td>
                    <a href="edit.php?id=<?=$row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=<?=$row['id'] ?>" class="btn btn-danger">Delete</a>
                </td>

            </tr>
        <?php endwhile ?>
        </tbody>
    </table>
    </div>
    </body>
</html>