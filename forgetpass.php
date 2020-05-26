<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Forget Password</title>
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
						<h2>Forget Your Password</h2>
						<p>Enter your Valid E-mail id and set New Password</p>
					</header>
                     <form method="post">
					   <table>
                           <tr>
                           <td>E-mail</td>
                           <td><input type="email" name="email" required placeholder="enter your emal address here"</td>
                           </tr>
                           
                           <tr>
                           <td>New Password</td>
                           <td><input type="password" name="npass" required placeholder="Enter New Password"</td>
                           </tr>
                           
                           <tr>
                           <td>Confirm Password</td>
                           <td><input type="password" name="cpass" required placeholder="Enter New Password"</td>
                           </tr>
                           
                           <tr>
                           <td><input type="submit" name="update" value="Save"></td>
                           </tr>
                           
                        </table>
                        </form>

				</div>
			</section>
            
   
<!--if(!empty($_GET['id'])){
#$id=$_GET['id'];

	//echo $row['password'];

#} -->
<?php
if(isset($_POST['update'])){
	$email=$_POST['email'];
	
	$query = "SELECT * FROM customer_details WHERE email='$email'";
$getPrevData=mysqli_query($connect,$query) or die(mysqli_error($connect));
if(mysqli_num_rows($getPrevData)==1){
	$row=mysqli_fetch_array($getPrevData);
	if($email!=$row['email']){?>
    <script type="text/javascript">alert("Email you entered is not matching");
	</script>
    			<?php
		}else{
			echo "<br>you entered correct Email<br>";
			$new = $_POST['npass'];
			$confnew = $_POST['cpass'];
			if($new!=$confnew){ ?>
				<script type="text/javascript">alert("confirm password is not matching");</script>
    <?php }else{
		echo "confirm password matched <br>";
		$query="UPDATE customer_details SET password='$new' WHERE email='$email'";
		$row=mysqli_query($connect,$query) or die(mysqli_error($connect));
		if($getPrevData){
			?>
            <script type="text/javascript">alert("Password Changed Successfully");
			window.location.href='index.php';
			</script>
            <?php }
	}
}}}

?>
            
            

		<!-- Footer -->
			<?php include('footer.php') ?>

	</body>
</html>