<?php
session_start();


	include('dbconn.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
if(isset($_POST["Contact"]))
{

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$qry="INSERT INTO contactus(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
if(mysqli_query($con,$qry))  
{  
echo "<script>alert('Your messages are important for us');</script>"; 
echo "<script>window.location.href='index.php'</script>"; 
}  

}
?>
</body>
</html>