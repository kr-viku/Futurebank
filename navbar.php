<?php include('connection.php') ?>
<style>
	#nav{
		background: #0071BC;
		border-radius: 10px;
		
	}
	body.landing #header nav a{
		color:white;
		font-size:15px;
	}
	
	#nav ul li a{
		font-size: 15px;
		color: black;
		padding: 4px;
	}
	#nav ul li a:hover{
		background:#29ABE2;
		font-size:20px;
		border-radius:30px;
		border-bottom:5px solid #0071BC;
	}
	
</style>
<header id="header">
				<h1><img src="images/logo.png" style="width:300px; height:70px;margin-top:13px;"> </h1>
                
              
                
				<nav id="nav" >
					<ul>
						<li style="padding-left:20px;"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<?php if(!isset($_SESSION['user'])) {?>
						<li><a href="signup.php" class="button special">Sign Up</a></li>
						<li><a href="login.php" class="button special">Log In</a></li>
						<?php } else {?>

						<li><a href="changepwd.php">change password</a></li> 
						<li><a href="pro.php">Edit Profile</a></li>
						
						<!--<li><a href="feedback.php">Feedback</a></li> -->
						<!--<a href="update.php">Update</a></li>-->
                        <!--<li><a href="deposit.php">Deposit</a></li> -->
                        <!--<li><a href="withdraw.php">Withdraw</a></li> -->
                        <li><a href="chkbalance.php">Check Balance</a></li>
                        <li><a href="history.php">History</a></li>
                        <li><a href="transfer.php">Transfer</a></li>
                        <!--<li><a href="close.php">Close A/C</a></li> -->
						<li style="padding-right:20px;"><a href="logout.php">Logout</a></li>
						<?php } ?>
					</ul>
				</nav>
			</header>