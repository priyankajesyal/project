
<?php

$conn = mysqli_connect('localhost', 'root', '', 'university');
if (!$conn) {
    die("couldn't connect to the serve");
}

$name = $_POST['name1'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$email = $_POST['email'];
$division = $_POST['division'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$gender = $_POST['gender1'];
$phone = $_POST['phone'];
$password = hash('sha512', $_POST['password1']);
$password1 = hash('sha512', $_POST['password2']);
$time = time() . '.jpg';
$dir = '/universityapplication/images/';
$image = $dir . $time;


move_uploaded_file($_FILES['image']['tmp_name'], '../images/' . $time);

$res = "SELECT * FROM student WHERE email='$email' OR phone='$phone' ";
$query1 = mysqli_query($conn, $res);
if (!$query1) {
    die(mysqli_error($conn));
}
$count = (mysqli_num_rows($query1));
if ($count == 0) {


    if ($password != $password1) {
        header("location:../student.php?error1=Password Don't Match");
        exit();
    } else {

        $insert = "INSERT INTO student (name,fathers_name,mothers_name,email,division,date_of_birth,address,gender,phone,password,image)VALUES('$name','$fname','$mname','$email','$division','$dob','$address','$gender','$phone','$password','$image')";
        if (mysqli_query($conn, $insert)) {
            header('location:../signin.php');
            exit();
        } else {
            echo "error" . $insert . "" . mysqli_error($conn);
        }
    }
} else {
    header('location:../student.php?error1=Data Already Exists');
    exit();
}

?>