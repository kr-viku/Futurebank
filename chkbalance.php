<?php error_reporting(0); ?>
<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Check Balance</title>
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
						<h2>Check Balance</h2>
						<p>No more Need to Visit Bank ... You CAn Check Your BAlance HEre</p>
					</header>
                    
               
			<?php
			$query = "SELECT *FROM balance WHERE id = '".$_SESSION['user']['id']."'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);
			
			if($user['acountno']==0){?>
                
                 <script type="text/javascript">alert("you are not aproved from admin. Please wait for sometime.");
			window.location.href='index.php';
			</script>
			<?php }
			else{
			if($fire) echo "<h2 style='color:green'>current balance is: ".$user['amount']."</h2>";
			}
		
	 ?><br>
	 <a href="index.php">go back</a>


			</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>