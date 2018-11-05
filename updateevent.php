<?php
session_start();
include('dbconn.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title> Update event</title>
  <script>
    setTimeout(function() {
    $('.tooltip .tooltiptext').fadeOut('fast');
}, 1000); 
  </script>
  <style>
    #tb
    {
      display:inline-flex;
      width: 30%;
       background-size:100% ;
    }
    #styletable2
    {
      color: white;
      font-family: monospace;
      font-size:15px;
    }
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

    .inputbox 
    {
      width: 100%; /* Full width */
    padding: 6px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 6px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }
    body
    {
      background-image: url('image/ground.png');
       background-repeat: no-repeat;
    background-attachment:cover;
    background-position:cover;
    background-repeat:;
    background-size:138% ;
    width:  
    }
    .btn{
    background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
  </style>
</head>

<body>
	<?php
  if(isset($_GET["id"]))
    {
                  $id = $_GET["id"];
                  $query= "SELECT * from createevents where id= '$id'";

                  echo "<table width='50%' margin-left='10%' style='display:inline' id='tb'>";
                  echo "<h1 style='font-size:30px; text-align:center;color:white;font-family:monospace;'>Upate club member</h1>";

                  echo "<form action='updateevent.php'  method='POST'  enctype='multipart/form-data'>";
                  echo'<tr>';
          
                  echo "<td id='styletable2'>id</td>";
                  $row = mysqli_fetch_array($con->query($query));
         
                  echo "<td><input class='inputbox' type='text' name='id' value='".$row["id"]."' readonly></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Event Name</td>";
                  echo "<td><input class='inputbox' type='text' name='ename' required='required' value='".$row["ename"]."' ></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>event location</td>";
                  echo "<td ><input class='inputbox' type='text' name='locationid' required='required' value='".$row["locationid"]."'></td>";
                  echo'</tr>';
                  echo'</tr>';
                  echo "<td id='styletable2'>Event description</td>";
                  echo "<td><input class='inputbox' type='text' name='shortdesc' required='required' value='".$row["shortdesc"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Event Date</td>";
                  echo "<td><input class='inputbox' type='date' name='eventdate' required='required' value='".$row["eventdate"]."'></td>";

                  echo'</tr>';
                 
                
                  echo "<td colspan='2'><input class='btn' type='submit' name='ssubmit'></td>";
                        

                  echo "</form>";
                  echo "</table>";
    }

    if (isset($_POST["ssubmit"])) 
        {
              $id= $_POST['id'];
              $ename = $_POST['ename'];
              $locationid = $_POST['locationid'];
              $shortdesc = $_POST['shortdesc'];
              
             	
              $eventdate= $_POST['eventdate'];
        
      
              
             
            $query = "UPDATE createevents  SET ename = '".$ename."' , locationid = '".$locationid."' , shortdesc = '".$shortdesc."',eventdate = '".$eventdate."' where id = '$id'" ;

            if($con->query($query))
            {

              ?>
              <div style="width: 30%;height:100%;color: red ;background-color: white;padding: 100px 100px 100px 100px;margin-left:30%;margin-top: 10%;border-radius: 20px;"><h3 style="text-align: center;color:black;font-family: monospace;font-size: 20px; " >successfully  Updated</h3><br>        <div class="tooltip"><a href="adminindex.php"><img  style="margin-left:133px;"  src="image/checked.png"></a> 
            <span class="tooltiptext">click here to enter in Home Page </span></div>

            </div>

              <?php 
              //echo "<script>window.location.href='adminindex.php'</script>";
            }
            else
            {
                // echo "Entry Failed";
                              echo "Error!".$query."<br>". mysqli_error($con);
                // die($con->error);
            }                       
        }
    
        ?>
	</div>
</body>
</html>