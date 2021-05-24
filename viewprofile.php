<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location:signin.php');
    exit();
}

$email = $_SESSION['email'];

$conn = mysqli_connect('localhost', 'root', '', 'university');

$sql = "SELECT * FROM student WHERE email='$email' AND admin='0'";
$query = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <script src="assests/js/jquery.js"></script>
    <script src="assests/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assests/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assests/css/style.css">
    <link rel="stylesheet" href="assests/fontawesome/css/font-awesome.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand"><img src="assests/image/logo4.png" width="100" height="80"></a><span class="logo">HARDRICH UNIVERSITY</span>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-nav1">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-nav1">
                    <span class="navbar-text"></span>
                    <ul class="navbar-nav ml-auto" id="nav">
                        <li class="nav-item active"><a class="nav-link" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="viewprofile.php"><i class="fa fa-user" aria-hidden="true"></i> VIEW PROFILE</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <table class="table">
            <tbody>
                <?php
                foreach ($query as $value) {
                    echo "
   
    <td><img src=" . $value['image'] . " width=300 height=150 style='margin-left:38%;'></td><td></td>
    <tr>
    <th>Name</th>
    <td>" . $value['name'] . "</td>
    </tr><tr>
    <th>Father's Name</th>
    <td>" . $value['fathers_name'] . "</td>
    </tr>
    <tr>
    <th>Mother's Name</th>
    <td>" . $value['mothers_name'] . "</td>
    </tr><tr>
    <th>Email</th>
    <td>" . $value['email'] . "</td>
    </tr>
    <tr>
    <th>Division</th>
    <td>" . $value['division'] . "</td>
    </tr><tr>
    <th>Date Of Birth</th>
    <td>" . $value['date_of_birth'] . "</td>
    </tr>
    <tr>
    <th>Address</th>
    <td>" . $value['address'] . "</td>
    </tr><tr>
    <th>Gender</th>
    <td>" . $value['gender'] . "</td>
    </tr>
    <td><a class='btn-primary btn-lg' style='margin-left:35%;' href='password.php'>Change Password</a></td><td></td>"
    ;
                }
                ?>

            </tbody>
        </table><br><br>
    </div>

</body>

</html>