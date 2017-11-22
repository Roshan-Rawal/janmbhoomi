<?php
$target="images/";
$target=$target.basename($_FILES['image']['name']);
include("header.php");


$db_host="localhost";
$db_name="janmbhoomi";
$db_user="root";
$db_password="root"; 	
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());

$table="userdata";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];	
$introduction=$_POST['introduction'];
$image=basename($_FILES['image']['name']); 

if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
{
	
$query="insert into $table (fname,lname,contact,email,password,introduction,photo) values('$fname','$lname','$contact','$email','$password','$introduction','$image')";
	$data=mysql_query($query) or die("failed to insert data into database ".mysql_error());
	
/*$fetch_query="select * from $table";
$result=mysql_query($fetch_query) or die("failed to insert data into database ".mysql_error());
while($row=mysql_fetch_array($result))
{
	echo $row['name'];
	//echo $row['image'];
}
*/
	mysql_close($con);
//echo "File uploaded " ; ?>

<html>
		<head>
		</head>
		<body>
		<br>
		<br>
		<div class="container">
		<div class="row">
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		
		</div>
		<div class="col-md-8 col-xs-12 col-sm-12 col-lg-8">
		<h1> Welcome <?php echo $fname.' '.$lname ;?> </h1>
		</div>
		</div>
		
		<br>
		<br>
		<div class="row">
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		<img src='images/<?php echo$image ?>' width="300px" height="200px" alt="name"/>
		</div>
		</div>
		<div class="row">
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-6">
		<h3> name :- <?php echo $fname.' '.$lname ;?> </h3>
		<h3> Email :- <?php echo $email;?> </h3>
		<h3> contact :- <?php echo $contact?> </h3>
		<h3> Introduction :- <?php echo $introduction?> </h3>
		</div>
		</div>
		</div>
		</body>
		</html>

<?php	}
	else
	{
		echo "File not uploaded";
	}


?>