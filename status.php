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
		<?php include('navbar1.php'); ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Generic</h2>
						<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
					</header>
<?php
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			if($_GET['status']==1){
				$accountno = rand(0000000000,9999999999);
				$amount = 5000;
				$query = "UPDATE create_acc SET accountno = '$accountno' , amount = '$amount' WHERE id = '$id'";
				$query1 ="UPDATE balance SET acountno=$accountno,amount=$amount WHERE id=$id";
			$fire1 = mysqli_query($connect,$query1) OR die(mysqli_error($connect));
				

			}else{
				$accountno = 0;
				$amount = 0;
				$query = "UPDATE create_acc SET accountno = '$accountno' , amount = '$amount' WHERE id = '$id'";
				$query1 ="UPDATE balance SET acountno=$accountno,amount=$amount WHERE id=$id";
			$fire1 = mysqli_query($connect,$query1) OR die(mysqli_error($connect));

			}
			
			$fire = mysqli_query($connect,$query) OR die(mysqli_error($connect));
			header('location:customerdetail.php');
			
		}
	 ?>

				</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>