<?php

session_start();
if (!isset($_SESSION['email'])) {
    header('Location:adminsignin.php');
    exit();
}
$conn = mysqli_connect("localhost", "root", "", "university");

$email=$_SESSION['email'];
$old_password=hash('sha512',$_POST['password1']);
$new_password=hash('sha512',$_POST['password2']);
$con_password=$_POST['password3'];

$sql = "SELECT password FROM student WHERE  email='$email' AND password='$old_password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE student SET password='$new_password' WHERE email='$email'";
        	mysqli_query($conn, $sql_2);
            header('location:../password.php?success=Password Updated');
            exit();
        }
        else 
        {
            $_SESSION['error']=$error;
            header('location:../password.php?error1=Old Password Incorrect');
            exit();
        }

?>