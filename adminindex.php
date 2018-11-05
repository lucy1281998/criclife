<?php
session_start();
error_reporting();
include('dbconn.php');
if(isset($_POST["insert"]))
{

 $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false)
    {
        

$details = $_POST['details'];
$price = $_POST['price'];

$image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$qry="INSERT INTO grounddetails(image,price,details) VALUES('$image','$price','$details')";
}
if(mysqli_query($con,$qry))  
{  
echo '<script>alert("Ground Details Inserted into Database")</script>'; 
echo "<script>window.location.href='adminindex.php'</script>"; 
} 
 else{
                echo "Error!".$qry."<br>". mysqli_error($con);
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
input[type=file]
{
display: inline-block; padding: 10px 10px;width: 220px; font-size:16px;cursor: pointer;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #008CBA;border: none;border-radius: 10px;box-shadow: 0 4px #999;"  "


}
#styletable
{
     padding-left:30px;
    padding-top: 20px;
    padding-right:20px;
    color: white;
    font-size:15px;
    font-family: monospace;
border:1px solid gray;
}
}
#styletable2
{
    padding-left:60px;
    padding-top:50px;
    padding-right:40px;
    color: white;
    font-size:12px;
    font-family: monospace;
    width: 900px;
    
}
table tbody th
{
    color: white;
    font-family: monospace;
    width: 200px;
    height:40px;
}
input[type=text],input[type=number],input[type=date],input[type=value]
{
  width:150px;
  height: 25px;
  display: table;
  vertical-align: inherit;
  margin-left:10px;
  padding-left: 100px;
  -webkit-appearance: textfield;
  background-color: white;
  cursor: text;
  padding: 5px;
  border-width: 2px;
  border-style: inset;
  border-color: initial;
  border-image: initial;
  border:1px solid gray;
  border-radius: 3px;


}

#styletable1
{
        
    color: white;
    font-size:15px;
    font-family: monospace;
    
}
#styletable2
{
        
    color: white;
    font-size:14px;
    font-family: monospace;
    border:1px solid gray;
    padding-left: 10px;
}
#addevent{
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius:px;
          cursor: pointer;
          width:100%;
          margin-left:0px; 
}


</style>
</head>
<body>
<div class="header">
<div style="width: 100%;height: 20%;background-color:rgb(0, 191, 255);">
<div style="top:30px;margin-left:7% ;position: relative;font-size: 24px;">
<h3 style="font-family:monospace;"> <strong>Admin Dashboard</strong></h3>
</div>
<img style="margin-left:84%;position: relative;top:-12px;width: 100px;height: 100px;" src="image/admin.png">

<div style="margin-left: 87%;
margin-top: -5%;
position: absolute;">
<?php

if(isset($_SESSION["adminname"]))
{   
echo "<h1 style='margin:10px -165px;float:right; font-size:%; margin-right:px;position'><a style='text-decoration:none; color:black;border:px black solid; border-radius:px;background-color:;font-family: monospace;font-size:16px;'>  Hey,".$_SESSION["adminname"]."</a></h1>";
 echo "<a  style='margin-left: 66%;
              margin-top: 17%;
              position: absolute;
              font-size: 50%;
              text-decoration: none;' href='logout.php'><button class='btnlog' style='width:100px;position:relative;right:50px;height:30px;background-color: #f4511e;border:none;top:-28px;left:70px;bottom:20px;cursor: pointer;color:white;'>Logout</button></a>";
}
?>
</div> 


<div >    
</div> 
</div>


</div>

<div class="container" style="width:246px;background-color:rgb(24,24,24); height: 700px;">  
<h4 style="font-size:15px;color: white;text-align: center;padding-top: 10px;font-family: sans-serif;">MENU</h4>  <br>

<form method="post" action="adminindex.php" enctype="multipart/form-data">  
<table>
  <tr>
