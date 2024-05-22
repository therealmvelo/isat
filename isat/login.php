<?php 
session_start();
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['login']))
{
	$email=$_REQUEST['email'];
	$pass=$_REQUEST['pass'];
	$pass= sha1($pass);
	
	if(!empty($email) && !empty($pass))
	{
		$sql = "SELECT * FROM user where uemail='$email' && upass='$pass'";
		$result=mysqli_query($con, $sql);
		$row=mysqli_fetch_array($result);
		   if($row){
			   
				$_SESSION['uid']=$row['uid'];
				$_SESSION['uemail']=$email;
				header("location:index.php");
				
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Email or Password doesnot match!</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="pages/index.css">
</head>
<body>
	<?php include("include\header.php") ?>
	<div class="login-container">
		<h4>log in</h4>
		<p>access your account</p>
		<form action="">
			<input type="text" placeholder="email"><br><br>
			<input type="password" placeholder="password"><br><br>
			<button value="submit">login</button>
		</form>
		<p><small>dont have an account yet?<a href="signup.html"><u> register</u> </a></small></p>
	</div>
	<script src="login.js"></script>
</body>
</html>