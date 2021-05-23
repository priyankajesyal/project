<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Form</title>
	<script src="assests/js/jquery.js"></script>
    <script src="assests/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assests/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assests/css/style1.css">
    <link rel="stylesheet" href="assests/fontawesome/css/font-awesome.css">
</head>

<body>



	<?php
	$nameerror = $fatherserror = $motherserror = $confirmpassworderror = $passworderror = $divisionerror = $doberror = $addresserror = $mobileerror = $gendererror  = $emailerror = $confirmerror = "";
	$name = $fname = $mname = $mobile = $division = $dob = $email = $gender = $password = $confirm = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name1"])) {
			$nameerror = "* Name is required *";
		} else {
			$name = test_input($_POST["name1"]);
			if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
				$nameerror = "* Only letters and whitespace allowed *";
			}
		}



		if (empty($_POST["fname"])) {
			$fatherserror = "* FathersName is required *";
		} else {
			$fname = test_input($_POST["fname"]);
			if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
				$fatherserror = "* Only letters and whitespace allowed *";
			}
		}



		if (empty($_POST["mname"])) {
			$motherserror = "* MothersName is required *";
		} else {
			$mname = test_input($_POST["mname"]);
			if (!preg_match("/^[a-zA-Z-' ]*$/", $mname)) {
				$motherserror = "* Only letters and whitespace allowed *";
			}
		}


		if (empty($_POST["email"])) {
			$emailerror = "* Email is required *";
		} else {
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailerror = "* Invalid Email Format *";
			}
		}



		if (empty($_POST["phone"])) {
			$mobileerror = "* Mobile Number is required *";
		} else {
			$mobile = test_input($_POST["phone"]);
			if (!preg_match("/^[0-9]*$/", $mobile)) {
				$mobileerror = "* 10 Digits Required *";
			}
		}



		if (empty($_POST["dob"])) {
			$doberror = "* Date Of Birth is required *";
		} else {
			$dob = test_input($_POST["dob"]);
		}

		if (empty($_POST["address"])) {
			$addresserror = "* Address is required *";
		} else {
			$dob = test_input($_POST["address"]);
		}


		if (empty($_POST["gender1"])) {
			$gendererror = "* Gender is required *";
		} else {
			$gender = test_input($_POST["gender1"]);
		}




		if (empty($_POST["password1"])) {
			$passworderror = "* Password is required *";
		} else {
			$password = test_input($_POST["password1"]);
		}


		if (empty($_POST["password2"])) {
			$confirmerror = "* Confirm Password is required *";
		} else {
			$confirm = test_input($_POST["password2"]);
		}

		if (empty($_POST["division"])) {
			$divisionerror = "* Division is required *";
		} else {
			$division = test_input($_POST["division"]);
		}
	}
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	?>





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


	<form name="myform" id="myform" method="post" action="process/studentinsert.php" enctype="multipart/form-data">
		<div class="container">
			<div class="box11">

				<h2 class="text-center">Student Information</h2>

				<?php if (isset($_GET['error1'])) { ?>
					<p class="error1"><?php echo $_GET['error1']; ?></p>
				<?php } ?>



				<div class="row">
					<div class="col-sm-5 offset-sm-1">
						<br><label>Name</label>
						<input type="text" name="name1" class="form-control" placeholder="Enter Name" required>
						<span class="error"><?php echo $nameerror; ?></span>
					</div>

					<div class="col-sm-5">
						<br><label>Father's Name</label>
						<input type="text" name="fname" class="form-control" placeholder="Enter Father's Name" required>
						<span class="error"><?php echo $fatherserror; ?></span>
					</div>
				</div>


				<div class="row">
					<div class="col-sm-5 offset-sm-1">
						<br><label>Mother's Name</label>
						<input type="text" name="mname" class="form-control" placeholder="Enter Mother's Name" required>
						<span class="error"><?php echo $motherserror; ?></span>
					</div>

					<div class="col-sm-5">
						<br><label>Email</label>
						<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" name="email" class="form-control" placeholder="Enter Email" required>
						<span class="error"><?php echo $emailerror; ?></span>
					</div>
				</div>



				<div class="row">
					<div class="col-sm-5 offset-sm-1">
						<br><label>Division</label><br>
						<select name="division" class="form-control" required>
							<option></option>
							<option>BCA</option>
							<option>BA</option>
							<option>BCOM</option>
							<option>BTECH</option>
							<option>BSC IT</option>
							<option>MA</option>
							<option>MCOM</option>
							<option>MCA</option>
							<option>MTECH</option>
							<option>MSC IT</option>
							<option>PGDCA</option>
						</select>
						<span class="error"><?php echo $divisionerror; ?></span>
					</div>


					<div class="col-sm-5">
						<br><label>Date Of Birth</label>
						<input type="date" name="dob" class="form-control" placeholder="enter date of birth" required>
						<span class="error"><?php echo $doberror; ?></span>
					</div>
				</div>



				<div class="row">
					<div class="col-sm-5 offset-sm-1">
						<br><label>Address</label>
						<textarea name="address" class="form-control" required></textarea>
						<span class="error"><?php echo $addresserror; ?></span>
					</div>

					<div class="col-sm-5 ">
						<br><label>Gender</label><br>
						<input type="radio" name="gender1" value="male" required> Male
						<input type="radio" name="gender1" value="female" required> Female
						<input type="radio" name="gender1" value="other" required> other
						<p class="error"><?php echo $gendererror; ?></p>
					</div>
				</div>


				<div class="row">
					<div class="col-sm-5 offset-sm-1">
						<br><label>Mobile Number</label>
						<input type="tel" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="10 digitd required" class="form-control" placeholder="Enter Mobile Number" required>
						<span class="error"><?php echo $mobileerror; ?></span>
					</div>
					<div class="col-sm-5 ">
						<br><label>Image</label><br>
						<input type="file" name="image" required>
						<!-- <p class="error"></p> -->
					</div>
				</div>


				<div class="row">
					<div class="col-sm-5 offset-sm-1">
						<br><label class="link1">Password</label>
						<input type="password" id="password" name="password1" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" placeholder="Enter Password" required>
						<span class="error"><?php echo $passworderror; ?></span>
					</div>

					<div class="col-sm-5">
						<br><label class="link1">Confirm Password</label>
						<input type="password" id="confirmpassword" name="password2" class="form-control" placeholder="Enter Confirm Password" required>
						<span class="error"><?php echo $confirmerror; ?></span>

					</div>

				</div><br><br>


				<div class="center"> <input type="submit" name="submit" class="btn button1 btn-primary"></div>
			</div>
		</div>
	</form>
</body>


</html>