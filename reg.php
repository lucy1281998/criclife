<?php
include('dbconn.php');

  
if(isset($_POST['reg']))

{
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
             
  

            mysqli_select_db($con,"cricbuzz");

            $sql="INSERT INTO clubreg(Name,State, Father,District,mother,Birth,skill,Application,gen,mobile,email,Adhar,height,weight) values('$_POST[Name]','$_POST[State]','$_POST[Father]','$_POST[District]','$_POST[mother]','$_POST[Birth]','$_POST[skill]','$_POST[Application]','$_POST[gen]','$_POST[mobile]','$_POST[email]','$_POST[Adhar]','$_POST[height]','$_POST[weight]')";


    if(mysqli_query($con,$sql))
    {
          
          ?>
              <div style="width: 30%;height:100%;color: red ;background-color: white;padding: 100px 100px 100px 100px;margin-left:30%;margin-top: 10%;border-radius: 20px;"><h3 style="text-align: center;color:black;font-family: monospace;font-size: 20px; " >successfully  register</h3><br>        <div class="tooltip"><a href="adminindex.php"><img  style="margin-left:133px;"  src="image/checked.png"></a> 
            <span class="tooltiptext">click here to enter in Home Page </span></div>

            </div>

              <?php 
          echo "<script>window.location.href='index.php'</script>";
          
        
    }
    else
    {
      echo "Error!".$sql."<br>". mysqli_error($con);
       // die("Connection Failed".$con->connect_error); 
       

    }
}

?>
