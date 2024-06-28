<?php
include('koneksi.php');
if (isset($_POST['login'])) {
  $username = $_POST['usrname'];
  $password = $_POST['password'];

  $check_query = "SELECT * FROM admin WHERE username = '$username'";
  $check_result = mysqli_query($koneksi, $check_query);

  if (mysqli_num_rows($check_result) == 1) {
      $row = mysqli_fetch_assoc($check_result);
      $storedPassword = $row['password'];

      if (password_verify($password, $storedPassword)) {
      
          session_start();
          $_SESSION['username'] = $username;
          $_SESSION['status'] = 'login';
          header("Location: dashboard/pelanggan.php");
          exit; 
      } else {
          $valid = 'false'; 
      }
  } else {
      $valid = 'false'; 
  }
}

?>



<!DOCTYPE html>
<html>
<head>
  <title>Mutiara Laundry</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrapp.min.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <script src="assets/js/jqueryy.min.js"></script>
  <script src="assets/js/bootstrapp.min.js"></script>
  <style>
  .modal-header, h4, .close {
      background-color: blue;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body>

<div class="container">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">


          <?php if(isset($valid) && $valid == 'false') { ?>
        <div class="alert alert-danger">
          Invalid Username or Password
                </div>
                <?php } ?>

          <form  role="form" method="post" action=""> 
            <div class="form-group">
              <label for="usrname"> Username</label>
              <input type="text" class="form-control" name="usrname" required="" placeholder="Enter email" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password"  required="" placeholder="Enter Password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" name="login" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="Registration.php">New Registration</a></p>
      <!--     <p>Forgot <a href="#">Password?</a></p> -->
        </div>
      </div>
      
    </div>
  </div> 
</div>
 


<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });

    $('#myModal').modal({
    backdrop: 'static',   // This disable for click outside event
    keyboard: true        // This for keyboard event
})
</script>
</body>
</html>
