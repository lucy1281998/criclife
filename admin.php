<?php
include('dbconn.php');
session_start();
if(isset($_POST['sub']))
{
 $adminname=$_POST['adminname'];
 $pass=$_POST['pass'];

 if($adminname!='' && $pass!='')
 {
   $sql="SELECT * FROM admin WHERE adminname='$adminname' and pass='$pass'";
    $query = mysqli_query($con,$sql) or die (mysqli_error());
   $arr=mysqli_fetch_array($query);
   if(($arr['adminname']==$adminname) and($arr['pass']==$pass))
   {
   	
    $_SESSION['adminname']=$adminname;
 
  header('location:adminindex.php');
   echo "<h1 style='margin:-20px 0px;float:right; font-size:20px; margin-right:4px;'><a href = 'adminindex.php' style='text-decoration:none; color:;border:1px black solid; border-radius: 2px;'> Hi ".$_SESSION["adminname"]."</a></h1>";
   
    
   }
}
  
    if(($arr['adminname']==$adminname) and($arr['pass']==$pass))
   {
   	
    $_SESSION['adminname']=$adminname;
 
  header('location:adminindex.php');
   echo "<h1 style='margin:-200px 0px;float:right; font-size:20px; margin-right:4px;'><a href = 'adminindex.php' style='text-decoration:none; color:black;border:1px black solid; border-radius: 2px;'> Hi ".$_SESSION["adminname"]."</a></h1>";
   
    
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 
   

 if(isset($_SESSION['adminname'])){
$smsg = "User already logged in";
echo $smsg;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="adminname" placeholder="admin name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" value="sub" name="sub" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						
						
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>