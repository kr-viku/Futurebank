<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sign Up</title>
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
						<h3><pre>"Banking is very good business if you don't do anything dumb"</pre></h3>
					</header>
<h2 align="center"style="animation:running">!!!Sign Up Here!!!</h2>
<form method="post">
<table align="center" cellspacing="8" >
<tr>
        <td border="1" >First Name</td>
        <td><textarea name="firstname" required placeholder="enter your first name here"></textarea></td>
        <td border="1" >Last Name</td>
        <td><textarea name="lastname" required placeholder="enter your last name here"></textarea></td>
</tr>
<tr>
    <td>E-Mail</td>
    <td><input type="email" name="email" required placeholder="enter a valid email"></td>
</tr>
<tr>
        <td border="1" >Birthdate</td>
        <td><select name="month" >
<option value="01">January</option><option value="02">February</option><option value="03">March</option>
<option value="04">April</option><option value="05">May</option><option value="06">June</option>
<option value="07">July</option><option value="08">August</option><option value="09">September</option>
<option value="10">October</option><option value="11">November</option><option value="12">December</option></select> <select name="date" >
<option value="1">01</option><option value="2">02</option><option value="3">03</option>
<option value="4">04</option><option value="5">05</option><option value="6">06</option>
<option value="7">07</option><option value="8">08</option><option value="9">09</option>
<option value="10">10</option><option value="11">11</option><option value="12">12</option>
<option value="13">13</option><option value="14">14</option><option value="15">15</option>
<option value="16">16</option><option value="17">17</option><option value="18">18</option>
<option value="19">19</option><option value="20">20</option><option value="21">21</option>
<option value="22">22</option><option value="23">23</option><option value="24">24</option>
<option value="25">25</option><option value="26">26</option><option value="27">27</option>
<option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
</select> <input name="birthdate" type="text" id="year" required placeholder="year of birth" size="4" maxlength="4"> <span>(YYYY)</span>
</td>
        
         <td>Age</td>
       <td> <input type="number" name="age" min="14" max="59"></td>
</tr>
<tr>
    <td>Create password</td>
    <td><input type="password" name="npwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required /></td>
    
     <td>Confirm password</td>
    <td><input type="password" name="cpwd" required placeholder="enter your password"></td>
    
</tr>
<tr>
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
    
    <td>
    <!-- <label for="phonenum">Phone Number (format: xxxx-xxx-xxxx):</label> -->
    <input name="mobno" type="tel" pattern="^\d{10}$" required placeholder="enter your mobile number" > </td>
    
    <!-- <td><input type="phone number" name="mobno" required placeholder="enter your mobile number" ></td> -->

    <td>Phone No.</td>
    <td><input type="phone number" name="phno" required placeholder="enter your phone number" length="10" ></td>
</tr>

<tr>
     <td align="center" colspan="7"><input type='submit' name='ok' value='sign up'><input type='reset'></td>
</tr>

</table> 

</form>

<?php

if(isset($_POST['ok'])){
	
	#verify email adrress
	
	
	
	$first_name=$_POST['firstname'];
	$last_name=$_POST['lastname'];
	$email=$_POST['email'];
	$birthdate=$_POST['birthdate'];
	$age=$_POST['age'];
	$password=$_POST['npwd'];
	$cpassword=$_POST['cpwd'];
	$home_no=$_POST['home'];
	$street=$_POST['street'];
	$city=$_POST['city'];			
	$mob_no=$_POST['mobno'];
	$ph_no=$_POST['phno'];
	
	if($password!=$cpassword){ ?>
				<script type="text/javascript">alert("confirm password is not matching");</script>
    <?php }else{

	$query_string ="INSERT INTO customer_details VALUES('0','$first_name','$last_name','$email','$birthdate','$age','$password','$home_no','$street','$city','$ph_no','$mob_no')";
  $date = date('d-m-Y H:i:s');
  $query_string1 = "INSERT INTO create_acc VALUES ('0','0','$date','5000')";
   $query_string2 = "INSERT INTO balance VALUES('0','0','5000')";
		//$query = "SELECT * FROM balance ORDER BY id DESC LIMIT 1";
		//$fire=mysqli_query($connect,$query) or die(mysqli_error($connect));
	$exec=mysqli_query($connect,$query_string) or die(mysqli_error($connect));
  $exec1 = mysqli_query($connect,$query_string1) or die(mysqli_error($connect));
  $exec2 = mysqli_query($connect,$query_string2) or die(mysqli_error($connect));
	
	if($exec==1){
		
		
		echo "CONGRATS !!! you have signed up with us<br>";
		
		 
		// $_SESSION['user'] = NULL;
		
		 //$_SESSION['user']=$first_name; ?>
		 
		
		  
		  
		  <script type="text/javascript">alert("you are Successfully Signed Up.... PLease Login to Use Our Services");
		   window.location.href='login.php';
			</script> 
            <?php
		
		
	}
} 
}

?>
			
					

				</div>
			</section>

		<!-- Footer -->
			
            <?php include('footer.php') ?>
	</body>
</html>