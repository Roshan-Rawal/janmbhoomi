<?php
include("header.php");
$db_host="localhost";
$db_name="janmbhoomi";
$db_user="root";
$db_password="root"; 

$table="userdata";
	
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());


$fetch_query="select * from $table";
$result=mysql_query($fetch_query) or die("failed to insert data into database ".mysql_error());
		
		?>
		<html>
		<head>
		</head>
		<body>
		<br>
		
		
		
		<?php while($row=mysql_fetch_array($result))
{ ?>	
		<br>
		<br>
		<br>

		<div class="container">
		<div class="row">
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		<h1> User no &nbsp<?php echo $row['user_id'];?> </h1>
		<img src='images/<?php echo$row['photo']?>'  width="300px" height="200px" alt="name"/>
		</div>
		</div>
		<div class="row">
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-6">
		<h3> name :- <?php echo $row['fname'].' '.$row['lname'] ;?> </h3>
		<h3> Email :- <?php echo $row['email'];?> </h3>
		<h3> contact :- <?php echo $row['contact']?> </h3>
		<h3> Password :- <?php echo $row['password']?> </h3>
		<h3> Introduction :- <?php echo $row['introduction']?> </h3>
		<a href="<?php echo 'edituser.php?u_id='.$row['user_id']; ?>"><button type=button class="btn btn-primary" data-target="#loginModal" data-toggle="modal" style="color:bl;background-color:#006699;height:50px;width:100px;font-size:20px">Edit</button></a>
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		<a href="<?php echo 'deleteuser.php?u_id='.$row['user_id']; ?>"><button type=button class="btn btn-primary" data-target="#loginModal" data-toggle="modal" style="color:bl;background-color:#006699;height:50px;width:100px;font-size:20px">Delete</button></a>
		</div>
		</div>
		</div>
		</body>
		</html>
		
		<?php 
	
}




	mysql_close($con);
?>