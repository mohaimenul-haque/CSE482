

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









    $nameErr = $emailErr = $addErr = $numErr = '';

	if (isset($_POST['update'])) {

        $Updatename = $_POST['username'];
		$Updateaddress = $_POST['useraddress'];
		$Updatephone = $_POST['userphone'];


        $sql = "UPDATE customer SET name='$Updatename'  WHERE email='$dbuseremail' ";

        if ($conn->query($sql) === TRUE) {
            $message = "Record updated successfully !";	
            echo "<script type='text/javascript'>alert('$message');</script>";
            
            header("Location: indexlogin.php");

          } else {
            echo "Error updating record: " . $conn->error;
          }


        // if (empty($username)) {
		// 	$nameErr = "Name is required";
		// }  
		// if (empty($useraddress)) {
		// 	$addErr = "Address is required";
		// } 
		// if (empty($userphone)) {
		// 	$numErr = "Number is required";
		// }



        // if (!empty($username) && filter_var($useremail) && !empty($useraddress) && !empty($userphone)){

        //     $sql = "UPDATE MyGuests SET name='$Updatename' phone='$Updatephone' address='$Updateaddress' WHERE email='$dbuseremail' ";

        //     $message = "Update !";
		// 		echo "<script type='text/javascript'>alert('$message');</script>";
        // }


    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="header-bottom">
		<div class="wrap">
			<div class="page-not-found">
				<div class="text-center">
					<h2>User Information
					</h2>
				</div>

				<div class="container-fluid row">

					<div class="col-md-3"></div>

						<div class="col-md-6">

							<form class="text-center" action="" method="post">

								<div>
									<label>Name</label>
									<input type="text" class="form-control transparent-input" value="<?php echo $name; ?>"  size="50" placeholder="YOUR NAME " name="username" >
									<span style="color:red;"><?php if(isset($_POST['update'])){echo $nameErr;} ?></php></span>
								</div>

								<div><br />
									<label>Email</label>
									<input type="text" class="form-control transparent-input" value="<?php echo $email; ?>" size="50" placeholder="YOUR EMAIL" name="useremail" readonly >
									<span style="color:red;"><?php if(isset($_POST['update'])){echo $emailErr;} ?></php></span>
								</div>


								<div><br />
									<label>Adress</label>
									<input type="text" class="form-control transparent-input" value="<?php echo $add; ?>" size="50" placeholder="YOUR ADDRESS" name="useraddress" >
									<span style="color:red;"><?php if(isset($_POST['update'])){echo $addErr;} ?></php></span>
								</div>


								<div><br />
									<label>phone</label>
									<input type="text" class="form-control transparent-input" value="<?php echo $phone; ?>" size="50" placeholder="YOUR PHONE NUMBER" name="userphone" >
									<span style="color:red;"><?php if(isset($_POST['update'])){echo $numErr;} ?></php></span>
								</div>


								<div><br />
									<button type="submit" name="update" class="btn btn-warning" value="update">Update Info</button>
								</div>
							</form>
						</div>

					<div class="col-md-3"></div>

				</div>
			</div>
		</div>
	</div>



    <script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>
    
</body>
</html>

<?php include('footer.php'); ?>