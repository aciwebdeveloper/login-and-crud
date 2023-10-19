
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
    <h1 class="text-center">Registration Form</h1>
    <form  action="register_db.php" method="post">

        <div class="row justify-content-center mt-5">
            <div class ="col-md-6">
                <p>
                    <label for ="fname">User Name</label>
                    <input type="text" name="username" id="stname">
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <p>
                    <label for ="lname"> Email</label>
                    <input type="email" name="email" id="lname">
                </p>
                <p>

                    <label for ="email"> Password</label>
                    <input type="password" name="password" id="email">
                </p>

                <button class="btn btn-success" value="submit" type="submit" name="submit"> Submit form</button>

            </div>
        </div>



    </form>
</div>
</body>
</html>