<?php
 session_start(); 
include("header.php");
$db_host="localhost";
$db_name="janmbhoomi";
$db_user="root";
$db_password="root"; 	
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());

$table="userdata";
$email=$_POST['email'];
$password=$_POST['password'];	
$fetch_query="select * from $table";
$result=mysql_query($fetch_query) or die("failed to insert data into database ".mysql_error());
$flag=0;
while($row=mysql_fetch_array($result))
{
	if ($email==$row['email'] AND $password==$row['password'])
	{	
		?>
		<html>
		<head>
		</head>
		<body>
		<br>
		<br>
		<br>
		<br>
		<div class="container">
		<div class="row">
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		<img src='images/<?php echo$row['photo']?>' width="300px" height="200px" alt="name"/>
		</div>
		</div>
		<div class="row">
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
		
		</div>
		<div class="col-md-4 col-xs-12 col-sm-12 col-lg-6">
		<h3> name :- <?php echo $row['fname'].' '.$row['lname'] ;?> </h3>
		<h3> Email :- <?php echo $row['email'];?> </h3>
		<h3> contact :- <?php echo $row['contact']?> </h3>
		<h3> Introduction :- <?php echo $row['introduction']?> </h3>
		</div>
		</div>
		</div>
		</body>
		</html>
		
		<?php //echo "Successfully logged in";
		
		
		$_SESSION["name"] =$row['email'];
		echo $_SESSION['name'];die;
		$flag=1;
		//userprofile();
		break;
		
		
	}
}
if($flag==0)
{
	echo "Unsuccessfull";
//unset($_SESSION["name"]);
	//session_destroy();
	
}

/*function userprofile()

{
	
$fetch_query="select * from $table";
$result=mysql_query($fetch_query) or die("Faild to fetch data from the table".mysql_error());

	
} */
	mysql_close($con);
?>