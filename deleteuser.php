<?php 

$db_host="localhost";
$db_name="janmbhoomi";
$db_user="root";
$db_password="root"; 	
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());

$id=$_GET['u_id'];
$table="userdata";	
$fetch_query="delete from $table where user_id='$id'";
$result=mysql_query($fetch_query);
header("Location:editedadmin.php");
?>