<td><input type="file" name="image" id="image" required="required" /></td>
</tr>
  <tr><td><input style="width: 89%;padding:10px 10px 10px 10px;border-radius:5px;color: black;font-size:15px;" type="text " name="price" required="required" onkeyup="keynum(this)" placeholder="Enter the price "></td></tr>
<tr>
<td> <textarea style="border-radius:5px;color: black;font-size:15px;" name="details" placeholder="Enter the Ground Description" required="required" cols="27.7" rows="6"></textarea> </td>
</tr>

<tr>
<td><input style="display: inline-block; padding: 10px 10px;width: 240px; font-size: 24px;cursor: pointer;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #008CBA;border: none;border-radius: 10px;box-shadow: 0 4px #999;"  type="submit" name="insert" id="insert" value="ADD" class="btn btn-info" /> </td>
 
</tr>

</table>  

</form>  
<br />  
<br />  
</div>  
<div style="margin-left:18.2%;margin-top: -51.9%;background: linear-gradient(to top right, #33cccc 9%, #006699 100%);">

<?php  
$query = "SELECT * FROM grounddetails ORDER BY id DESC";
$result = mysqli_query($con,$query) or die (mysqli_error($con));

echo "<table display='inline-flex' margin-left='1000px'  border='0px solid black' width='300px' >"; 
echo "<th  id='styletable1'>GROUND IMAGE</th>";
echo "<th  id='styletable1'>Price</th>";
echo "<th  id='styletable1'>location</th>";
echo "<th  id='styletable1'>Action</th>";

echo "<th id='styletable1' >Action</th>";
$query = "SELECT * FROM grounddetails ORDER BY id DESC";

while($row = mysqli_fetch_array($result))  
{ 
echo "<div display='inline-flex' background-color='red'>"; 
echo"<tr id='styletable1' border='0px solid black' display='inline-flex'>";
echo'<td id="styletable1" style="border 1px solid red;" ><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="300" class="img-thumnail" /></td>';

echo "<td id='styletable1' style='padding:100px;' >".$row["price"]."</td>";


echo "<td id='styletable1' style='border 1px solid black;padding:100px;'>".$row["details"]."</td>";
echo '<td><b><font color="#663300"><a style="text-decoration:none;font-size:25px;font-family: monospace;color:white";" href="delete.php?id='.$row['id'] . '">Delete</a></font></b></td>';
echo '<td><b><font color="#663300" ><a style="text-decoration:none;padding:70px;padding-top:70px;font-size:25px;font-family: monospace;color:white" href="update.php?id='.$row['id'] . '">Edit</a></font></b></td>';

echo"</tr>";

echo"</div>";

  
} 
echo "</table>"; 


?> 
  <script>
          function key(input) 
                                      {
                                      var regex = /[^a-z]/gi;
                                      input.value = input.value.replace(regex, "");
                                      }
                                      function keynum(inputn)
                                      {
                                      var regex = /[^0-9]/g;
                                      inputn.value=inputn.value.replace(regex, "");
                                      }
</script>



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
<div style="background-color:rgb(24,24,24)"> 
<h1 style="font-size:30px;font-family: monospace;color: white;text-align: center;background-color: black;">Manage User</h1> 
<?php
$query = "SELECT * FROM user_signup ORDER BY id DESC";
$result = mysqli_query($con,$query) or die (mysqli_error($con)); 


    if(mysqli_num_rows($result) > 0){
        echo "<table width='100%' border=none style='0:px;'>";
            echo "<tr style='width:200px;'>";
                echo "<th id='styletable'>id</th>";
                echo "<th id='styletable' >First Name</th>";
                echo "<th id='styletable' >last Name</th>";
                echo "<th id='styletable' >Date of Birth</th>";
                echo "<th id='styletable' >Country </th>";
                echo "<th id='styletable' >Phone No</th>";
                echo "<th id='styletable' >Address</th>";
                echo "<th id='styletable' >Pin code</th>";
                echo "<th id='styletable' >Email Id</th>";
                
                   echo "<th id='styletable'>Delete</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td id='styletable'>" . $row['id'] . "</td>";
                echo "<td id='styletable'>" . $row['fname'] . "</td>";
                echo "<td id='styletable'>" . $row['lname'] . "</td>";
                echo "<td id='styletable'>" . $row['dob'] . "</td>";
                echo "<td id='styletable'>" . $row['cname'] . "</td>";
                echo "<td id='styletable'>" . $row['phoneno'] . "</td>";
                echo "<td id='styletable'>" . $row['address'] . "</td>";
                echo "<td id='styletable'>" . $row['pincode'] . "</td>";
                echo "<td id='styletable'>" . $row['emailid'] . "</td>";
                

                echo '<td id="styletable"><b><font color="#663300"><a style="text-decoration:none;font-size:25px;font-family: monospace;color:red";" href="user-dele.php?id=' . $row['id'] . '"><img src="image/delete1.png"></a></font></b></td>';

                echo "</tr>";
        }
        echo "</table>";
        // Free result set
    }
        ?>
        <h1 style="font-size:30px;font-family: monospace;color: white;text-align: center; background-color: black;">Club Manager</h1> 


        <?php
