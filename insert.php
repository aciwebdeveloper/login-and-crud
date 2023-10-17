<?php
$server = 'localhost';
$username='root';
$password='';
$db_name='institute';

$conn = new mysqli($server,$username,$password,$db_name) ;

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student_info";
$res = $conn->query($sql);



//$conn->close();


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-grey">
<div class="container mt-5">
    <h1 class="text-center">Add Student Data </h1>
    <form  action="insert_db.php" method="post">

        <div class="row justify-content-center mt-5">
            <div class ="col-md-6">
                <p>
                    <label for ="fname">Student Name</label>
                    <input type="text" name="stname" id="stname">
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <p>
                    <label for ="lname"> Clas Name</label>
                    <input type="text" name="class_name" id="lname">
                </p>
                <p>

                    <label for ="email"> Phone No</label>
                    <input type="text" name="phone_no" id="email">
                </p>

                <button class="btn btn-success" type="submit" name="submit"> Submit form</button>

            </div>
        </div>



    </form>
</div>
</body>
</html>