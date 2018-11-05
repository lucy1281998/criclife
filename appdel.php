<?php
session_start();
include('dbconn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<?php
	if (isset($_GET['appid'])) {

		$appid=$_GET['appid'];
		mysqli_query($con, "DELETE FROM myapp WHERE appid='".$_GET['appid']."'");
  echo '<script>alert("Appointment remove")</script>';
  echo "<script>window.location.href='action.php'</script>";  

		
	}
	?>


</body>
</html>
