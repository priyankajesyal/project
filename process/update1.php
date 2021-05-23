<?php

$conn=mysqli_connect('localhost','root','','university');
if(!$conn)
{
die("couldn't connect to the server");
}

$id = $_POST['id'];
$name = $_POST['name'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$email = $_POST['email'];
$division = $_POST['division'];
$dob =date('Y-m-d', strtotime( $_POST['dob']));
$address = $_POST['address'];
$gender = $_POST['gender'];
$phone=$_POST['phone'];
$time=time().'.jpg';
$dir='/universityapplication/images/';
$image=$dir.$time;


 $sql="SELECT * FROM student WHERE email='$email'";
 $sql1="SELECT * FROM student WHERE phone='$phone'";

 $query=mysqli_query($conn,$sql);
 $query1=mysqli_query($conn,$sql1);

 $count=mysqli_num_rows($query);
 $count1=mysqli_num_rows($query1);

 if($count==0 || $count1==0)
 {
	if($_FILES['image1']['size']!=0)
	{
move_uploaded_file($_FILES['image1']['tmp_name'], '../images/'.$time);

$sql1="UPDATE student SET  name='$name', fathers_name='$fname', mothers_name='$mname', email='$email', division='$division', date_of_birth='$dob', address='$address', gender='$gender', phone='$phone', image='$image' WHERE id='$id'";
if(mysqli_query($conn,$sql1))
{
	
	header('Location:../homepage1.php');
	exit();
}
else
{	
	// echo"error".$sql1."".mysqli_error($conn);
}
}
else
{
	$sql11="UPDATE student SET name='$name', fathers_name='$fname', mothers_name='$mname', email='$email', division='$division', date_of_birth='$dob', address='$address', gender='$gender', phone='$phone' WHERE id='$id'";
if(mysqli_query($conn,$sql11))
{
	header('Location:../homepage1.php');	
	exit();
}
else
{
	echo"error".$sql11."".mysqli_error($conn);
}
}
}






 else
{
	if($_FILES['image1']['size']!=0)
	{
	move_uploaded_file($_FILES['image1']['tmp_name'], '../images/'.$time);
	$sql2="UPDATE student SET  name='$name', fathers_name='$fname', mothers_name='$mname', division='$division', date_of_birth='$dob', address='$address', gender='$gender', image='$image' WHERE id='$id'";
	if(mysqli_query($conn,$sql2))
	{
		header('Location:../homepage1.php');
		exit();
	}
	else
	{
		echo"error".$sql2."".mysqli_error($conn);
	}
	}
	else
	{
		$sql22="UPDATE student SET name='$name', fathers_name='$fname', mothers_name='$mname', division='$division', date_of_birth='$dob', address='$address', gender='$gender' WHERE id='$id'";
	if(mysqli_query($conn,$sql22))
	{
		header('Location:../homepage1.php');
		exit();
	}
	else
	{
		echo"error".$sql22."".mysqli_error($conn);
	}
	}
}


?>