$query = "SELECT * FROM clubreg ORDER BY id DESC";
$result = mysqli_query($con,$query) or die (mysqli_error($con)); 


    if(mysqli_num_rows($result) > 0){
        echo "<table width='100%'; border=none style='px;'>";
            echo "<tr id='styletable2 style='width:200px;'>";
                echo "<th id='styletable2'>id</th>";
                echo "<th id='styletable2' >Player Name</th>";
                echo "<th id='styletable2' >State</th>";
                echo "<th id='styletable2' >Father Name</th>";
                echo "<th id='styletable2' >District</th>";
                echo "<th id='styletable2' >Mother Name</th>";
                echo "<th id='styletable2' >Date of Birth</th>";
                echo "<th id='styletable2' >Skill</th>";
                echo "<th id='styletable2' >Date of Application</th>";
                echo "<th id='styletable2' >Gender</th>";
                echo "<th id='styletable2' >Mobile</th>";
                echo "<th id='styletable2' >Email Id</th>";
                    
                echo "<th id='styletable2' >Adhar card</th>";
                echo "<th id='styletable2' >Height</th>";
                echo "<th id='styletable2' >Weight</th>";
                echo "<th id='styletable2'>Action</th>";
                 echo "<th id='styletable2'>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr id='styletable2' >";
                echo "<td id='styletable2'>" . $row['id'] . "</td>";
                echo "<td id='styletable2'>" . $row['Name'] . "</td>";
                echo "<td id='styletable2'>" . $row['State'] . "</td>";
                echo "<td id='styletable2'>" . $row['Father'] . "</td>";
                echo "<td id='styletable2'>" . $row['District'] . "</td>";
                echo "<td id='styletable2'>" . $row['mother'] . "</td>";
                echo "<td id='styletable2'>" . $row['Birth'] . "</td>";
                echo "<td id='styletable2'>" . $row['skill'] . "</td>";
                echo "<td id='styletable2'>" . $row['Application'] . "</td>";
                echo "<td id='styletable2'>" . $row['gen'] . "</td>";
                echo "<td id='styletable2'>" . $row['mobile'] . "</td>";
                echo "<td id='styletable2'>" . $row['email'] . "</td>";
                echo "<td id='styletable2'>" . $row['Adhar'] . "</td>";
                echo "<td id='styletable2'>" . $row['height'] . "inch</td>";
                echo "<td id='styletable2'>" . $row['weight'] . "KG</td>";
                echo '<td id="styletable2"><b><font color="#663300"><a style="text-decoration:none;font-size:23px;font-family: monospace;color:red";" href="clubdel.php?id=' . $row['id'] . '"><img src="image/delete1.png"></a></font></b></td>';
                echo '<td id="styletable2"><b><font color="#663300"><a style="text-decoration:none;font-size:23px;font-family: monospace;color:red";" href="clubeupdate.php?id=' . $row['id'] . '"><img src="image/edit-interface-sign.png"></a></font></b></td>';

                echo "</tr>";
        }
        echo "</table>";
        // Free result set
    }
        ?>

        <h1 style="font-size:30px;font-family: monospace;color: white;text-align: center;background-color: black;">User contact </h1>

        <?php
