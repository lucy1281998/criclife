<?php
session_start();
error_reporting();
include('dbconn.php');

include('dbconn.php');

if(isset($_POST["insert"]))
{

    $details = $_POST['details'];

	$image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$qry="INSERT INTO grounddetails(image,details) VALUES('$image','$details')";
	if(mysqli_query($con,$qry))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>'; 
            echo "<script>window.location.href='adminindex.php'</script>"; 
      }  

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ground booking</title>
	<link rel="stylesheet" type="text/css" href="bookingstyle.css">
	<style>
	.btnlog
	{

	text-align: center;
	font-size: 16px;
	margin: 4px 2px;
	opacity: 0.7;
	transition: 0.3s;
	display: inline-block;
	border-radius: 5px ;
	}
	.btnlog:hover
	{
	color:black;
	}
	body
	{
	}
	.submenu p
	{
		font-family: monospace;
		font-size: 14px;
	}

</style>
</head>
<body>
	<div class="header">
		<div id="title">
			<a style="text-decoration:none;" href="index.php"><h4 style="color:#155fe2">cric</h4><h4 style="color: black;margin-left: 152px;margin-top: -47px;">life</h4></a>

			</div>
			<div style="margin-left: 87%;
			margin-top: -5%;
			position: absolute;">
			 <?php

          if(isset($_SESSION["emailid"]))
           {   
              echo "<h1 style='float:right; font-size:40%;'><a style='text-decoration:none; color:black; 2px;font-family:monospace;font-size:13px;'> Hi,".$_SESSION["emailid"]."</a></h1>";
              echo "<a  style='margin-left: 66%;
              margin-top: 13%;
              position: absolute;
              font-size: 50%;
              text-decoration: none;' href='logout.php'><button class='btnlog' style='width:100px;position:relative;right:50px;height:30px;background-color: #f4511e;border:none;top:-6px;cursor: pointer;color:white;'>Logout</button></a>";
            }
     ?>
			</div> 
		</div>

<div class="body">	
	<div class="menu">
		<div class="submenu">
			<h2 style="color: white">Amenities</h2>
			<p>Washroom</p>
			<p>Changing Room</p>
			<p>Boundary Netting</p>
			<p>Pavilion</p>
			<p>Umpire</p>
			<h2>Timing</h2>
			<p>Full Day</p>
		</div>

	</div>

	<div class="groundcatalog">
<?php  
$query = "SELECT * FROM grounddetails ORDER BY id DESC";
$result = mysqli_query($con,$query) or die (mysqli_error($con)); 
echo "<table id='table' display='inline-flex;' margin-left='100px'  border='0' width='300px';padding-top='20px'; >"; 
echo "<th style='color:white;font-size:20px;font-family:monospace;padding-top:10px;'>GROUND IMAGE</th>";
echo "<th style='color:white;font-size:20px;font-family:monospace;'>Price</th>";
echo "<th style='color:white;font-size:20px;font-family:monospace;'>location</th>";

$query = "SELECT * FROM grounddetails ORDER BY id DESC";

while($row = mysqli_fetch_array($result))  
{ 


echo"<tr border='0px solid black' display='inline-flex'>";
echo'<td style="border 0px solid gray;" ><img id="groundpic" style="margin-left:40px;box-sizing: border-box;margin-top:40px;border:5px solid lightgray;" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="400" class="img-thumnail" /></td>';

echo "<td width='1000px;' style='padding:40px;width:200px;color:white; font-size:20px;font-family:'monospace';color:white;>".$row["price"]."</td>";



echo "<td style='border 0px solid gray;padding:40px;font-family:monospace;font-size:20px;color:white'>".$row["details"]."</td>";

 echo '<td id="styletable2"><b><font color="#663300"><a style="text-decoration:none;font-size:23px;font-family: monospace;color:red";" href="bookingconfirm.php?id=' . $row['id'] . '"><img style="border-radius:50%;" src="image/Book-Now-button-orange-0202-lg.png"></a></font></b></td>';

   
echo"</tr>";
echo"</div>";
}
echo "</table>"; 

?> 


</div> 
</div>
</div>
	</div>
  


</body>
</html>