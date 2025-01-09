<?php

require('connection.php');
// var_dump($_POST);
// var_dump($_POST["name"]);
// header("location:./register.php?message=Email already exist");
//         exit();  // prevent header execute code after it
if (isset($_POST["registerBtn"])) {
    //   echo "Register";
    $userName = $_POST["name"];
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];
    $encryptedPassword=md5($userPassword);

    $checkEmail="SELECT * from users WHERE email='$userEmail'";
    $statment = $connection->prepare($checkEmail);
     $statment->execute();
    $result = $statment->fetch(PDO::FETCH_ASSOC); 
    if($result)
    {
        header("location:./register.php?message=Email already exist");

    }
    else{
/***  encript password  , regix input         */
 
// validation on name ==>
$namePattern="/^[a-zA-Z ]{3,}$/";
/**preg_match=======>Perform a regular expression match */
if(!preg_match($namePattern,$userName))
{
    header("location:./register.php?message=name must be more than 3 characters ");
    exit(); 
}
// validation on email
if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL))
{
    header("location:./register.php?message= your email is incorrect check your email");
    exit(); 
}

// regular expression on password
$passwordPattern="/^[1-9]{5,}$/";
/**preg_match=======>Perform a regular expression match */
if(!preg_match($passwordPattern,$userPassword))
{
    header("location:./register.php?message=password must be more than 3 numbers ");
    exit(); 
}
        $query = "INSERT into users(name,email,PASSWORD)  VALUES('$userName','$userEmail','$encryptedPassword')";
        $statement = $connection->prepare($query);
        $statement->execute();
        header("location:./login.php?message=you registered successfully you can login");
        exit(); 
    }


}



if(isset($_POST["btnLogin"]))
{
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];
    $encryptedPassword=md5($userPassword);
    $query="select * from users where email='$userEmail' and password='$encryptedPassword' ";
    $statement=$connection->prepare($query);
    $statement->execute();
    $result=$statement->fetch(PDO::FETCH_ASSOC); /// valid  ==> null
    if($result)
    {
        header("location:./profile.php?message=login Successfully");
        exit;
    }
    else{
        header("location:./login.php?message=Invalid email or password");
        exit;

    }

}
