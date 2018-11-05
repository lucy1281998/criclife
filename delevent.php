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
	if (isset($_GET['id'])) {

		$id=$_GET['id'];
		mysqli_query($con, "DELETE FROM createevents WHERE id='".$_GET['id']."'");
  echo '<script>alert("Event deleted")</script>';
  echo "<script>window.location.href='adminindex.php'</script>";  

		
	}
	?>


</body>
</html>
