<!DOCTYPE html>
<html>
<head>
	<title>FACEBOOK</title>
</head>
	<link rel="stylesheet" type="text/css" href="css/fbstyle.css">
<body>

	<form action="facebook.php" method="POST">

	<div class="main">

		<table border="0" align="left">
			<tr>
				<td>
					<p class="txtfb"> facebook </p> 
				</td>
			</tr>
			
		</table>

		<table border="0" align="right" cellspacing="10px;">
			<tr>
				<td>
					<b class="txt1">Email or phone</b> <br>
					<input type="Text" class="in" 	   name="e"><br><br>	
				</td>


				<td>
					<b class="txt1">Password</b> <br>
					<input type="Password"   name="p">
					<p class="txtforgot">Forgot account?</p>
				</td>


				<td> <br>
					<input type="Submit" name="login" value="Log In" class="login"> <br><br>
				</td>
			</tr>

		</table>

	</div>

	<div class="txtconnect">
			<b style="font-weight: bold; color: black;">
			Connect with friends and the<br>world around you on Facebook.
			<br></b>
			<br>
				
				<img class="pic" src="image/news.jpg" > <font size="3"><b> See photos and updates </b>from friends in News Feed.</font>
			<br>

			<br>
				<img class="pic" src="image/computer.jpg"><font size="3"><b> Share what's new </b> in your life on your Timeline.</font>
			<br>

			<br>
				<img class="pic" src="image/share.jpg"> <font size="3"><b>Find more </b> of what you're looking for with Facebook Search.</font>

	</div>
	<form action="facebook.php" method="POST" >

	<div class="txtsignup">
			<strong>Sign Up</strong> <br>It's quick and easy.<br><br>

			<input class="inputname" 
			type="text" placeholder="First name" name="fname" >


			<input class="inputname" 
			type="text" placeholder="Last name"  name="lname"> <br>

			<input class="inputnumber" 
			 type="text"  placeholder="Mobile number or email" name="enum"> <br>

			 <input class="inputpass" 
			 type="text"  placeholder="New password" name="password"> <br>

			 	Birthday <br>

			 	<input type="date" id="namebox" name="birthday" />
		

		 <img class="qm" src="image/qm.jpg">
		
			<br><br>

		Gender<br>

			<input type="Radio" name="gender" value="female">Female
			<input type="Radio" name="gender" value="male">Male
			<input type="Radio" name="gender" value="custom">Custom
			<img class="qm" src="image/qm.jpg">


			<p class="txtby">By clicking Sign Up, you agree to our <b style="color: blue" > Terms, Data Policy </b> and <br><b style="color: blue" > Cookies Policy.</b> You may receive SMS Notifications from us<br>and can opt out any time.</p>
			<br>

			<input class="signup" type="submit" name="sub" value="Sign Up" >
			<br>
			<div style="width: 360px">


<?php

		$servername="localhost";
		$username="root";
		$password="";
		$databasename="dbFacebook";


		$connect= mysqli_connect($servername, $username, $password, $databasename);
?>


<?php
		if (isset($_POST ['sub'])){
			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$email = $_POST['enum'];
			$pass = $_POST['password'];
			$birth = $_POST['birthday'];
			$sex = $_POST['gender'];

			

			$insert = "INSERT INTO tblfacebook (fname,lname,enum,password,birthday,gender ) VALUES ('$firstname','$lastname','$email', '$pass','$birth','$sex')";

			$query = mysqli_query($connect,$insert);
			if ($query==True ){
					echo "<b>Record added </b>";
					header("location: facebook.php");
				}else{
					echo "<b>Record not added </b>";
				}
			}
			
		?>


<?php
//login


		$servername="localhost";
		$username="root";
		$password="";
		$databasename="dbFacebook";


		$connect= mysqli_connect($servername, $username, $password, $databasename);

		if (isset($_POST ['login'])){

		$em = $_POST['e'];
		$pa = $_POST['p'];


			$query= "SELECT * FROM tblfacebook WHERE enum = '$em' AND password = '$pa'";
			$result = mysqli_query($connect, $query);
			$count=   mysqli_num_rows($result);

			if ($count>0){
				header("location: login.php");
			}else{
				echo "<h3><b>Username/Password is Incorrect</b></h3>";
			}
		}

?>


			</div>
	</form>
</form>
	

</body>
</html>
