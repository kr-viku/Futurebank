
<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic - Transit by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
		<?php include('navbar.php'); ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Generic</h2>
						<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
					</header>
                    
                    <form method="post">
			<h2>create your account</h2>
			<table cellpadding="5" cellspacing="0" border="1">
				<tr>
					<td>account Number</td>
					<td><input type="number" name="account" placeholder="Account Number"></td>
				</tr>
				<tr>
					<td>username</td>
					<td><input type="text" name="username" placeholder="username"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" name="password" placeholder="password"></td>
				</tr>
				<tr>
					<td>amount</td>
					<td><input type="number" name="amount" placeholder="amount"></td>
				</tr>
				<tr>
					<td>aadhar number</td>
					<td><input type="number" name="aadhar" placeholder="your aadhar number"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit"></td>
					<td><input type="reset" name="reset" value="reset"></td>
				</tr>
				
			</table>
		</form>

		<?php 
		// insert
			if(isset($_POST['submit'])){
			$account = $_POST['account'];
			$username = $_POST['username'];
			$aadhar = $_POST['aadhar'];
			$query ="SELECT * FROM create_acc WHERE accountno='$account' or username='$username' or aadharno ='$aadhar'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			if(mysqli_num_rows($fire) == 1){
				echo "<h3 style='color:red'> account number or username or aadhar number aready exist. Please try another aaccount</h3>";
			}
			
			/*$query = "SELECT * FROM create_acc WHERE accountno='$account' AND username='$username'";
			$fire = (mysqli_query($connect,$query) or die(mysqli_error($connect)));
			if(mysqli_num_rows($fire)){
				echo "Account Number or usename already exist";
			}*/

			else{
				
			date_default_timezone_set('Asia/Kolkata');
			$currentdatetime = date('d-m-Y H:i:s');
			$password = $_POST['password'];
			$amount = $_POST['amount'];
			
			//echo $name." ".$email." ".$password." ".$phone." ".$address;
			$query = "INSERT INTO create_acc(accountno,username,password,date,amount,aadharno) VALUES('$account','$username','$password','$currentdatetime','$amount','$aadhar')";
			$fire = mysqli_query($connect,$query) OR die(mysqli_error($connect));
			if($fire) echo "Account created successfully";
		}
	}
	 ?>


					
			</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>