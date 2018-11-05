<?php
session_start();
include('dbconn.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
          <title>Book</title>
          <style>
          *
          {
          padding:0;
          margin: 0;
          }
          * {box-sizing: border-box}
          {box-sizing: border-box}


          /* Full-width input fields */
          input[type=text], input[type=password],input[type=date],input[type=email]{
          width:60%;
          padding:6px;
          margin: 2px 0 7px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
          }

          input[type=text]:focus, input[type=password]:focus {
          background-color: #ddd;
          outline: none;
          }
          #textarea
          {
          width:60%;
          padding:5px;
          margin: 9px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;

          }
          #timebox
          {
          width:60%;
          padding:6px;
          margin: 9px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;

          }
          #styletable2
          {
            font-family: monospace;
          font-size:15px;
          font-weight: bold;
          }
          label
          {
          font-family: monospace;
          font-size:15px;
          font-weight: bold;
          }
          input[type=submit] ,input[type=reset]{
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          width: 20%;
          margin-left: 277px; 

          }

          body
          { 
          background-color:turquoise;
          background-repeat: no-repeat;
          background-attachment:cover;
          background-position:cover;
          background-repeat: no-repeat;
          background-size:100% ;
          width:  
          }
          .image{
          width:700px;
          height:850px;
          margin-top:px;
          background-image: url("image/img9.png");
          background-size:cover ;
          clip-path:polygon(0% 346%, 99% 47%, 0% -130%);
          background-attachment:cover;
          background-position:cover;
          background-repeat: no-repeat;
          }
          .form_section
          {
          float: right;
          width:700px;

          height:700px;
          background:turquoise;
          margin-top: -62%;
          margin-right: 52px;

          }
          .form_section h1

          {
          font-family: monospace;
          text-align: center;
          color: white;
          }
          .back:hover
          {
            color: green;
          }
          .button2
          {
                width: 70px;
    height: 40px;
    background: red;
    text-decoration: none;
    border: none;
    color: white;
    font-size: 15px;
    font-family: monospace;
      }
          
          </style>
</head>
<body>
  <header style="background-color:#788ba0;height:60px;">
    <a class="back" style="text-decoration: none;position: relative;top: 20px;left: 100px; color: white;font-size:20px;font-family: monospace;" href="groundbooking.php">Back</a>
    <?php
          if(isset($_SESSION["emailid"]))
           {   
              echo "<h1 style='float:right; font-size:100%;'><a style='text-decoration:none;font-size:14px; color:white; 2px;font-family:monospace'> Hi,".$_SESSION["emailid"]."</a></h1>";
              echo "<a  style='margin-left: 4%;
              margin-top: 2%;
              position:relative;
              font-size: 50%;
              text-decoration: none;' href='logout.php'><button class='btnlog' style='width:100px;position:relative;right:-84%;height:30px;background-color: #f4511e;border:none;top:27px;cursor: pointer;color:white;'>Logout</button></a>";
          
            }
            
     ?>
    
  </header>
  
    <div class="image">
      </div>
        <div class="form_section">
          
         
          <h1>Book your Ground</h1><br><br>
            <form action="bookingconfirm.php" method="post" enctype="multipart/form-data">
              <table style="margin-left: 150px;">
                <tbody>
                        <tr>
                        <td><label>Name</label></td>
                        <td><input type="text" name="name" onkeyup="key(this)" placeholder="Enter your name" required="required"></td>
                        </tr>
                        <tr>
                        <td><label>Email Id</label></td>
                        <td><input type="email" name="email" placeholder="Enter your emailid" required="required"></td>
                        </tr>
                        <tr>
                        <td><label>Date </label></td>
                        <td><input type="date" name="dob" placeholder="Enter date" required="required"></td>
                        </tr>
                        <tr>
                        <td><label>Timing</label></td>
                        <td><input id="timebox" type="time" name="booktime" placeholder="Enter time" required="required"></td>
                        </tr>
                        </tr>
                        <tr>
                        <td><label>Contact No</label></td>
                        <td><input id="timebox" type="text" maxlength="10" onkeyup="keynum(this)" name="phoneno" placeholder="Enter mobile no." required="required"></td>
                        </tr>
                        <tr>
                        <td><label>Address</label></td>
                        <td><textarea id="textarea" cols="22" rows="5" placeholder="Enter your address" required="required" name="address"></textarea></td><br>

                        </tr>
                        <script type="text/javascript">
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



                        <?php
                        if(isset($_GET["id"]))
                        {
                        $id = $_GET["id"];
                        $query= "SELECT * from grounddetails where id= '$id'";

                        echo'<tr>';
                        $row = mysqli_fetch_array($con->query($query));


                        echo'<tr>';
                        echo "<td id='styletable2'>Price</td>";
                        echo "<td ><input class='inputbox' type='text' name='price' value='".$row["price"]."' readonly></td>";
                        echo'</tr>';
                        echo'</tr>';
                        echo "<td id='styletable2'>Location</td>";
                        echo "<td><input class='inputbox' type='text' name='details' value='".$row["details"]."' readonly></td>";
                        echo'</tr>';





                        }

?>
<tr><td><label><p style="font-family: monospace;
font-size:9px;
font-weight: bold;">Scan the QR code for payment</p></label></td>
</tr>

<td><label>Payment</label></td>
<div "><td style="display: inline-flex;"><img  src="image/paytm.png" width="200" height="200">
<img src="image/bhim.png" width="200" height="200"></td></div>

</tr>
<tr>
<td><label><p  style="font-family: monospace;
font-size:9px;">Uplaod screenshot of payment</p></label></td>
<td><input type="file" name="file" value="file" placeholder="uplaod" required="required"></td>
</tr>

</tbody>
</table>
<input  type="submit" value=Book name="Book">
<input style="margin-left: 0px;" type="reset" value="Reset">
          </form>

      </div>

<?php
include('dbconn.php');

if(isset($_POST['Book']))
{
  
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $booktime= $_POST['booktime'];
    $phoneno= $_POST['phoneno'];
    $address = $_POST['address'];
    $price =$_POST['price'];
     $details =$_POST['details'];

    
   move_uploaded_file($_FILES["file"]["tmp_name"],"image/". $_FILES["file"]["name"]);     
   $file=$_FILES["file"]["name"];
 

     $sql="INSERT INTO bookingconfirm(name,email,dob,booktime,phoneno,address,price,details, file) values('$name','$email','$dob','$booktime','$phoneno','$address','$price','$details','$file')";

      if(mysqli_query($con,$sql))
    {
          
          echo "<script>alert('payment done and your ground is booked for one day');</script>";  
                      echo "<script>window.location.href='index.php'</script>"; 

          
        
    }else{
        echo "Error!".$sql."<br>". mysqli_error($con);
    }

  
  
 
    
}    
?>


  
</body>
</html>