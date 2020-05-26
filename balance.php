<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Check Your Balance</title>
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
		<?php include('navbar1.php'); ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Balance</h2>
						<p>No Need to Visit Your Bank...just Check your Balance in One click</p>
					</header>
<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * balance WHERE id='$id'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);
			if($fire) echo "<h1 style='color:green'>current balance is".$user['amount']."</h1>";
		}
	 ?>


				</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>