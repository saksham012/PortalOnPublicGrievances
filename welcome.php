<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
	<div class="container">
		<div class="upper">Welcome To Public Greivances , <?php echo($_SESSION['user']);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="location.href='logout.php'">Logout</button></div>
		<div>
			<p style="width:20%; float:left; margin-left: 2.4%; color: #3978AD; font-family: arial black; font-size: 13px;">Enter Details</p>
			<p style="width:25%; float:right; margin-right: -1.4%; color: #3978AD; font-family: arial black; font-size: 13px;">Fields marked with <span class="redText">*</span> are mandatory</p>
		</div>
		<hr style="width: 95%;"><br>
		<br><br><br>
		<div>
			<form method="post" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>">
				<table align="center" cellpadding="10px" style="font-size:15px; font-family: arial black;">
					
					<tr>
						<td><button id="submit" onclick="show()" style=" margin-left:120%; width:100px; height:40px;" value="Viewstatus"><center> View Status </center></button></td>
						
					</tr>
					<tr>
						<td>Type of Greivance<span class="redText">*</span></td>
						<td><select name="type" style="width:300px;">
							<option value="public">Public</option>
							<option value="pension">Pension</option>
						</select></td>
					</tr>
					<tr>
						<td>Company Name<span class="redText">*</span></td>
						<td><input type="text" name="company" placeholder="Enter the company name " style="width:300px; height:30px;" required /></td>
					</tr>
					<tr>
						<td>Enter your Greivances<span class="redText">*</span></td>
						<td><textarea rows="10" cols="40" name="complaint"></textarea required></td>
					</tr>
					<tr>
						<td><input type="submit" value="SUBMIT" id="submit"/></td>
						<td><input type="reset" value="RESET" id="submit" /></td>
					</tr>
				</table
			</form>
		</div>
		<div id="displaystatus" style="display:none;">
			<table cellpadding="10px" border="1">
				<tr>
					<th>Reference number</th>
					<th>Customer Name</th>
					<th>Type</th>
					<th>Company</th>
					<th>Complaint</th>
				</tr>
			<?php 
				$conn = mysqli_connect("localhost","root","","webportal");
				if($conn)
				{
					$name = $_SESSION['user'];
					$query = "select * from complaints where Name='".$name."'";
					$result = mysqli_query($conn,$query);
					if($result)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>
									<td>".$row['reference']."</td>
									<td>".$row['Name']."</td>
									<td>".$row['type']."</td>
									<td>".$row['company']."</td>
									<td>".$row['complaint']."</td>
								</tr>";

						}
						echo"</table>";
					}
				}
			?>
		</div>
	</div>	
</body>
<script type="text/javascript">
	function show()
	{
		document.getElementById('displaystatus').style.display="block";
	}
</script>
<?php 

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$company = $_POST["company"];
	$complaint = $_POST["complaint"];
	$count = $_SESSION['count'];
	$reference = "LPG".$count;
	$type = $_POST['type'];
	$count++;
	$_SESSION['count'] = $count;
	$name = $_SESSION['user'];
	$conn = mysqli_connect("localhost","root","","webportal");
	if($conn)
	{
		$query = "INSERT INTO complaints VALUES('$reference','$name','$type','$company','$complaint')";
		echo ($query);
		$result = mysqli_query($conn,$query);
		if($result)
		{
			?>
			<script>
			alert("Registerd Successfully");
			location.href="welcome.php";
			</script>
			<?php
		}
	}
}
?>
</html>