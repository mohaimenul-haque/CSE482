



<?php

    session_start();

    include('header.php');
    include('connectPHP.php');

    $dbuseremail = $_SESSION['uemail'];


    $sql = "SELECT * FROM customer WHERE email='$dbuseremail' ";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $id = $row["c_id"]; 
        $name = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $add = $row["address"];
    }

    // if ($result->num_rows > 0) {
    // // output data of each row
    // while($row = $result->fetch_assoc()) {
    //     echo "id: " . $row["c_id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    // }
    // } else {
    // echo "0 results";
    // }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="userProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="main">
        <div class="card">
            <!-- <img src="img.jpg" alt="John" style="width:100%"> -->
            <div class="avata">
            <i class="fa-solid fa-user"></i>
            </div>
            <h1><?php echo $name ?></h1>
            <p class="title"><?php echo $email ?></p>
            <p><?php echo $phone ?></p>
            <p><?php echo $add ?></p>

            <!-- <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a> -->

            <p><button class="edit" name="edit"><?php echo '<li class="active"><a href="updateUserInfo.php">Edit</a></li>'; ?></button></p>
             
        </div>
    </div>

    
    
</body>
</html>

<?php include('footer.php'); ?>