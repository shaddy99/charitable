<?php 
 include ("partialsadmin/head.php");
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php
    include ("partialsadmin/navbar.php");
  ?>
  <?php
   include ("partialsadmin/sidebar.php")
  ?>

  
  
<div class="row">
   <div class="col-sm-3"></div>
   <div class="col-sm-6">
      <div class="card card-primary">
         <div class="card-header">
            <h3 class="card-title">Catagories</h3>
         </div>
         <form>
            <div class="card-body">
               <div class="form-group">
                  <label for="catagory">Catagory</label>
                  <input type="text" class="form-control" id="catagory" placeholder="Enter catagory">
               </div>
            </div>
            <div class="card-footer">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </form>
      </div>
   </div>
 <div class="col-sm-3"></div>
</div>

  <?php 
   include ("partialsadmin/footer.php");
  ?>
 