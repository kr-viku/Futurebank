<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Transaction</title>
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
						<h2>Transcation</h2>
						<p>Here is the Details of All the Transcation made by Customers</p>
					</header>
<?php 
	$query = 'SELECT * FROM transaction';
	$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
				$sl = 1;
	if(mysqli_num_rows($fire)>0){?>
	<table cellspacing="0" cellpadding="5" border="1">
		<thead>
			<tr>
				<th>sl</th>
				<th>from A/C transfered</th>
				<th>To A/C transfered</th>
				<th>transfered Amount</th>
				<th>Remaining Balance of user</th>
                <th>updated balance of target account</th>
				<th>date</th>
			</tr>
		</thead>
	<tbody>
		<?php 

			while($user = mysqli_fetch_array($fire)){ ?> 
				<tr>
					<td><?php echo $sl ?></td>
					<td><?php echo $user['accountno'] ?></td>
					<td><?php echo $user['tar_account'] ?></td>
					<td><?php echo $user['transferamt'] ?></td>
					<td><?php echo $user['rembalance'] ?></td>
                    <td><?php echo $user['balance'] ?></td>
					<td><?php echo $user['date'] ?></td>
				</tr>


				<?php
				$sl++;
			}
		 ?>
	</tbody>
	
	</table>

	<?php

	}
 ?>


				</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>