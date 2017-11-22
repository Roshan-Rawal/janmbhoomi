<?php include("header.php") ?>

<br>	
<br>
<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
<h1 style="height:50px;color:#ffffff;text-align:center;background-color:#de4949;margin-right:150px;margin-left:150px;">Admin Login</h1>
</div>
<br>
<br>
<div class="row" style="margin-right:135px;margin-left:135px;">
<form action="adminconnection.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <input style="height:50px" type="email" class="form-control" placeholder="Email" name="email" required="true">
  </div>
  <div class="form-group">
    <input style="height:50px" type="password" class="form-control" placeholder="password" name="password" required="true">
  </div>
  <button style="height:50px" type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
<br>
<br>

</body>
</html>