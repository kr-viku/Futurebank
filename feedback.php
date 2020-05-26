<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Feedback</title>
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
			<section id="three" class="wrapper style3 special">
				<div class="container">
					<header class="major">
						<h2>Submit your feedback</h2>
						<p>We all need people who will give us feedback. That's how we improve.</p>
					</header>
				</div>
				<div class="container 50%">
					<form action="#" method="post">
						<div class="row uniform">
							<div class="6u 12u$(small)">
								<input name="name" id="name" value="" placeholder="Name" type="text">
							</div>
							<div class="6u$ 12u$(small)">
								<input name="email" id="email" value="" placeholder="Email" type="email">
							</div>
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
							</div>
							<div class="12u$">
								<ul class="actions">
									<li><input name="ok" value="Send Message" class="special big" type="submit"></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>
            <?php
			if(isset($_POST['ok'])){
				$Name=$_POST['name'];
	            $Email=$_POST['email'];
	            $f_message=$_POST['message'];
			}
			?><script type="text/javascript">alert("Thanks for the awesome review, We work hard to meet expectations like yours");</script>
            <?php
			$query_string ="INSERT INTO feedback VALUES('$Name','$Email','$f_message')";
			$exec=mysqli_query($connect,$query_string) or die(mysqli_error($connect));
			?>
		<!-- Footer -->
			<?php include('footer.php') ?>

	</body>
</html>