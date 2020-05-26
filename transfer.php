<?php error_reporting(0); ?>

<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Money Transfer</title>
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
						<h2>TransFer Money</h2>
						<p>No Need to visit Bank... You can Simply Transfer your money with Us</p>
					</header>
                    
                    <?php
			$query = "SELECT * FROM balance WHERE id='".$_SESSION['user']['id']."'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);
			
			if($user['acountno']==0){?>
                
                 <script type="text/javascript">alert("you are not aproved from admin. Please wait for sometime."); window.location.href='index.php';
			</script>
			<?php }
			else{ ?>

	<form method="post">
			
            
            
			<table cellpadding="5" cellspacing="0" border="1">
				<tr>
					<td>account Number</td>
					<td><input type="number" name="account" placeholder="Account Number" value="<?php echo $_SESSION['user']['accountno']?>" readonly	></td>
				</tr>
				<tr>
					<td>target account Number</td>
					<td><input type="number" name="taraccount" placeholder="Account Number"></td>
				</tr>
				<tr>
					<td>amount</td>
					<td><input type="number" name="amount" placeholder="amount"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit"></td>
					<td><input type="reset" name="reset" value="reset"></td>
				</tr>
				
			</table>
		</form>
		<?php 
			if(isset($_POST['submit'])){
				$taraccount = $_POST['taraccount'];
				$query = "SELECT * FROM create_acc WHERE accountno='$taraccount'";
				$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
				if(mysqli_num_rows($fire)==1){
			$currentdatetime = date('d-m-Y H:i:s');
			$account = $_POST['account'];
			
			
			
			$amount = $_POST['amount'];
			$query = "SELECT * FROM balance WHERE acountno='$account'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);
			if($fire){
				$user['amount'] -= $amount;
				$remamt = $user['amount'];
				echo "user account debited by rupees ".$_POST['amount']." Remaining amount is ".$user['amount']." rupees<br>";
				$amount4 = $user['amount'];
				$query4 = "UPDATE balance SET amount='$amount4' WHERE acountno='$account'";
				$fire4 = mysqli_query($connect,$query4) or die(mysqli_error($connect));
				//echo $account;
				//echo $amount4;
			} 
			$query1 = "SELECT * FROM balance WHERE acountno='$taraccount'";
			$fire1 = mysqli_query($connect,$query1) or die(mysqli_error($connect));
			$user1 = mysqli_fetch_array($fire1);
			if($fire1) {
				$amount +=  $user1['amount'];
				echo "Remaining amount of target account is ".$amount." rupees<br>";	
				$query5 = "UPDATE balance SET amount='$amount' WHERE acountno='$taraccount'";
				$fire5 = mysqli_query($connect,$query5) or die(mysqli_error($connect));
				//echo $taraccount;
				//echo $amount;
			}
			if($fire && $fire1){
				$amount2 = $_POST['amount'];
				$query2 = "INSERT INTO transfer(account,tar_account,amount,date) VALUES('$account','$taraccount','$amount2','$currentdatetime')";
				$query3 = "INSERT INTO transaction(accountno,tar_account,transferamt,rembalance,balance,date) VALUES('$account','$taraccount','$amount2','$remamt','$amount','$currentdatetime')";
				
				$fire3 = mysqli_query($connect,$query3) or die(mysqli_error($connect));
				//if($fire3) echo "<br>transaction completed";
				$fire2 = mysqli_query($connect,$query2) or die(mysqli_error($connect));
				if($fire2){ ?>
                 <script> alert('Transfer Successfully completed !!!!');
				 </script>
                
				
				<?php }
                 header('Location:redirect.php'); 
				
			}
						  
			}
            
           
			
			 else { ?>
            
            <script> alert('This Account Does not Exists .... Please Enter a Valid Account Number !!!!');
				 </script>
				
            
			<?php	 
			}
			}
				 
			}
			
		
		 ?>
      

				</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>