<?php
session_start();
$conn=mysqli_connect('localhost','root','','university');

$email=$_POST['email'];
$password=hash('sha512',$_POST['password']);
$error = " * Username And Password Incorrect";

$query="SELECT * FROM student WHERE email='$email' AND password='$password' AND admin='1' ";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count>0)
{
	 $_SESSION["email"]=$email;
    header('Location:../homepage1.php');
	exit();
	
}
else
{
	$_SESSION["error"] = $error;
	header('Location:../adminsignin.php');
	exit();
}