$query = "SELECT * FROM contactus ORDER BY id DESC";
$result = mysqli_query($con,$query) or die (mysqli_error($con)); 


    if(mysqli_num_rows($result) > 0){
        echo "<table width='100%'; border=none style='px;'>";
            echo "<tr id='styletable2 style='width:200px;'>";
            
                echo "<th id='styletable2' >Name</th>";
               
                echo "<th id='styletable2' >Email Id</th>";
                echo "<th id='styletable2' >Phone</th>";
                echo "<th id='styletable2' >Message</th>";
                echo "<th id='styletable2' >Contact Id</th>";
                 echo "<th id='styletable2'>Action</th>";
                  
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr id='styletable2' >";
               
                echo "<td id='styletable2'>" . $row['name'] . "</td>";
                echo "<td id='styletable2'>" . $row['email'] . "</td>";
                echo "<td id='styletable2'>" . $row['phone'] . "</td>";
                echo "<td id='styletable2'>" . $row['message'] . "</td>";
                echo "<td id='styletable2'>" . $row['id'] . "</td>";
                echo '<td id="styletable2"><b><font color="#663300"><a style="text-decoration:none;font-size:23px;font-family: monospace;color:red";" href="contactdel.php?id=' . $row['id'] . '"><img src="image/delete1.png"></a></font></b></td>';

                echo "</tr>";
        }
        echo "</table>";
        // Free result set
    }
        ?>


        <?php



        ?>

        <h1 style="font-size:30px;font-family: monospace;color: white;text-align: center;background-color: black;">Event Update </h1>

        <form action="adminindex.php" enctype="multipart/form-data" method="post" style="background-color: white">
            <table border="0" width="100%" height="40" style="background-color: black">
                <tbody>
                    <th>Event Name</th>
                    <th>Location</th>
                    <th>Event  Description</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Add Event</th>
               

                </tbody>
                <tr>
            
            <td><input required="required" type="text" name="ename" placeholder="enter the event name"></td>
            <td><input type="text" name="locationid" placeholder="enter location" required="required"></td>
            <td><input type="text" name="shortdesc" placeholder="enter Description" required="required"></td>
            <td><input style="background-color:white;border-radius:0px;" type="file" name="src" required="required" placeholder="enter the event name"></td>
            <td><input type="date" name="eventdate" placeholder="enter the event name" required="required"></td>
            <td><input id="addevent" type="submit" name="addevent" value="Add-Event" required="required"></td>
            

            </table>
            



        </form>
                <?php
                include('dbconn.php');
                if(isset($_POST["addevent"]))
                {
                    $check = getimagesize($_FILES["src"]["tmp_name"]);
                        if($check !== false){
                $ename=$_POST['ename'];
                $locationid=$_POST['locationid'];
                $shortdesc=$_POST['shortdesc'];
                $eventdate=$_POST['eventdate'];

               
                $src=addslashes(file_get_contents($_FILES["src"]["tmp_name"]));

                $qry="INSERT INTO createevents(ename,locationid,shortdesc,eventdate,src) VALUES('$ename','$locationid','$shortdesc','$eventdate','$src')";

                if(mysqli_query($con,$qry))  
                {  
                echo '<script>alert("Image Inserted into Database")</script>'; 
                echo "<script>window.location.href='adminindex.php'</script>"; 
                } 
                else{
                echo "Error!".$qry."<br>". mysqli_error($con);
                }


                }
            }


                ?>

                    <?php
                    $query = "SELECT * FROM createevents ORDER BY id DESC";
                    $result = mysqli_query($con,$query) or die (mysqli_error($con)); 


                    if(mysqli_num_rows($result) > 0){
                    echo "<table width='100%';  style='px;'>";
                    echo "<tr id='styletable2 style='width:500px;'>";

                    echo "<th id='styletable2' >Event Name</th>";

                    echo "<th id='styletable2' >Location</th>";
                    echo "<th id='styletable2' >Description</th>";
                    echo "<th id='styletable2' >Event Date</th>";
                    echo "<th id='styletable2' >Image</th>";
                    echo "<th id='styletable2' >Delete</th>";
                    echo "<th id='styletable2' >Update Event</th>";
                   

                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                    echo "<tr id='styletable2' >";

                    echo "<td id='styletable2'>" . $row['ename'] . "</td>";
                    echo "<td id='styletable2'>" . $row['locationid'] . "</td>";
                    echo "<td id='styletable2'>" . $row['shortdesc'] . "</td>";
                    echo "<td id='styletable2'>" . $row['eventdate'] . "</td>";
                   echo'<td  style="border: 1px solid gray;" ><img src="data:image/jpeg;base64,'.base64_encode($row['src'] ).'" height="150" width="400" class="img-thumnail" /></td>';

                    echo '<td id="styletable2"><b><font color="#663300"><a  href="delevent.php?id=' . $row['id'] . '"><img src="image/delete1.png"></a></font></b></td>';
                    echo '<td id="styletable2"><b><font color="#663300"><a style="text-decoration:none;font-size:23px;font-family: monospace;color:red";" href="updateevent.php?id=' . $row['id'] . '"><img src="image/edit-interface-sign.png"></a></font></b></td>';




                    echo "</tr>";
                    }
                    echo "</table>";
                    // Free result set
                    }
                    ?>


                     <h1 style="font-size:30px;font-family: monospace;color: white;text-align: center;background-color: black;">Payment </h1>

        <?php
