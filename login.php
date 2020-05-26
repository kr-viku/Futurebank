<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Log In</title>
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
						<h3><pre>    Everyday is a bank account and time is our currency
                                  ..... No one is rich , no one is poor.....               
    we've got 24hours each</pre></h3>
					</header>

					
					<h2 align="center">!!!Login Here!!!</h2>
                    
<form method="POST">
		<table cellspacing="0" border="1" cellpadding="5">
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="Email"></td>			
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Login"></td>
				<td><input type="reset" name="reset" placeholder="reset"></td>			
			</tr>
			<tr>
				<td>New here <a href="signup.php">create account?</a></td>
				<td><a href="forgetpass.php">forgot password</a></td>
			</tr>

		</table>
	</form>
    
    <?php
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="SELECT c.* , a.* FROM customer_details c JOIN create_acc a WHERE c.email='$email' AND c.password='$password' AND c.cust_id = a.id";
	$fire=mysqli_query($connect,$query) or die(mysqli_error($connect));
	if(mysqli_num_rows($fire)==1)
	{
		if($email=="vk@gmail.com" or $email=="rr@gmail.com")
		{
			$userdata=mysqli_fetch_array($fire); 
			$_SESSION['user']= NULL;
			$_SESSION['user']=$userdata;  
			header('Location:admin.php');  
		}
		else
		{
			$userdata=mysqli_fetch_array($fire); 
			$_SESSION['user']= NULL;
			$_SESSION['user']=$userdata; 
			 
			header('Location:index.php');//page direction when user login
		}
	}
	else{
		echo "<p style='color:red' align='center'><font size='4'><b>***Invalid User. Please Register First</b></font></p>" ; }
}?>

				</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>
