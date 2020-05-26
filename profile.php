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
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
		</noscript>
	</head>
	<body>

		<!-- Header -->
		<?php include('navbar.php') ?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Profile</h2>
						<p>Hey !!!! Here is your Profile</p>
					</header>
                    <h2 style="text-align:center">User Profile Card</h2>

<div class="card" align="center">
  <img src="images/person.png" alt="person" style="width:20%">
  <!-- <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p> -->
</div>
                    
                <!--   <h3>Change password</h3><a href="changepwd.php">Click Here</a><br><br>
                    
                    <a href="balance.php">Check Balance</a> -->
  <?php
                    
                    $query="SELECT *FROM customer_details WHERE cust_id=".$_SESSION['user']['cust_id'];
$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));

if(exec==1){
	//echo "no of users signed up=".mysqli_num_rows($exec);
	
	?>
    
    <table align='center' cellpadding="5" border="7" cellspacing="0" style="background-color:#grey">
      <thead>
         <tr>
         
           <th>FIRST NAME</th>
           <th>LAST NAME</th>
           <th>B'DAY</th>
           <th>AGE</th>
           <th>PASS</th>
           <th>HOME_NO</th>
		   <th>STREET</th>
           <th>CITY</th>
           <th>PH NO</th>
           <th>MOB NO</th>
           </tr>
        </thead>
        <tbody>
        
<?php

   while($_SESSION['user']=mysqli_fetch_array($exec))
   {
	   ?>
       
       <tr>
      
         <td><?php echo $_SESSION['user']['first_name'] ?> </td><br>
          <td><?php echo $_SESSION['user']['last_name'] ?> </td><br>
           <td><?php echo $_SESSION['user']['birthdate'] ?> </td><br>
           <td><?php echo $_SESSION['user']['age'] ?> </td><br>
           <td><?php echo $_SESSION['user']['password'] ?> </td><br>
           <td><?php echo $_SESSION['user']['home_no'] ?> </td><br>
           <td><?php echo $_SESSION['user']['street'] ?> </td><br>
           <td><?php echo $_SESSION['user']['city'] ?> </td><br>
           <td><?php echo $_SESSION['user']['city'] ?> </td><br>
           <td><?php echo $_SESSION['user']['ph_no'] ?> </td><br>
           <td><?php echo $_SESSION['user']['mob_no'] ?> </td><br>
           			
       
     <!--    <td><a href="delete.php?id=<?php// echo $SESSION_['id']?>&delete=1$myname=raj" onclick="return confirm('Are you sure you want to delete mr/ms. <?php// echo $each_signup['email']?>')"><img src="delete.png"></a></td>				
      
	  
	   <td><a href="update.php?id=<?php// echo $each_signup['id']?>&delete=1$myname=raj" onclick="return confirm('Are you sure you want to edit mr/ms. <?php// echo $each_signup['email']?>')"><img src="edit.svg"></a></td>
       
       <td><a href="chngpass.php?id=<?php// echo $each_signup['id']?>&delete=1$myname=raj" onclick="return confirm('Are you sure you want to change pass of mr/ms. <?php// echo $each_signup['email']?>')">change</a></td> -->
	   
	   
	    </tr>
       <?php 
   }
}
   ?>
                    
                    

			</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>