$query = "SELECT * FROM bookingconfirm ORDER BY id DESC";
$result = mysqli_query($con,$query) or die (mysqli_error($con)); 


    if(mysqli_num_rows($result) > 0){
        echo "<table width='100%'; border=none style='px;'>";
            echo "<tr id='styletable2 style='width:200px;'>";
            
                echo "<th id='styletable2' >Payment ID</th>";
                echo "<th id='styletable2' >Name</th>";
                echo "<th id='styletable2' >Email Id</th>";
                echo "<th id='styletable2' >Date of Booking</th>";
                echo "<th id='styletable2' >Time of Booking</th>";
                echo "<th id='styletable2' >Contact Number</th>";
                echo "<th id='styletable2' >Address </th>";
                echo "<th id='styletable2' >Price</th>";
                echo "<th id='styletable2' >loaction</th>";
             //   echo "<th id='styletable2' >Screenshot</th>";
                 echo "<th id='styletable2'>Action</th>";
                   
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr id='styletable2' >";

                echo "<td id='styletable2'>" . $row['id'] . "</td>";
                echo "<td id='styletable2'>" . $row['name'] . "</td>";
                echo "<td id='styletable2'>" . $row['email'] . "</td>";
                echo "<td id='styletable2'>" . $row['dob'] . "</td>";
                echo "<td id='styletable2'>" . $row['booktime'] . "</td>";
                echo "<td id='styletable2'>" . $row['phoneno'] . "</td>";
                echo "<td id='styletable2'>" . $row['address'] . "</td>";
                echo "<td id='styletable2'>" . $row['price'] . "</td>";
                echo "<td id='styletable2'>" . $row['details'] . "</td>";
               // echo'<td id="styletable1" style="border 1px solid red;" ><img src="data:image/jpeg;base64,'.base64_encode($row['file']).'" height="200" width="300"  /></td>';

                echo '<td id="styletable2"><b><font color="#663300"><a style="text-decoration:none;font-size:23px;font-family: monospace;color:red";" href="delpayment.php?id=' . $row['id'] . '"><img src="image/delete1.png"></a></font></b></td>';
                echo "</tr>";
        }
        echo "</table>";
        // Free result set
    }
        ?>
<div>
    

</body>
</html>