<?php
session_start();
error_reporting();
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
<title>welcome to admin</title>
<head>
	
   

<link rel="stylesheet" type="text/css" href="admin.css">
<style type="text/css">
	
	
</style>
</head>
<body>
	<div class="header">
		<div style="width: 100%;height: 20%;background-color:rgb(0, 191, 255);">
<div style="margin-top:%;margin-left: 10% ">
	<h3 style="font-family:monospace;"> <strong>Admin Dashboard</strong></h3>
</div>
<img style="margin-left:80%;position: relative;top:-12px;width: 100px;height: 100px;" src="image/admin.png">

<div style="margin-left: 87%;
margin-top: -5%;
position: absolute;">
<?php

if(isset($_SESSION["adminname"]))
{   
echo "<h1 style='margin:13px -28px;float:right; font-size:%; margin-right:px;position'><a style='text-decoration:none; color:black;border:px black solid; border-radius:px;background-color:;font-family: monospace;'>  Hey,".$_SESSION["adminname"]."</a></h1>";
echo "<a  style='margin-left:156%;
margin-top:59%;
position: absolute;
font-size:116%;
text-decoration: none;' href='logout.php'>Logout</a>";
}
?>
</div> 


<div >    
</div> 
</div>
		

	</div>

           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" action="adminindex.php" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" /> 
                     <input type="text" name="details"> 
                     <br />  
                     <input type="submit" name="insert" id="insert" value="insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table style="display:inline;" class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM grounddetails ORDER BY id DESC";
                $result = mysqli_query($con,$query) or die (mysqli_error($con)); 
                echo "<table  border='1' width='50%' >"; 
                while($row = mysqli_fetch_array($result))  
                {  
                     echo'  
                          <tr >  
                               <td ><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" /></td>

                        </tr>'; 
                         echo "<tr> <td>".$row["details"]." </tr></td>";
                          
                     
                } 
                 echo "</table>"; 
                ?> 
                </table> 
              
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  



</body>
</html>