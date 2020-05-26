<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Customer Details</title>
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
						<h2>Customer Details</h2>
						<p>Here is the details of customer</p>
					</header>
<table cellpadding="5" cellspacing="0" border="1"> 
		<tr>
			<th>customer id</th>
			<th>first name</th>
			<th>last name</th>
			<th>email</th>
			<th>DOB</th>
			<th>age</th>
			<th>password</th>
			<th>home no</th>
			<th>street</th>
			<th>city</th>
			<th>phone</th>
			<th>mobile</th>
			<th>account number</th>
			<th>date</th>
			<th>status</th>
			<th>A/c number</th>
			<th>Balance</th>
		</tr>
		<?php 
			$query = "SELECT c.*,a.* FROM customer_details c JOIN create_acc a WHERE c.cust_id=a.id";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			if(mysqli_num_rows($fire)>0){
	  			while($user = mysqli_fetch_array($fire)) {?>
	  				 <tr>
	  				 	<td><?php echo $user['cust_id'] ?></td>
	  				 	<td><?php echo $user['first_name'] ?></td>
	  				 	<td><?php echo $user['Last_name'] ?></td>
	  				 	<td><?php echo $user['email'] ?></td>
	  				 	<td><?php echo $user['birthdate'] ?></td>
	  				 	<td><?php echo $user['age'] ?></td>
	  				 	<td><?php echo $user['password'] ?></td>
	  				 	<td><?php echo $user['home_no'] ?></td>
	  				 	<td><?php echo $user['street'] ?></td>
	  				 	<td><?php echo $user['city'] ?></td>
	  				 	<td><?php echo $user['ph_no'] ?></td>
	  				 	<td><?php echo $user['mob_no'] ?></td>
	  				 	<td><?php echo $user['accountno'] ?></td>
	  				 	<td><?php echo $user['date'] ?></td>
	  				 	<td><?php if($user['accountno']==0){ ?><a href=" status.php?id=<?php echo $user['id'] ?>&status=1">APPROVE</a><?php } else { ?><a href=" status.php?id=<?php echo $user['id']?>&status=0">DISAPPROVE</a><?php } ?></td>
	  				 	<td><?php echo $user['accountno']?></td>
	  				 	<td><?php echo $user['amount']?></td>

	  				 </tr>


	  				<?php } ?>
	  		</table>

	  			<?php }
		 ?>
		 <a href="admin.php">click</a>
		
		
	

				</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>