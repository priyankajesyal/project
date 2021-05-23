<?php

    $conn = mysqli_connect('localhost', 'root', '', 'university');
    if (!$conn) {
        die("couldn't connect to the serve");
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $category = $_POST['category'];
    $des = $_POST['des'];
    
        $insert = "INSERT INTO feedback (name,email,category,description)VALUES('$name','$email','$category','$des')";
        if (mysqli_query($conn, $insert))
         {
            
            header('location:../feedback.php?success=Your FeedBack Has Been Updated successfully');
            exit();
        } else 
        {
            echo "error" . $insert . "" . mysqli_error($conn);
        }

?>