<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg  ftco-navbar-dark navbar-dark bg-dark">
    <div class="container-xl">
      <a class="navbar-brand align-items-center" href="index.php">
        Charit<small>Able</small>
        <span>Charity Firm</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>';

      if(!$loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/charitable/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/charitable/signup.php">Signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/charitable/logout.php">Logout</a>
      </li>';
    }
       
      
    echo '</ul>
  </div>
</nav>';
?>