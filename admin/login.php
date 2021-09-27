<?php include ("partialsadmin/head.php"); 

if(isset($_POST['login'])){
  include ("../partials/connect.php");

  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql= "SELECT * FROM adminlogin WHERE email='$email' and password='$password'";
  $results= $connect->query($sql);
  $final= $results->fetch_assoc();

  if($email=$final['email'] and $password=$final['password']){
    header('location: ./adminindex.php');
  }else{
    header('location: login.php');
  }
}

?>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-5">
		<div class="card card-info mx-auto" style="width:550px">
              <div class="card-header">
                <h3 class="card-title">Admin Login</h3>
              </div>
              <form class="form-horizontal" action="login.php" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-info" method="POST" name="login">Log in</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
	</div>
	<div class="col-sm-4"></div>

</div>