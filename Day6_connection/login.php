<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login</title>
</head>

<body>
    <h1 class="text-success text-center m-3">Login</h1>
    <?php
    if (isset($_GET["message"])) {
        echo "<p class='alert alert-info w-50 m-5'>" . $_GET["message"] . "</p>";
    }
    ?>
    <form action="server.php" method="POST" class="w-75  border border-info border-radius-1 m-5 p-3 ">
        <div class="mb-3 w-100">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3 w-100">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="enter your password">
        </div>
        <div class="mb-3 w-25 d-flex justify-content-center align-items-center">
            <input type="submit" name="btnLogin" class="form-control btn-succcess" value="Login">
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>