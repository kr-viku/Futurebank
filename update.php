<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>update</title>
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
						<h2>update Your Account</h2>
						<p>Email can't be changed</p>
					</header>

					
                    
                    <form method="post">
<table align="center" style="background-color:#00FFFF" cellspacing="8" >
<tr>
        <td border="1" >First Name</td>
        <td><textarea name="firstname" required placeholder="enter your first name here"></textarea></td>
        <td border="1" >Last Name</td>
        <td><textarea name="lastname" required placeholder="enter your last name here"></textarea></td>
</tr>


        <td border="1" >Home_No</td>
        <td><textarea name="home" required placeholder="enter your name here"></textarea></td>
        
        <td border="1" >Street</td>
        <td><textarea name="street" required placeholder="enter your name here"></textarea></td>
</tr>
<tr>
     <td>city</td>
     <td><select name="city">
      <option value=' '>SELECT CITY</option>
      <option>jharkhand</option>
      <option>bihar</option>
      <option>kolkata</option>
      </select></td>
</tr>
<tr>
    <td>Mob No.</td>
    <td><input type="number" name="mobno" required placeholder="enter your mobile number"></td>

    <td>Phone No.</td>
    <td><input type="number" name="phno" placeholder="enter your phone number"></td>
</tr>

<tr>
     <td align="center" colspan="7"><input type='submit' name='ok' value='Edit'><input type='reset'></td>
</tr>

</table>
</form>

					
			<?php 
				
if(isset($_POST['ok']))
{
   
	$first_name=$_POST['firstname'];
	$last_name=$_POST['lastname'];
	
	$home_no=$_POST['home'];
	$street=$_POST['street'];
	$city=$_POST['city'];			
	$mob_no=$_POST['mobno'];
	$ph_no=$_POST['phno'];
	
	
	
    $update_query_string = mysqli_query($connect,"UPDATE customer_details SET  first_name='$first_name',Last_name='$last_name',home_no='$home_no',Street='$street',City='$city',mob_no='$mob_no',ph_no='$ph_no' WHERE cust_id='".$_SESSION['user']['cust_id']."'") or die(mysqli_error($connect));
    if($update_query_string==1)
    {
        ?><script> alert('Update Success');window.location.href="index.php";</script><?php
    }
}
?>


				</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>