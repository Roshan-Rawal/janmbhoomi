<?php include("header.php"); ?>

<?php 

$db_host="localhost";
$db_name="janmbhoomi";
$db_user="root";
$db_password="root"; 	
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());

$id=$_GET['u_id'];
$table="userdata";	
$fetch_query="select * from $table where user_id='$id'";
$result=mysql_query($fetch_query);
$row=mysql_fetch_array($result);


?>


<div class="container">
<div class="row">
<h1 style="height:50px;color:#ffffff;text-align:center;background-color:#de4949;margin-right:150px;margin-left:150px;">Edit</h1>
</div>
<br>
<br>
<div class="row" style="margin-right:135px;margin-left:135px;">
<form action="alter_connection.php" method="POST" enctype="multipart/form-data">

	<input type="hidden" value="<?php echo $row['user_id']; ?>" name="id" />
  <div class="form-group">
    <input type="name" class="form-control" value="<?php echo $row['fname']; ?>" name="fname" required="true">
  </div>
  <div class="form-group">
    <input type="lname" class="form-control" value="<?php echo $row['lname']; ?>" name="lname" required="true">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" value="<?php echo $row['contact']?>" name="contact" required="true">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" value="<?php echo $row['email'];?>" name="email" required="true">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" value="<?php echo $row['password']?>" name="password" required="true">
  </div>
  <div class="form-group">
    <textarea class="form-control"  rows="5"name="introduction" required="true"><?php echo $row['introduction']?> </textarea>
  </div>
  <div class="form-group">
  <label>
    <input type="file" class="form-control" placeholder="UploadYourPhoto" name="image">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
<br>
<br>
</body>
</html>
