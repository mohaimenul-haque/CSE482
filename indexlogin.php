<?php
session_start();

	if (!isset($_SESSION["s_name"])) {
		header("location: login.php");


	}


	
	// echo $_SESSION["uemail"];
	$dbuseremail = $_SESSION["uemail"];
	// $dbusername = $_SESSION["s_name"];

	include('connectPHP.php');

    $sql = "SELECT * FROM customer WHERE email='$dbuseremail' ";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $id = $row["c_id"]; 
        $name = $row["name"];
        $email = $row["email"];
    }

	


	

?>






<!DOCTYPE HTML>
<html>

<head>
	<title>Gari Lagbe</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
</head>





<body>


	<?php include('header.php') ?>





	<div class="main-content">
		<div class="wrap">
			<div class="main-box">
				<div class="box_wrapper">
					<h1>Hello <?php echo $name ?>!!</h1>
					<h3>Welcome to your Account!</h3>
				</div>

			</div>
		</div>
	</div>



	<br><br>
	
	
	<?php include('footer.php'); ?>

</body>

</html>