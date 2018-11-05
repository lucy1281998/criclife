<!DOCTYPE html>
<html>
<head>
  <title>signup</title>
  <style type="text/css">
     .tooltip {
    position: relative;
    display: inline-block;

  
}

.tooltip .tooltiptext {
    visibility: hidden;
    width:150px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 10px;
    padding: 15px 0;


    /* Position the tooltip */
    position: absolute;
    z-index: ;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
    
  </style>
</head>

<body>

</body>
</html>
<?php
include('dbconn.php');
session_start();
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $cname= $_POST['cname'];
    $phoneno= $_POST['phoneno'];
    $address = $_POST['address'];
  
    $picode = $_POST['pincode'];
     $emailid = $_POST['emailid'];
     $pass = hash('sha512',$_POST['pass']);
      
     $cpass = hash('sha512', $_POST['cpass']);

    mysqli_select_db( $con,"cricbuzz");

 
    
    $sql="INSERT INTO user_signup(fname,lname, dob,cname,phoneno,address,pincode,emailid,pass,cpass) values('$_POST[fname]','$_POST[lname]','$_POST[dob]','$_POST[cname]','$_POST[phoneno]','$_POST[address]','$_POST[pincode]','$_POST[emailid]','$pass','$cpass')";

    if(mysqli_query($con,$sql))
    {
        ?>  
         <div style="width: 30%;height:100%;color: red ;background-color: white;padding: 100px 100px 100px 100px;margin-left:30%;margin-top: 10%;border-radius: 20px;"><h3 style="text-align: center;color:black;font-family: monospace;font-size: 20px; ">Signup Successful</h3><br>        <div class="tooltip"><a href="index.php"><img  style="margin-left:133px;"  src="image/checked.png"></a> 
            <span class="tooltiptext">click here to enter in Home Page </span></div>

            </div>
            <?php
        
    }else{
        echo "Error!".$sql."<br>". mysqli_error($con);
    }

}

?>
