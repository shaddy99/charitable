<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($connect, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
       
        $showError = "Username Already Exists";
    }
    elseif(empty($username)){
      $showError = "Name is Empty";
    }
    elseif(empty($password)){
      $showError = "Password is Empty";
    }
    else{
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($connect, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
        
    }
}
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title>Signup</title>
  </head>
  <body>
  <?php require 'partials/_nav.php' ?>
  
  <img src="images/bf.jpg" alt="error" style= "width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.5">
  <?php
  if($showAlert){
  echo   '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has been created and You can login now
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';}
if($showError){
    echo   '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '. $showError .'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';}
?>
<div>
    <div class="container my-8">
        <h1 class="text-center text-dark" style="font-family: 'Rubik Beastly', cursive;">Welcome To The Signup Page</h1><br>
        <form action="/charitable/signup.php" method="post" style="display: flex;
    flex-direction: column;
    align-items: center;">
  <div class="form-group col-md-6">
    <label for="username" class="form-label"><b>Name</b></label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Please Type Your Real Name"><br>
    
  </div>
  <div class="form-group col-md-6">
    <label for="password" class="form-label"><b>Password</b></label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Please Choose Your Password"><br>
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword" class="form-label"><b>Confirm Password</b></label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Please Retype Your Password">
    <div id="emailHelp" class="form-text"><b>Make Sure to type the same Password</b></div><br><br><br>
  </div>
  
  
  <button type="submit" class="btn btn-success col-md-6">SignUp</button>
</form>
    </div>
  

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