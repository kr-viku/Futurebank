<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Account</title>
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
						<h2>Account no</h2>
						<p>Open Your Account in Easy Steps</p>
					</header>

	<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM create_acc WHERE id = $id";
			$fire = mysqli_query($connect,$query) OR die(mysqli_error($connect));
			//if($fire) echo "we got the data";
			$user = mysqli_fetch_array($fire);
			//echo $user['accountno'];
			$random = rand(0000000000,9999999999);
			$query = "UPDATE create_acc SET accountno=$random WHERE id=$id";
			$fire = mysqli_query($connect,$query) OR die(mysqli_error($connect));
			if($fire) header("Location:customerdetail.php");
		}
	 ?>

				</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>