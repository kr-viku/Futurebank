
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
		<title>History</title>
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
						<h2>History</h2>
						<p>Here You Can See All Your Transcations</p>
					</header>
                  <?php $query = "SELECT * FROM transaction WHERE id='".$_SESSION['user']['id']."'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);?>
        
          <?php
			$query = "SELECT * FROM balance WHERE id='".$_SESSION['user']['cust_id']."'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);
			
			if($user['acountno']==0){?>
                
                 <script type="text/javascript">alert("you are not aproved from admin. Please wait for sometime."); window.location.href='index.php';
			</script>
			<?php }
			else{ ?>   
             
            
                    
                  <h2 style="color:green;"> Your Account No. is <?php echo $_SESSION['user']['accountno']?> </h2>
                    
      <table cellpadding="5" border="1" cellspacing="0">
	  			<thead>
	  				<tr>
	  					<th>date time</th>
	  					<th>accountno</th>
	  					<th>target account</th>
	  					<th>transfered amount</th>
	  					<th>remaining balance</th>
	  					<!-- <th>password</th> -->
	  				</tr>
	  			</thead>
	  			<tbody>

	<?php 
	 		$query = "SELECT * FROM transaction WHERE accountno='".$_SESSION['user']['accountno']."' OR tar_account='".$_SESSION['user']['accountno']."'";
	 		$fire = mysqli_query($connect,$query) or die("can not fetch data from database ".mysqli_error($connect));
	 		if(mysqli_num_rows($fire)>0){
	  
	  		
	  			
	  				 while($user = mysqli_fetch_array($fire)) {?>
	  				<tr>
	  					<td><?php echo $user['date'] ?></td>
	  					<td><?php echo $user['accountno'] ?></td>
	  					<td><?php echo $user['tar_account'] ?></td>
	  					<td><?php echo $user['transferamt'] ?></td>
                       <?php     $query="SELECT * FROM balance WHERE id='".$_SESSION['user']['id']."'";
					
					$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
    // echo $_SESSION['user']['cust_id'];
	$row=mysqli_fetch_array($exec); ?>  
                        
    <?php 
		if($user['tar_account'] == $row['acountno']){ ?>
			<td style="color:green;"><?php echo $user['balance'] ?></td>
		<?php }else{ ?>
        	<td style="color:red;"><?php echo $user['rembalance'] ?></td>
      <?php  }
	 ?>
                  
	  					
	  				</tr>
	  				<?php } ?>
	  			</tbody>
	  		</table>

	  <?php } ?>
        <?php } ?>
	 
	  
     


			</div>
			</section>

		<!-- Footer -->
			<?php include('footer.php'); ?>

	</body>
</html>