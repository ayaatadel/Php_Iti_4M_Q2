<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>register</title>
  </head>
  <body>
    <h1 class="text-success text-center m-3">Register</h1>
    <?php  
    if(isset($_GET["message"]))
    {
        echo"<p class='alert alert-info w-50 m-5'>". $_GET["message"] ."</p>";
    }
    ?>
  <form action="server.php"  method="POST" class="w-75  border border-info border-radius-1 m-5 p-3 ">
  <div class="mb-3 w-100">
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
</div>
  <div class="mb-3 w-100">
  <label for="email" class="form-label">Email address</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
</div>
  <div class="mb-3 w-100">
  <label for="password" class="form-label">Password</label>
  <input type="password" class="form-control" name="password" id="password" placeholder="enter your password">
</div>
<div class="mb-3 w-50">
<input type="submit" class="form-control" name="registerBtn" value="Register">

</div>
  </form>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>











