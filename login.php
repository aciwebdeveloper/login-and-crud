
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .label{
            font-size: 17px; font-weight: bold;
        }
    </style>
</head>
<body class="bg-grey">
<div class="container mt-5">
    <h1 class="text-center">Login </h1>
    <form  action="check_login.php" method="post">

        <div class="row justify-content-center mt-5">
            <div class ="col-md-6 text-center">
                <p>
                    <label class="label" for ="fname">username</label>
                    <input type="text" name="uname" id="uname">
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <p>
                    <label class="label" for ="upassword"> Password</label>
                    <input type="password" name="upassword" id="upassword">
                </p>
                <button class="btn btn-success" type="submit" name="submit"> Submit</button>
            </div>
            <p class="text-center">
                if you don't have account then register please <a href="register.php" class="btn btn-warning"> Register</a>
            </p>
        </div>



    </form>
</div>
</body>
</html>