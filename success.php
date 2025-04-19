
<?php 
session_start();
    // if (!isset($_SESSION["s_name"])) {
    //     header("location: login.php");
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>

    <?php include('header.php'); ?>
    <div>
        <h1>Transaction Successful</h1>
        <a class="btn btn-warning" href='indexlogin.php'>Back to home</a>
    </div>    

    <?php include('footer.php'); ?>
    
</body>
</html>