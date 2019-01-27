
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<style>
	.kitt
	{
		width: 25%;
		height: 21.5%;
		position: absolute;
		top: 0px;
		right: 2px;
		
	}
	.para1{
		width: 40%;
		border: 0px solid lightblue;
		margin-left: 5%;
		font-family: arial;
		font-size: 15px;
		font-weight: bold;
	}
	.heading1{
			width: 45%;
			<!--border: 2px solid lightblue;-->
			height: 15px;
			padding-top: 0px;
			padding-bottom: 30px;
			color: red;
			font-family: arial;
			margin-left: 5%;
	}
	.container{
		width:90%;
		margin-left: 5%;
		border: 1px solid blue;
		height: 850px;
		border-radius: 10px;
	}
	.upper{
		height: 40px;
		background-color: #3978AD;
		color: White;
		text-align: center;
		font-size: 18px;
		font-family: arial;
		padding-top: 13px;
		border-radius: 8px;
	}
	.redText{ color: red;}
	
	.flag{
		width: 35%;
		font-family: arial black;
		//border: 1px solid blue;
		text-align: right;
		font-size: 15px;
		margin-left: 15px;
		margin-right: 15px;
		float: left;
	}
	
	.txtClass{
		border: 1px solid #D2D1EE;
		height: 35px;
		width: 51%;	
		text-align: left;
		font-size:14px;;	
	}
	select{
		border: 1px solid #D2D1EE;
		height: 35px;
		width: 51%;	
		text-align: left;
		font-size:14px;;
	}
	#submit
	{
		background-color: #3978AD;
		color: white;
		height: 30px;
		margin-left: 38%;;
	}
	.lo{
		color:red;
		position: absolute;
		left:200px;
	}
</style>

<body>
	<div class="kit">
		<p class="para1">Department Of Administrative Reforms & Public Grievances</p>
		<h1 class="heading1">Web Portal for Public Grievance</h1>
	</div>
	<img src="gree.jpg" alt="grievances" class="kitt">
	<h1 style=align="center"; >Registered successfully</h1>
<h3><a href="main.html" style="color:yellow; float:left;padding-left:20px;"> Home</a>	</h3>
</body>
</html>
<?php
	$conn = mysqli_connect("localhost","root","");
	if (!$conn)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	//echo "Registered successfully";
	
	$name=$_POST['Name'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$pincode=$_POST['pcode'];
	$phone=$_POST['phnno'];
	$mobile=$_POST['mobno'];
	$email=$_POST['email'];
	$ex=$_POST['exMan'];
	mysqli_select_db($conn,'webportal');
	$q="insert into customer (Name,Gender,Address,Country,State,Pincode,PhoneNumber,MobileNumber,Email,Ex) values ('$name','$gender','$address','$country','$state','$pincode','$phone','$mobile','$email','$ex')";
	mysqli_query($conn,$q);
	mysqli_close($conn);
?>