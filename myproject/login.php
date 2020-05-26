<?php include('connection.php') ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<h2 align="center">Login Here</h2>
<form method="post">
<table align="center" bgcolor="#CCFFCC">
<tr>
    <td>E-Mail</td>
    <td><input type="email" name="email" required placeholder="enter a valid email"></td>
</tr>

<tr>
    <td>Create password</td>
    <td><input type="password" name="npwd" required placeholder="enter your password"></td>
  </tr>
  
  <tr>
     <td align="center" colspan="7"><input type='submit' name='ok'value='sign up'><input type='reset'></td>
</tr>

</table><br><br>

<table align="center">
<td >if Not Registered...<a href="customer_details.php">Click Here</a></td>
</table>
</form><br><br>

<?php
 
 if(isset($_POST['ok'])){
	 
	 $email=$_POST['email'];
	 $password=$_POST['npwd'];
	 
	 $checkstr = "SELECT * FROM customer_details WHERE email='$email' AND password='$password'";
	 
	 $checkLineExec = mysqli_query($connect,$checkstr) or die(mysqli_error($connect));
	 
	 
	 if(mysqli_num_rows($checkLineExec)==1){
		 #valid user
		 
		 $userdata = mysqli_fetch_array($checkLineExec);
		 
		 $_SESSION['user'] = NULL;
		
		 $_SESSION['user']=$userdata;
	
		 header('location:home.php');
	 }
	 else{
		 
		 echo "<h3 style='color:red'>Invalid user .. please check your email and password.</h3>";
	 }
 }
 ?><br><br><br>
 
 
 <marquee> <h3 style="font-style:italic; font-color:yellow;"> THANK YOU</h2></marquee>
          


</body>
</html>