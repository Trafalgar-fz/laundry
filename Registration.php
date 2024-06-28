<?php
include('koneksi.php'); // Sertakan file koneksi.php

if (isset($_POST['submit'])) {
    $username = $_POST['usrname'];
    $password = $_POST['password']; // Ambil password yang diinputkan oleh pengguna

    // Periksa apakah username sudah digunakan
    $check_query = "SELECT * FROM admin WHERE username = '$username'";
    $check_result = mysqli_query($koneksi, $check_query);

    if (mysqli_num_rows($check_result) == 0) {
        // Jika username belum digunakan, maka kita dapat melakukan registrasi
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $register_query = "INSERT INTO admin (username, password) VALUES ('$username', '$hashedPassword')"; // Menggunakan password yang diinputkan

        if (mysqli_query($koneksi, $register_query)) {
            $valid = 'true'; // Registrasi berhasil
        } else {
            $valid = 'false'; // Registrasi gagal
        }
    } else {
        $valid = 'Allready'; // Username sudah digunakan
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
          <h4> Registration</h4>
        </div>
        <?php if(isset($valid) && $valid == 'false') { ?>
        <div class="alert alert-danger">
          Invalid Username or Password
                </div>
                <?php }
                if(isset($valid) && $valid == 'true') { ?>
        <div class="alert alert-success">
         Registration Sucessfully
                </div>
                <?php };
                if(isset($valid) && $valid == 'Allready') { ?>
        <div class="alert alert-danger">
         This User Allready Register
                </div>
                <?php } ?>       
        <div class="modal-body" style="padding:40px 50px;">
          <form  role="form" method="post" action=""> 
            <div class="form-group">
             <label for="usrname">Username</label>
              <input type="text" class="form-control"
               id="usrname" required="" name="usrname" placeholder="Enter User Name">
            </div>

             <div class="form-group">
             <label for="password">Password</label>
              <input type="password" class="form-control" name="password"  required="" placeholder="Enter Password">
            </div>

            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <input type="submit" name="submit" class="form-control btn btn-primary btn-block"  placeholder="Submit">
             <!--  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button> -->
          </form>
        </div>
        <div class="modal-footer">
          <p><a href="index.html">Main website</a></p>
          <p>Allready Register <a href="login.php ">Login</a></p>
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
