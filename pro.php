<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Edit Profile</title>
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
		

		<!-- Header -->
		<?php include('navbar.php') ?>
        
        <h2>User</h2>
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
                    
                    <div style="background:black; display:inline-block; border-radius:20px; float:right;"><h3 style="color:white;"><a href="update.php">Edit Profile</a></h3></div>
                    
                    <div style="clear:both;"></div>
						<h2>Profile</h2>
						<p>Hey !!!! Here is your Profile</p>
					</header>

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
                    
                    $query="SELECT * FROM customer_details WHERE first_name='".$_SESSION['user']['first_name']."'";
					
					$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
    // echo $_SESSION['user']['cust_id'];
	$row=mysqli_fetch_array($exec);
	//echo $row['first_name'];
				
	
	
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
        
       
       <tr>
      
         <td><?php echo $row['first_name'] ?> </td><br>
          <td><?php echo $row['Last_name'] ?> </td><br>
           <td><?php echo $row['birthdate'] ?> </td><br>
           <td><?php echo $row['age'] ?> </td>
           <td><?php echo $row['password'] ?> </td>
           <td><?php echo $row['home_no'] ?> </td>
           <td><?php echo $row['street'] ?> </td>
           <td><?php echo $row['city'] ?> </td>
           <td><?php echo $row['ph_no'] ?> </td>
           <td><?php echo $row['mob_no'] ?> </td>
           			
       
     <!--    <td><a href="delete.php?id=<?php// echo $SESSION_['id']?>&delete=1$myname=raj" onclick="return confirm('Are you sure you want to delete mr/ms. <?php// echo $each_signup['email']?>')"><img src="delete.png"></a></td>				
      
	  
	   <td><a href="update.php?id=<?php// echo $each_signup['id']?>&delete=1$myname=raj" onclick="return confirm('Are you sure you want to edit mr/ms. <?php// echo $each_signup['email']?>')"><img src="edit.svg"></a></td>
       
       <td><a href="chngpass.php?id=<?php// echo $each_signup['id']?>&delete=1$myname=raj" onclick="return confirm('Are you sure you want to change pass of mr/ms. <?php// echo $each_signup['email']?>')">change</a></td> -->
	   
	   
	    </tr>
        </tbody></table>
    
                    
                    

			</div>
			</section>
            
		<!-- Footer -->
			<?php include('footer.php'); ?>


	</body>
		
</html>