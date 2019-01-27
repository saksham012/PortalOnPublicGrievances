<?php
   session_start();
   if(!isset($_SESSION['count']))
   {
	 $_SESSION['count'] = 1;  
   }
   $username=$_POST['uname'];
   $password=$_POST['pass'];
   $conn=mysqli_connect('localhost','root');
   mysqli_select_db($conn,'webportal');
   $q="select * from customer where Email='$username' && MobileNumber='$password' ";
   $result=mysqli_query($conn,$q);
   
   if($result)
   {
	   if(mysqli_num_rows($result) >0)
	   {
		   $_SESSION["user"]= $username;
		   header("location:welcome.php");
	   }
	   else{
		   ?>
			<script>
				alert("Not valid credentials");
				location.href="main.html";
			</script>
		   <?php
	   }
   }
   $num=mysqli_num_rows($result);
  
?>
