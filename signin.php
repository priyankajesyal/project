<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
<script src="assests/js/jquery.js"></script>
    <script src="assests/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assests/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assests/css/style1.css">
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
                        <li class="nav-item active"><a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="student.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> REGISTER</a></li>
                        <li class="nav-item"><a class="nav-link" href="signin.php"><i class="fa fa-sign-out" aria-hidden="true"></i> SIGN IN AS USER</a></li>
                        <li class="nav-item"><a class="nav-link" href="adminsignin.php"><i class="fa fa-sign-out" aria-hidden="true"></i> SIGN IN AS ADMIN</a></li>
                        <li class="nav-item active"><a class="nav-link" href="feedback.php"><i class="fa fa-home" aria-hidden="true"></i> FEEDBACK</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <form method="post" action="process/signin1.php">
        <div class="container">
            <div class="box">

                <h1 class="text-center"><span class="link1">Sign In</span></h1>
                <br>
                <div class="row">
                    <div class="col-sm-10 offset-sm-1">
                        <label class="link1">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-sm-10 offset-sm-1">
                        <label class="link1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                    </div>
                </div><br>
                <?php
                if (isset($_SESSION["error"])) {
                    $error = $_SESSION["error"];
                    echo "<span id='error'>$error</span>" . "<br><br>";
                }
                ?>
                <div class="center">
                    <input type="submit" name="submit" value="Sign In" class="btn btn-primary btn-lg"><br><br>
                    <span class="text-center text-light">Don't have an account ? </span><a class="text-light" href="student.php"> Register First</a><br><br>
                    <a class="text-light text-center" href=""> Forget Password</a>
                </div>
            </div>
        </div>

    </form>



</body>

</html>


<?php
unset($_SESSION["error"]);
?>