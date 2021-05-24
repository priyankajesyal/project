<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <script src="assests/js/jquery.js"></script>
    <script src="assests/bootstrap4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assests/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assests/css/feedbackstyle.css">
    <link rel="stylesheet" href="assests/fontawesome/css/font-awesome.css">
</head>

<body>

    <form action="process/feedbackinsert.php" method="post">


        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <div class="container">

            <div class="box"><br>
                <h2 class="text-center text-light">FeedBack</h2>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <label class="text-light">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                    </div>
                </div><br>


                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <label class="text-light">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Name" required>
                    </div>
                </div><br>



                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <label class="text-light">Category</label>
                        <select name="category" class="form-control" required>
                            <option>Administration</option>
                            <option>Infatstructure</option>
                            <option>Fee</option>
                            <option>Hostal</option>
                            <option>Mess</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div><br>



                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <label class="text-light">Description</label>
                        <textarea name="des" class="form-control" placeholder="Desciption" required></textarea>
                    </div>
                </div><br><br>


                <div class="btn-submit mx-5">
                <button type="submit" class="btn text-light btn-sub">Submit</button>
                <a class="text-light" href="index.php">Back To Home</a><br><br>
            </div>
        </div>
        </div>
    </form>


</body>

</html>