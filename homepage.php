<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location:signin.php');
    exit();
}
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
    <link rel="stylesheet" type="text/css" href="assests/css/style.css">
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
                        <li class="nav-item active"><a class="nav-link" href="homepage.php"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>

                        <li class="nav-item"><a class="nav-link" href="viewprofile.php"><i class="fa fa-user" aria-hidden="true"></i> VIEW PROFILE</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="row" id="heading"><br><br><br><br><br><br>
         
                <h1>YOUR INSPIRATION, PERSISTENCE, GRIT.
                    THE RESOURCES AND SUPPORT TO MAKE IT HAPPEN.<h1>
                        <h3>Together, we'll do this.</h3>
          
        </div>
    </div>

</body>

</html>