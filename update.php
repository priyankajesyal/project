<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location:adminsignin.php');
    exit();
}
$conn = mysqli_connect('localhost', 'root', '', 'university');

$id = $_GET['id'];



$sql = "SELECT * FROM student WHERE id='$id'";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) > 0) {
    while ($datarows = mysqli_fetch_assoc($query)) {
        $division = $datarows['division'];
        $address = $datarows['address'];
        $gender = $datarows['gender'];
        $dob = $datarows['date_of_birth'];
        $name = $datarows['name'];
        $fname = $datarows['fathers_name'];
        $mname = $datarows['mothers_name'];
        $email = $datarows['email'];
        $phone = $datarows['phone'];
        $image = $datarows['image'];
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
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

                        <li class="nav-item"><a class="nav-link" href="viewadmin.php"><i class="fa fa-user" aria-hidden="true"></i> VIEW PROFILE</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i> LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <form action='process/update1.php' method='post' enctype="multipart/form-data">

        <div class="container updateform"><br>
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <img src="<?php echo $image; ?>" width="250" height="100"><br><br>
                    <input type="file" name="image1">
                    <br><br>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <lable>RollNo</lable>
                    <input type='text' name='id' value="<?php echo $_GET['id'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <lable>Name</lable>
                    <input type='text' name='name' class="form-control" value="<?php echo $name; ?>"><br>
                </div>
            </div>



            <div class="row">

                <div class="col-md-6">
                    <lable>Father's Name</lable>
                    <input type='text' name='fname' class="form-control" value="<?php echo $fname; ?>"><br>
                </div>
                <div class="col-md-6">
                    <lable>Mothers Name</lable>
                    <input type='text' name='mname' class="form-control" value="<?php echo $mname; ?>">
                </div>
            </div>



            <div class="row">

                <div class="col-md-6">
                    <lable>Email</lable>
                    <input type='email' name='email' class="form-control" value="<?php echo $email; ?>"><br>
                </div>
                <div class="col-md-6">
                    <lable>Division</lable>
                    <select name="division" class="form-control">
                        <option value="BCA" <?php if ($division == "BCA") echo 'selected="selected"'; ?>>BCA</option>
                        <option value="BA" <?php if ($division == "BA") echo 'selected="selected"'; ?>>BA</option>
                        <option value="BCOM" <?php if ($division == "BCOM") echo 'selected="selected"'; ?>>BCOM</option>
                        <option value="BTECH" <?php if ($division == "BTECH") echo 'selected="selected"'; ?>>BTECH</option>
                        <option value="BSC IT" <?php if ($division == "BSC IT") echo 'selected="selected"'; ?>>BSC IT</option>
                        <option value="MA" <?php if ($division == "MA") echo 'selected="selected"'; ?>>MA</option>
                        <option value="MCOM" <?php if ($division == "MCOM") echo 'selected="selected"'; ?>>MCOM</option>
                        <option value="MCA" <?php if ($division == "MCA") echo 'selected="selected"'; ?>>MCA</option>
                        <option value="MTECH" <?php if ($division == "MTECH") echo 'selected="selected"'; ?>>MTECH</option>
                        <option value="MSC IT" <?php if ($division == "MSC IT") echo 'selected="selected"'; ?>>MSC IT</option>
                        <option value="PGDCA" <?php if ($division == "PGDCA") echo 'selected="selected"'; ?>>PGDCA</option>
                    </select>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <lable>Date Of Birth</lable>
                    <input type='date' name='dob' class="form-control" value="<?php echo date('Y-m-d'); ?>"><br>
                </div>
                <div class="col-md-6">
                    <lable>Address</lable>

                    <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <br>
                    <lable>phone</lable>
                    <input type='tel' pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="10 digits required " name='phone' class="form-control" value="<?php echo $phone; ?>"><br>
                </div>
                <div class="col-md-6">
                    <br>
                    <lable>Gender</lable><br>
                    <input type="radio" name="gender" <?php if ($gender == "male") {
                                                            echo "checked";
                                                        } ?> value="male"> Male
                    <input type="radio" name="gender" <?php if ($gender == "female") {
                                                            echo "checked";
                                                        } ?> value="female"> Female
                    <input type="radio" name="gender" <?php if ($gender == "other") {
                                                            echo "checked";
                                                        } ?> value="other"> Other
                </div>
            </div>

            <div class="center">
                <input type="submit" name="submit" value="update" class="btn btn-lg btn-submit"><br>
            </div>
        </div>
    </form>

</body>

</html>