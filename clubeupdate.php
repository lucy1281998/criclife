<?php
session_start();
include('dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>club register update</title>
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
                  $query= "SELECT * from clubreg where id= '$id'";

                  echo "<table width='50%' margin-left='10%' style='display:inline' id='tb'>";
                  echo "<h1 style='font-size:30px; text-align:center;color:white;font-family:monospace;'>Upate clube member</h1>";

                  echo "<form action='clubeupdate.php'  method='POST'>";
                  echo'<tr>';
          
                  echo "<td id='styletable2'>id</td>";
                  $row = mysqli_fetch_array($con->query($query));
         
                  echo "<td><input class='inputbox' type='text' name='id' value='".$row["id"]."' readonly></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Player Name</td>";
                  echo "<td><input class='inputbox' type='text' name='Name' onkeyup='key(this)' required='required' value='".$row["Name"]."' ></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>state</td>";
                   echo "<td ><input class='inputbox' type='text' name='State' onkeyup='key(this)' required='required' value='".$row["State"]."'></td>";
                  echo'</tr>';
                  echo'</tr>';
                  echo "<td id='styletable2'>Father Name</td>";
                    echo "<td><input class='inputbox' type='text' name='Father' onkeyup='key(this)' required='required' value='".$row["Father"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>District</td>";
                   echo "<td><input class='inputbox' type='text' name='District' onkeyup='key(this)' required='required' value='".$row["District"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Mother Name</td>";
                  echo "<td><input class='inputbox' type='text' name='mother' onkeyup='key(this)' required='required' value='".$row["mother"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Date of Birth</td>";
                  echo "<td><input class='inputbox' type='date' name='Birth' required='required' value='".$row["Birth"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Skill</td>";
                  echo "<td><input class='inputbox' type='text' name='skill' required='required' value='".$row["skill"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Date of Application</td>";
                   echo "<td><input class='inputbox' type='date' name='Application'  required='required' value='".$row["Application"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Gender</td>";
                   echo "<td><input  class='inputbox' type='text' name='gen' required='required' value='".$row["gen"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Mobile</td>";
                   echo "<td><input class='inputbox' type='text' name='mobile' onkeyup='keynum(this)' maxlength='10' required='required' value='".$row["mobile"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Email Id</td>";
                  echo "<td><input class='inputbox' type='email' name='email' required='required' value='".$row["email"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Adhar card</td>";
                       echo "<td><input class='inputbox' type='text' name='Adhar' onkeyup='keynum(this)' maxlength='12' required='required' value='".$row["Adhar"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>Height</td>";
                    echo "<td><input class='inputbox' type='text' name='height' onkeyup='keynum(this)' maxlength='3' required='required' value='".$row["height"]."'></td>";
                  echo'</tr>';
                  echo'<tr>';
                  echo "<td id='styletable2'>weight</td>";
                       echo "<td><input class='inputbox' type='text' name='weight' onkeyup='keynum(this)' maxlength='3' required='required' value='".$row["weight"]."'></td>";
                  echo'</tr>';
                  echo "<td colspan='2'><input class='btn' type='submit' name='ssubmit'></td>";
                        

                  echo "</form>";
                  echo "</table>";
          
    }

    if (isset($_POST["ssubmit"])) 
        {
              $id = $_POST["id"];
              $Name = $_POST['Name'];
              $State = $_POST['State'];
              $Father = $_POST['Father'];
              $District= $_POST['District'];
              $mother= $_POST['mother'];
              $Birth = $_POST['Birth'];
              $skill = $_POST['skill'];
              $Application = $_POST['Application'];
              $gen = $_POST['gen'];
              $mobile = $_POST['mobile'];
              $email = $_POST['email'];
              $Adhar = $_POST['Adhar'];
              $height= $_POST['height'];
              $weight= $_POST['weight'];
             
            $query = "UPDATE clubreg  SET Name = '".$Name."' , State = '".$State."' , Father = '".$Father."' , District= '".$District."' , mother = '".$mother."' , Birth = '".$Birth."',skill= '".$skill."' , Application = '".$Application."' , gen = '".$gen."' ,mobile= '".$mobile."' , email= '".$email."' , Adhar = '".$Adhar."',height= '".$height."' , weight= '".$weight."'  WHERE id = '".$id."'";
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
                echo mysqli_error();
                // die($con->error);
            }                       
        }
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