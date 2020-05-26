<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Change Your Password</title>
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
						<h2>Change Password</h2>
						<p>Forget Password !!! No need to Worry !</p>
					</header>

					<form method="post">
<table align='center' border="4" bordercolor="#FFCCFF" >
<tr>
<td>Old password</td>
<td><input type="password" name="password" required placeholder="old password"></td>
</tr>
<tr>

<td>New password</td>
<td><input type="password" name="newpassword" required placeholder="new password"></td></tr>

<tr>
<td>Confirm new</td>
<td><input type="password" name="cnewpassword" requiredplaceholder="confirm new password"></td>
</tr>
<tr>
<td><input type="submit" name="update" value="Save"></td>
</tr>
</table>
</form>


				</div>
			</section>

		<?php 
if(!empty($_SESSION['user']['cust_id'])){
	
	$cust_id=$_SESSION['user']['cust_id'];

  $query="SELECT * FROM customer_details WHERE cust_id='".$_SESSION['user']['cust_id']."'";
$getPrevData=mysqli_query($connect,$query) or die(mysqli_error($connect));
    // echo $_SESSION['user']['cust_id'];
	$row=mysqli_fetch_array($getPrevData);
	//echo $row['password'];
?>
<?php
if(isset($_POST['update'])){
	$password1=$_POST['password'];
	if($password1!=$row['password']){?>
    <script type="text/javascript">alert("password you entered is not matching");
	</script>
    			<?php
		}else{
			echo "<br>you entered correct password<br>";
			$new = $_POST['newpassword'];
			$confnew = $_POST['cnewpassword'];
			if($new!=$confnew){ ?>
				<script type="text/javascript">alert("confirm password is not matching");</script>
    <?php }else{
		echo "confirm password matched <br>";
		$query="UPDATE customer_details SET password='$new' WHERE cust_id='".$_SESSION['user']['cust_id']."'";
		$row=mysqli_query($connect,$query) or die(mysqli_error($connect));
		if($getPrevData){
			?>
            <script type="text/javascript">alert("Password Changed Successfully");
			window.location.href='index1.php';
			</script>
            <?php }
	}
}}
}
?>

		<!-- Footer -->
			<?php include('footer.php');?>


	</body>
</html>