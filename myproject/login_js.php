

<?php include('connection.php') ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>

function validateMe(){
	var name= document.getElementById('name').value;
	var email = document.getElementById('email').value;
	
	if(name == ""){
		  alert('Enter your name....');
		  return false;
	}
	
	if(email ==""){
		  alert('Enter Your Email....');
		  return false;
	}
}
</script>
</head>

<body>


<h3 align="center" style="animation:running"> Sign Up Here </h3>
<form onSubmit="return validateMe()">

<table align="center" style="background-color:#00FFFF" cellspacing="8" >
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
        <td><input type="date" name="birthdate" required placeholder="enter your birthdate here"></td>
        
         <td>Age</td>
       <td> <input type="number" name="age" min="14" max="59"></td>
</tr>
<tr>
    <td>Create password</td>
    <td><input type="password" name="npwd" required placeholder="enter your password"></td>
    
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
    <td><input type="number" name="mobno" required placeholder="enter your mobile number"></td>

    <td>Phone No.</td>
    <td><input type="number" name="phno" required placeholder="enter your phone number"></td>
</tr>

<tr>
     <td align="center" colspan="7"><input type='submit' name='ok'value='sign up'><input type='reset'></td>
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
	$home_no=$_POST['home'];
	$street=$_POST['street'];
	$city=$_POST['city'];			
	$mob_no=$_POST['mobno'];
	$ph_no=$_POST['phno'];

	$query_string ="INSERT INTO customer_details VALUES('0','$first_name','$last_name','$email','$birthdate','$age','$password','$home_no','$street','$city','$ph_no','$mob_no')";
		
	$exec=mysqli_query($connect,$query_string) or die(mysqli_error($connect));
	
	if($exec==1){
		echo "CONGRATS !!! you have signed up with us<br>";
	}
} 

?>

</body>
</html>