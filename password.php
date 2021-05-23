<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location:adminsignin.php');
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change</title>
    <script src="assests/js/jquery.js"></script>
    <script src="assests/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assests/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assests/css/pswstyle.css">
    <link rel="stylesheet" href="assests/fontawesome/css/font-awesome.css">
</head>

<body>

    <div class="passwordform">
        <form action="process/password1.php" method="post">

            <div class="container password"><br>

                <h1 class="text-center">Change Password</h1>
                <br>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>


                <?php if (isset($_GET['error1'])) { ?>
                    <p class="error1"><?php echo $_GET['error1']; ?></p>
                <?php } ?>

                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <br><label>Current Password</label>
                        <input type="password" class="form-control" name="password1" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <br><label>New Password</label>
                        <input type="password" class="form-control" name="password2" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <br><label>Confirm Password</label>
                        <input type="password" class="form-control" name="password3" required>
                    </div>
                </div>
                <br><br>
               

               <div class="center">
               <input type="submit" name="submit" value="CHANGE PASSWORD" class="btn1 btn-lg"><br><br>
                    <a href="viewprofile.php">Back To ViewProfile</a>
               </div>
                <br>

            </div>
        </form>
    </div>
</body>

</html>