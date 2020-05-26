   <?php $query = "SELECT * FROM transaction WHERE id='".$_SESSION['user']['id']."'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);?>
        
        <?php     
            if($user["rembalance=' '"]){ ?>
           
		      <script type="text/javascript">alert("you are not aproved from admin. Please wait for sometime.");
			window.location.href='index.php';
			</script>
            <?php } else{ ?>
			hbhj
              <?php      
                 if($_SESSION['user']['accountno'] == 0){
					 ?> <script type="text/javascript">alert("you are not aproved from admin. Please wait for sometime.");
			window.location.href='index.php';?> <?php } else { ?>
			
			
		
		pro..
		
		  <?php
			$query = "SELECT * FROM balance WHERE id='".$_SESSION['user']['cust_id']."'";
			$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
			$user = mysqli_fetch_array($fire);
			
			if($user['acountno']==0){?>
                
                 <script type="text/javascript">alert("you are not aproved from admin. Please wait for sometime."); window.location.href='index.php';
			</script>
			<?php }
			else{ ?>