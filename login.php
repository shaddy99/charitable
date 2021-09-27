<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from users where username= '$username' AND password= '$password'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    

    if ($num == 1){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: index.php");
    }

else{
    $showError = "Invalid Account"; }
}
require 'partials/_nav.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Login</title>
</head>


    <title>Login</title>
  </head>
  <body>
    
 
      <img src="images/fg.jpg" alt="error" style= "width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.5">
  <?php
  if($login){
  echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success</strong> You are Logged In
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
  }
  if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong> Error </strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
    }
  ?>

  


    <div class="container my-8">
        <h1 class="text-center" style="font-family: 'Rubik Beastly', cursive;">Welcome To Log In Page</h1>
    </div>

    <form action="/charitable/login.php" method="post" style="    display: flex;
    flex-direction: column;
    align-items: center;">
  <div class="form-group col-md-6">
    <label for="username" class="form-label"><b>Name</b></label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Please Type Your Name">
    
  </div><br>
  <div class="form-group col-md-6">
    <label for="password" class="form-label"><b>Password</b></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Please Type Your Password">
  </div>
  <br><br>
  <button type="submit" class="btn btn-danger col-md-6">Log In</button>
</form>

    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
    
</body>
</html>