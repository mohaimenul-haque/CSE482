<?php
session_start();
?>


<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.lightbox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" media="screen">
	<script type="text/javascript">
		$(function() {
			$('.gallery-grid a').lightBox();
		});
	</script>
</head>

<body>
	<?php include('header.php'); ?>
	<div class="header-bottom">
		<div class="wrap">
			<div class="main-box">
				<div class="gallery-grids">
					<div class="gallery-grid">
						<a href="images/Chevrolet.jpg"><img src="images/Chevrolet.jpg" alt="" style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/bmw.jpg"><img src="images/bmw.jpg" alt="" style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/audi.jpg"><img src="images/audi.jpg" alt="" style="width: 375px; height: 210px;"></a>
					</div>



				</div>



				<div class="container">
					<div class="row">

						<div class="col-sm-4">
							<a href="chervolet.php">
								<h3>Chervolet</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="bmw.php">
								<h3>BMW</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="audi.php">
								<h3>Audi</h3>
							</a>
						</div>

					</div>
				</div>

				<br><br><br>






				<div class="gallery-grids">
					<div class="gallery-grid">
						<a href="images/Toyota.jpg"><img src="images/Toyota.jpg" alt="" style="width: 375px; height: 210px;"></a>
					</div>


					<div class="gallery-grid">
						<a href="images/Aston%20Martin.png"><img src="images/Aston%20Martin.png" alt="" style="width: 375px; height: 210px;"></a>
					</div>

					<div class="gallery-grid">
						<a href="images/Mitsubishi.jpg"><img src="images/Mitsubishi.jpg" alt="" style="width: 375px; height: 210px;"></a>
					</div>


				</div>
				<div class="container">
					<div class="row">

						<div class="col-sm-4">
							<a href="toyota.php">
								<h3>Toyota</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="aston%20martin.php">
								<h3>Aston Martin</h3>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="mitsubishi.php">
								<h3>Mitsubishi</h3>
							</a>
						</div>

					</div>
				</div>

				<br><br><br>



				<div class="gallery-grids">





					<div class="clear"> </div>
				</div>
			</div>
		</div>
	</div>


	<?php include('footer.php'); ?>

</body>

</html>