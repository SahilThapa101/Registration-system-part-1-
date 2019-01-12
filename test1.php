<!--adding something -->




<?php


	$con = mysqli_connect("localhost","root","","test2");

	if(isset($_POST['submit'])) //check if users hits the sign up button
	{
		if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email'])) 
		{
			if(isset($_POST['Password']) && !empty($_POST['Password']))
			{

				$name = $_POST['name'];
				$email = $_POST['email'];
				$Password = $_POST['Password'];

				$sql = "INSERT INTO users (name, email, Password) values ('$name','$email','$Password')";

				mysqli_query($con,$sql);



			}
		}
	}

?>









<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>

	<style type="text/css">
		
		#ab
		{
			padding-left: 19px;
			border-radius: 5px;
			border: 2px solid grey;
		}

		#xy
		{
			border-radius: 5px;
			border: 2px solid grey;
		}


		#zy
		{
			border-radius: 5px;
			border: 2px solid grey;
		}

		#cx
		{
			border-radius: 5px;
		}


	</style>


</head>
<body bgcolor="ghostwhite">


	<center />

	<br> <br> <br>

	<form method="POST" action="test1.php">
		

		Name<input type="text" name="name" id="xy"> <br> <br>
		Email<input type="email" name="email" id="zy"> <br> <br>
		Password<input type="Password" name="Password" id="ab"> <br> <br>

		<input type="submit" name="submit" value="Sign Up" id="cx">



	</form>



</body>
</html>
