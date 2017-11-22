<?php include("header.php"); ?>
 <script>
 var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
 </script> 

<div class="container">
<div class="row">
<div class="col-lg-2">
</div>
<div class="col-lg-8 col-sm-12 col-xs-12">
<h1 style="height:50px;color:#ffffff;text-align:center;background-color:#de4949;">Register</h1>
</div>
</div>
<br>
<br>
<div class="row" >
<div class="col-lg-2">
</div>
<div class="col-lg-8 col-sm-12 col-xs-12">
<form action="connection.php"  method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <input type="name" class="form-control" placeholder="First Name" name="fname" required="true">
  </div>
  <div class="form-group">
    <input type="lname" class="form-control" placeholder="Last Name" name="lname" required="true">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Contact" name="contact" required="true">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Email" name="email" required="true">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="password" placeholder="password" name="password" required="true">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="confirm_password" placeholder="repassword" name="repassword" required="true">
  </div>
  <div class="form-group">
    <textarea class="form-control" placeholder="About Yourself" rows="5"name="introduction" required="true"></textarea>
  </div>
  <div class="form-group">
  <label>
    <input type="file" class="form-control" placeholder="UploadYourPhoto" name="image" required="true">
  </div>
  <button type="submit" onclick="validatePassword()" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</div>
<br>
<br>
</body>
</html>
