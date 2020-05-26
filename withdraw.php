
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
			<h2>withdraw form</h2>
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
					<td><input type="number" name="amount" placeholder="Amount to withdraw"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit"></td>
					<td><input type="reset" name="reset" value="reset"></td>
				</tr>
				
			</table>
		</form>
	

	
	<!-- select from table where accounno = $account -->

		<?php 
		// insert
			if(isset($_POST['submit'])){
			$account = $_POST['account'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$amount = $_POST['amount'];
			$query = "SELECT * FROM create_acc WHERE accountno='$account'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);
			  /*echo $user['password']."<br>";
			  echo $user['username']."<br>";
			  echo $user['accountno'];*/
			  //echo $user['amount'];
			  //echo $user['amount']."<br>";

			  // ACCOUNT NUMBER VALIDATION
			  $account_valid = false;
			  if($account == $user['accountno']){
			  	if($username == $user['username']){
			  		if($password == $user['password']){
			  			//echo "your account is valid<br>";
			  			$account_valid =true;
			  		}else{
			  			echo 'you have entered wrong password<br>';
			  		}
			  	}else{
			  		echo 'you have entered wrong username<br>';
			  	}
			  }else{
			  	echo 'you have entered wrong account number<br>';
			  }

			  if($account_valid == true){
			  	//echo $user['amount'];
			  	//$amount += $user['amount'];
			  	$user['amount'] -= $amount;
			  	//echo $user['amount'];
			  	$amount1 = $user['amount'];
			  	$currentdatetime = date('d-m-Y H:i:s');
			  	//echo "$amount1";
			  	 $query = "UPDATE create_acc SET amount ='$amount1'  WHERE accountno='$account'";
			  	 $fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			  	$query = "INSERT INTO withdraw(accountno,username,password,date,amount) VALUES('$account','$username','$password','$currentdatetime','$amount')";
			  	$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			  	if($fire) echo"you successfully credited";	

			  	}
			
		}
	 ?>

			</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>