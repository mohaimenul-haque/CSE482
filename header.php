<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- <div class="header">
        <div class="wrap">
            <div class="header-bot">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="" style="width:450px; height: 160px;"></a>
                </div>
                <div class="cart">
                    <div>
                        <h3 style="color: white;"> Welcome <?= $_SESSION['s_name']; ?> !! </h3>
                    </div>

                    <div class="menu-main">

                        <ul class="dc_css3_menu">
                            <li class="active"><a href="indexlogin.php">Home</a></li>
                            <li><a href="services.php">Brands</a></li>
                            <li><a href="booking.php">Rent</a></li>
                            <li><a href="orders.php">Orders</a></li>
                            <li><a href="logout.php">logout</a></li>

                        </ul>

                        <div class="clear"></div>
                    </div>

                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div> -->

    <div class="header">
		<div class="wrap">
			<div class="header-bot">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" style="width:450px; height: 160px;"></a>
				</div>


				<div class="cart">

					<div class="menu-main">
						<?php
							
							if (isset($_SESSION['s_name'])) {
								echo '<ul class="dc_css3_menu">';
								echo '<li class="active"><a href="indexlogin.php">Home</a></li>';
								echo '<li><a href="services.php">Brands</a></li>';
								echo '<li><a href="booking.php">Rent</a></li>';
								echo '<li><a href="orders.php">Orders</a></li>';
								echo '<li><a href="userProfile.php">Profile</a></li>';
								echo '<li><a href="logout.php">logout</a></li>';
								echo '</ul>';
							} else {
								echo '<ul class="dc_css3_menu">';
								echo '<li class="active"><a href="index.php">Home</a></li>';
								echo '<li><a href="about.html">About</a></li>';
								echo '<li><a href="services.php">Brands</a></li>';
								echo '<li><a href="contact.php">Contact</a></li>';
								echo '<li><a href="login.php">Login</a></li>';
								echo '<li><a href="register.php">Signup</a></li>';
								echo '</ul>';
							}
						?>
						<div class="clear"></div>
					</div>

				</div>


				<div class="clear"></div>
			</div>
		</div>
	</div>

</body>

</html>