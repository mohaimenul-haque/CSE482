


<?php

	session_start();
	include('connectPHP.php');

	// $db = mysqli_connect("localhost", "root", "", "car_showroom");



	$nameErr = $emailErr = $addErr = $numErr = $passErr = '';

	if (isset($_POST['reg'])) {

		$username = $_POST['username'];
		$useremail = $_POST['useremail'];
		$useraddress = $_POST['useraddress'];
		$userphone = $_POST['userphone'];
		$password = $_POST['pass'];


		// function preprocess_text_for_phone_number_bd($phone_number_validation_regex) {
			
		// 	// $text = trim($text);
		// 	// $text = preg_replace('/[^0-9]/', '', $text); 
		// 	// $text = substr($text, -11);

		// 	$phone_number_validation_regex = "/(^(\+88|0088)?(01){1}[3456789]{1}(\d){8})$/"; 
		
		// 	return $phone_number_validation_regex;
		// }

		$passValidate = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";

		
		if (empty($username)) {
			$nameErr = "Name is required";
		} 
		if (!filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
		} 
		if (empty($useraddress)) {
			$addErr = "Address is required";
		} 
		if (empty($userphone)) {
			$numErr = "Number is required";
		} 
		if (!preg_match($passValidate, $password)) {
			$passErr = "Must be a minimum of 8 characters, 1 number, uppercase, lowercase character";
		} 
		

		

		if (!empty($username) && filter_var($useremail) && !empty($useraddress) && !empty($userphone) &&  preg_match($passValidate, $password) ) {

			$checkUser1 = "SELECT * FROM customer WHERE email = '$useremail'";
			$result1 = mysqli_query($conn, $checkUser1);
			$count1 = mysqli_num_rows($result1);

			if($count1 > 0){
				$message = "This Email has already registered!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$query = "CALL register('$username','$useremail','$password','$userphone','$useraddress')";
				mysqli_query($conn, $query);
				$message = "registration done ! ";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
	}

?>





<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

	<div class="header">
		<div class="wrap">
			<div class="header-bot">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" style="width:450px; height: 160px;"></a>
				</div>

				<div class="cart">
					<div class="menu-main">

						<ul class="dc_css3_menu">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.php">Brands</a></li>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="register.php">Signup</a></li>
						</ul>

						<div class="clear"></div>
					</div>

				</div>

				<div class="clear"></div>
			</div>
		</div>
	</div>


	<div class="header-bottom">
		<div class="wrap">
			<div class="page-not-found">
				<div class="text-center">
					<h2>User Account Registration
					</h2>
				</div>

				<div class="container-fluid row">

					<div class="col-md-3"></div>

						<div class="col-md-6">

							<form class="text-center" action="register.php" method="post">

								<div>
									<label>Name</label>
									<input type="text" class="form-control transparent-input" value="<?php if(isset($_POST['reg'])){echo $username;} ?>"  size="50" placeholder="YOUR NAME " name="username" >
									<span style="color:red;"><?php if(isset($_POST['reg'])){echo $nameErr;} ?></php></span>
								</div>

								<div><br />
									<label>Email</label>
									<input type="text" class="form-control transparent-input" value="<?php if(isset($_POST['reg'])){echo $useremail;} ?>" size="50" placeholder="YOUR EMAIL" name="useremail" >
									<span style="color:red;"><?php if(isset($_POST['reg'])){echo $emailErr;} ?></php></span>
								</div>


								<div><br />
									<label>Adress</label>
									<input type="text" class="form-control transparent-input" value="<?php if(isset($_POST['reg'])){echo $useraddress;} ?>" size="50" placeholder="YOUR ADDRESS" name="useraddress" >
									<span style="color:red;"><?php if(isset($_POST['reg'])){echo $addErr;} ?></php></span>
								</div>


								<div><br />
									<label>phone</label>
									<input type="text" class="form-control transparent-input" value="<?php if(isset($_POST['reg'])){echo $userphone;} ?>" size="50" placeholder="YOUR PHONE NUMBER" name="userphone" >
									<span style="color:red;"><?php if(isset($_POST['reg'])){echo $numErr;} ?></php></span>
								</div>

								<div><br />
									<label>PASSWORD</label>
									<input type="password" class="form-control transparent-input" value="<?php if(isset($_POST['reg'])){echo $password;} ?>" size="50" placeholder="PASSWORD PLEASE" name="pass" >
									<span style="color:red;"><?php if(isset($_POST['reg'])){echo $passErr;} ?></php></span>
								</div>

								<div><br />
									<button type="submit" name="reg" class="btn btn-warning" value="reg">Sign up</button>
								</div>
							</form>
						</div>

					<div class="col-md-3"></div>

				</div>
			</div>
		</div>
	</div>








	<?php include('footer.php'); ?>



	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>


</body>

</html>





