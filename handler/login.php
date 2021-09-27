
<?php
  
include ("../partials/connect.php");
   
$db = mysqli_select_db($connect, 'charitable');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = " SELECT * FROM  adminlogin WHERE email='$email' and password='$password' ";
    $query = mysqli_query($connect,$sql);

    $row = mysqli_num_rows($query);
        if($row == 1){
            echo "login successful"; 
            $_SESSION['email'] = $email && $_SESSION['password'] = $password;

            header('location:../admin/adminindex.php');
        }else{
            echo '<script>alert("Login Failed")</script>';
            header('location:../admin/login.php');
        }

}

  
?>