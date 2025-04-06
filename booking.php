<?php
session_start();
if (!isset($_SESSION["s_name"])) {
	header("location: login.php");
}


$db = mysqli_connect("localhost", "root", "", "car_showroom");

// REGISTER USER
if (isset($_POST['book'])) {   
	header("location: payment.php");
	$cmodel = $_POST['model'];
	$user = $_SESSION["s_name"];

	$getmodelno = mysqli_query($db, "SELECT model from model where name = '" . $cmodel . "'");
	$numrows1 = mysqli_num_rows($getmodelno);
	if ($numrows1 != 0) {
		while ($row1 = mysqli_fetch_assoc($getmodelno)) {
			$dbmodelno = $row1['model'];
		}
	}

	$checkcar = mysqli_query($db, "SELECT * from car where model = '" . $dbmodelno . "'");
	$numrows3 = mysqli_num_rows($checkcar);

	if ($numrows3 != 0) {
		$getuserid = mysqli_query($db, "SELECT c_id from customer where name = '" . $user . "'");
		$numrows2 = mysqli_num_rows($getuserid);
		if ($numrows2 != 0) {
			while ($row2 = mysqli_fetch_assoc($getuserid)) {
				$dbuserid = $row2['c_id'];
			}
		}
		$carupdate = " DELETE from car where model = '" . $dbmodelno . "' LIMIT 1 ";
		mysqli_query($db, $carupdate);
		$orderupdate = " INSERT into sale2 (customer_id,carmodel) VALUES ('$dbuserid', '$dbmodelno')";
		mysqli_query($db, $orderupdate);
		$message = "Booking succesfull! ";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		$message = "Oops ! the car you searching for is currently not available ! ";
		echo "<script type='text/javascript'>alert('$message');</script>";
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

	<?php include('header.php') ?>


	<div class="header-bottom">
		<div class="wrap">
			<div class="page-not-found">
				<div class="text-center">
					<h2>RENT YOUR CAR !</h2>
				</div>

				<div class="container-fluid row">

					<div class="col-md-3"></div>


					<div class="col-md-6">

						<form class="text-center" action="" method="post">

							<div>
								<label>Select Your Car Model</label><br>

								<select name="model" style="width:575px; height: 40px;">
									<option value="">|--select car--|</option>
									<option value=""> </option>


									<option value="Land Cruiser Prado">Toyota Land Cruiser Prado</option>
									<option value="Fortuner"> Toyota Fortuner </option>
									<option value="Camry"> Toyota Camry </option>
									<option value="Innova Crysta"> Toyota Innova Crysta </option>
									<option value="Etios Cross">Toyota Etios Cross</option>

									<option value=""> </option>

									<option value="R8"> Audi R8</option>
									<option value="Q7"> Audi Q7 </option>
									<option value="RS7"> Audi RS7 </option>
									<option value="A8">Audi A8</option>
									<option value="TT"> Audi TT</option>

									<option value=""> </option>

									<option value="M4"> BMW M4 </option>
									<option value="X6"> BMW X6 </option>
									<option value="i8">BMW i8</option>
									<option value="M3"> BMW M3</option>
									<option value="X3"> BMW X3 </option>

									<option value=""> </option>

									<option value="Trailblazer"> Chervolet Trailblazer </option>
									<option value="Cruze">Chervolet Cruze</option>
									<option value="Sail"> Chervolet Sail</option>
									<option value="Beat"> Chervolet Beat </option>
									<option value="Volt"> Chervolet Volt</option>

									<option value=""> </option>

									<option value="Db11"> Aston Martin Db11 </option>
									<option value="Rapide">Aston Martin Rapide</option>
									<option value="Vanquish"> Aston Martin Vanquish</option>
									<option value="Vantage"> Aston Martin Vantage</option>
									<option value="vulcan"> Aston Martin vulcan</option>
									<option value=""> </option>

									<option value="Cedia"> Mitsubishi Cedia </option>
									<option value="Lancer">Mitsubishi Lancer</option>
									<option value="Montero"> Mitsubishi Montero</option>
									<option value="Outlander"> Mitsubishi Outlander </option>
									<option value="Pajero"> Mitsubishi Pjero</option>
									<option value=""> </option>
								</select>
							</div>

							<div><br>
								<button type="submit" name="book" class="btn btn-warning" value="book" >Rent the car</button>
							</div>

						</form>
					</div>

					<div class="col-md-3"></div>

				</div>
			</div>
		</div>
	</div>








	<?php include('footer.php'); ?>

</body>

</html>