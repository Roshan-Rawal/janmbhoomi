<?php 

$db_host="localhost";
$db_name="janmbhoomi";
$db_user="root";
$db_password="root"; 	
$con=mysql_connect($db_host,$db_user,$db_password) or die("Failed to connect to database".mysql_error());
$db=mysql_select_db($db_name,$con)or die("Failed to select database ".mysql_error());



$table="userdata";	
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];	
$introduction=$_POST['introduction'];
$image=basename($_FILES['image']['name']); 
if($image==null)
{
$update_query="UPDATE $table SET fname='$fname' where user_id='$id'" ;
$update_result=mysql_query($update_query);

}
else
{
$update_query="UPDATE $table SET fname='$fname',lname='$lname',contact='$contact',email='$email',password='$password',introduction='$introduction',photo='$image' where user_id='$id'" ;
$update_result=mysql_query($update_query);

}

header("Location:editedadmin.php");
?>