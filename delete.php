<?php
session_start();
if(!isset($_SESSION['email']))
{
    header('Location:adminsignin.php');
    exit();
}


$conn=mysqli_connect('localhost','root','','university');

$id=$_GET['id'];
$sql="DELETE FROM student WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
    header('location:homepage1.php');
    exit();
}
?>