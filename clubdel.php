<?php
session_start();
include('dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>user clubmember</title>
</head>
<body>
	<?php
 if(isset($_GET['id']))
{
	echo "string";
	$id=$_GET['id'];
		mysqli_query($con, "DELETE FROM clubreg WHERE id='".$_GET['id']."'");
  echo '<script>alert("User remove")</script>';
  echo "<script>window.location.href='adminindex.php'</script>";  

}
?>

</body>
</html>