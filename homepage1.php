<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location:adminsignin.php');
    exit();
}

$email = $_SESSION['email'];

$conn = mysqli_connect('localhost', 'root', '', 'university');

$sql = "SELECT * FROM student WHERE admin='0'";
$query = mysqli_query($conn, $sql);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Home Page</title>
    <script src="assests/js/jquery.js"></script>
    <script src="assests/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assests/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assests/css/style3.css">
    <link rel="stylesheet" href="assests/fontawesome/css/font-awesome.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand"><img src="assests/image/logo4.png" width="100" height="80"></a><span class="logo">HARDRICH UNIVERSITY</span>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-nav1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-nav1">
                    <span class="navbar-text"></span>
                    <ul class="navbar-nav ml-auto" id="nav">
                        <li class="nav-item active"><a class="nav-link" href="homepage1.php"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="student1.php"><i class="fa fa-user" aria-hidden="true"></i> CREATE STUDENT</a></li>
                        <li class="nav-item"><a class="nav-link" href="adminfeedback.php"><i class="fa fa-sign-out" aria-hidden="true"></i> FEEDBACKS</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


<div class="container-fluid">

    <br><br><br><br><br>
    <table class="table table-stripped" id="admintable">
        <tr>
            <th>Rollno</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Email</th>
            <th>Division</th>
            <th>Date Of Birth</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tbody>

            <?php
            foreach ($query as $value) {
                echo "
    <tr>
    <td>" . $value['id'] . "</td>
    <td>" . $value['name'] . "</td>
    <td>" . $value['fathers_name'] . "</td>
    <td>" . $value['mothers_name'] . "</td>
    <td>" . $value['email'] . "</td>
    <td>" . $value['division'] . "</td>
    <td>" . $value['date_of_birth'] . "</td>
    <td>" . $value['address'] . "</td>
    <td>" . $value['gender'] . "</td>
    <td>" . $value['phone'] . "</td>
    <td><img src=" . $value['image'] . " width=100 height=100></td>
    <td><a href='update.php?id=" . $value['id'] . " '><button  class='btn-green btn-lg'>Edit</button></a></td>
        <td><a href='delete.php?id=" . $value['id'] . " '><button btn-lg class='btn-red btn-lg'>Delete</button></a></td>
    </tr>";
            }
            ?>

        </tbody>
    </table>
</div>

</body>

</html>