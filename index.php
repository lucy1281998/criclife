<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>criclife</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="secstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="calstyle.c">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style >  
.main {
width:101%;
margin-left:-16px;
background-color:#fafcfc; 
height: 90%;

}

                                      </div>
                    .row {
margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
padding:0px;

}

/* Create three equal columns that floats next to each other */
.column {
float: left;
width: 33.33%;
display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
content: "";
display: table;
clear: both;
}

/* Content */

.content {
  padding:-4px;
margin-left:60%;
overflow: hidden;
height:540px;
width:235%;
margin-top: -115%;
border-radius: 20px;
background:#fafcfc;                      
                                                                               }


/* The "show" class is added to the filtered elements */
.show {
display: block;
}


/* Style the buttons */
.filterbtn{
border: none;
outline: none;
padding: 10px 10px;
background-color:#6495ED;
cursor: pointer;
display: block;
width:253px;
margin-left:2px;
margin-top: px;
height: 120px;
font-family: fantasy;font-size:16px;
border-radius:8px;

}

.filterbtn:hover {

color:#4bd8a3;
}

.filterbtn.active {
background-color:#f4511e;
color: white;
}
input[type=text],input[type=number],input[type=date],input[type=value]
{
  width: 200px;
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
  border: 1px solid black;
  border-radius: 3px;


}

b
{
font-size:13px;
font-family:sans-serif;
margin-left:px;
margin-top: -100px;
}
label
{
margin-left:10px;
font-size:15px;
font-family: 'Source Sans Pro', sans-serif;
padding: 5px 5px 5px 5px;
}
#myBtnContainer
{

background-color: f;
height: 100%;
padding-bottom: - 100px;
margin-left: -1%;
}
body {
  font-family: Tahoma;
}

/* declare a 7 column grid on the table */
#calendar {
  width:100%;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  margin-top:-30px;
}

#calendar tr, #calendar tbody {
  grid-column: 1 / -1;
  display: grid;
  grid-template-columns: repeat(7, 1fr);
 width: 100%;
}

caption {
  text-align: center;
  grid-column: 1 / -1;
  font-size: 130%;
  font-weight: bold;
  padding: 10px 0;
}
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

#calendar a {
  color: #8e352e;
  text-decoration: none;
}

#calendar td, #calendar th {
  padding: 5px;
  box-sizing:border-box;
  border: 1px solid #ccc;
}

#calendar .weekdays {
  background: #8e352e;  
}


#calendar .weekdays th {
  text-align: center;
  text-transform: uppercase;
  line-height: 20px;
  border: none !important;
  padding: 0px 0px;
  color: #fff;
  font-size: 13px;
}

#calendar td {
  min-height:20px;
  display: flex;
  flex-direction: column;
}

#calendar .days li:hover {
  background: #d3d3d3;
}

#calendar .date {
  text-align: center;
  margin-bottom: 5px;
  padding: 4px;
  background: #333;
  color: #fff;
  width: 20px;
  border-radius: 50%;
  flex: 0 0 auto;
  align-self: flex-end;
}

#calendar .event {
  flex: 0 0 auto;
    font-size: 8px;
    border-radius: 4px;
    padding: 1px;
    margin-bottom: 1px;
    line-height: 7px;
    background: #e4f2f2;
    border: 1px solid #b5dbdc;
    color: #009aaf;
    text-decoration: none;
}

#calendar .event-desc {
  color: #666;
  margin: 3px 0 7px 0;
  text-decoration: none;  
}

#calendar .other-month {
  background: #f5f5f5;
  color: #666;
}

/* ============================
        Mobile Responsiveness
   ============================*/


@media(max-width: 768px) {

  #calendar .weekdays, #calendar .other-month {
    display: none;
  }

  #calendar li {
    height: auto !important;
    border: 1px solid #ededed;
    width: 100%;
    padding: 10px;
    margin-bottom: -1px;
  }
  
  #calendar, #calendar tr, #calendar tbody {
    grid-template-columns: 1fr;
  }
  
  #calendar  tr {
    grid-column: 1 / 2;
  }

  #calendar .date {
    align-self: flex-start;
  }
}
#ticker {
  width:50%; height:650px; overflow:auto; border:1px solid #aaaaaa;
  margin-left: 50%;
}
#ticker dt {
  font:normal 14px Georgia; padding:0 10px 5px 10px;
  background-color:#e5e5e5; padding-top:10px; border:5px solid #ffffff;
  border-bottom:none; border-right:none;
}
#ticker dd {
  margin-left:0; font:normal 11px Verdana; padding:0 10px 10px 10px;
  border-bottom:1px solid #aaaaaa; background-color:#e5e5e5;
  border-left:1px solid #ffffff;
}
#ticker dd.last { border-bottom:1px solid #ffffff;
}
#styletable2
{
  
}

                                                                       
</style>

</head>
<body>
  <div class="spinner-wrapper">
<div class="spinner"></div>
</div>
<div class="header">
<div class="headercontainer">

<div class="logo">
<img src="image/cricket1.png">
</div>
<div id="title">
<a style="color:#155fe2">cric</a><a style="color: black">life</a>
<div style="margin-left: 85%;
    margin-top: -5%;
    position: absolute;">
    <?php

          if(isset($_SESSION["emailid"]))
           {   
              echo "<h1 style='float:right; font-size:40%;'><a style='text-decoration:none; color:black; 2px;font-family:monospace'> Hi,".$_SESSION["emailid"]."</a></h1>";
              echo "<a  style='margin-left: 66%;
              margin-top: 13%;
              position: absolute;
              font-size: 50%;
              text-decoration: none;' href='logout.php'><button class='btnlog' style='width:100px;position:relative;right:50px;height:30px;background-color: #f4511e;border:none;top:-6px;cursor: pointer;color:white;'>Logout</button></a>";
            }
     ?>
           </div> 
           

<div >    
</div> 
</div>

<div class="nav">
<ul style="left: 11%; font-family: 'Century Gothic';">  
<li class="active"><a href="index.php">Home</a></li>
<li><a href="#section1">Club Joinig</a></li>
<li><a href="#Groundbooking">Ground Booking</a></li>

<li><a href="#updates">Updates</a></li>
<li><a href="#about-us">About-us</a></li>
<li><a href="#contact-us">Contact-us</a></li>
<?php
if(!isset($_SESSION["emailid"]))
{
echo'<li><a href="admin.php">Admin Login</a></li>';
}

?>
<?php 
if(!isset($_SESSION["emailid"]))
{
 ?>
<li><button onclick="document.getElementById('id01').style.display='block'" class="button2" style="vertical-align:middle"><span>SignUp </span></button></li>
<li><button onclick="document.getElementById('id02').style.display='block'" class="button1" style="vertical-align:middle"><span><a style="margin-top: -43%" href="login.php"></a> Login </span></button></li>

            




     
<?php 
}
 ?>
</ul>
</div>
</div>
</div>
			
<div class="w3-content w3-display-container" style="margin-top:-1%;">
                    <img class="mySlides" src="image/pic4.jpg" style="width:100% ;height:700px;">
                    <img class="mySlides" src="image/pic1.jpg" style="width:100%;height:700px;">
                    <img class="mySlides" src="image/pic2.jpg" style="width:100%;height:700px;">
                    <img class="mySlides" src="image/pic5.jpg" style="width:100% ;height:700px;">
                    <img class="mySlides" src="image/pic3.jpg" style="width:100% ;height:700px;">
                    <img class="mySlides" src="image/img6.jpg" style="width:100% ;height:700px;">
                    <img class="mySlides" src="image/img7.jpg" style="width:100% ;height:700px;">

                    <img class="mySlides" src="image/img8.jpg" style="width:100% ;height:700px;">


                    <button class="btn1" onclick="plusDivs(-1)">&laquo;</button>
                    <button style="margin-left:0%" class="btn2" onclick="plusDivs(1)">&raquo;</button>
                    </div>
                    <script type="text/javascript">
                    var  Index = 1;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                    showDivs(slideIndex += n);
                    }

                    function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                    }
                    x[slideIndex-1].style.display = "block";  
                    }
                    </script>
                    <script>
                    var myIndex = 0;
                    carousel();

                    function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 2000); // Change image every 2 seconds
                    }
                    </script>



          <div id="id01" class="modal">
          	 
              <?php
                if(!isset($_SESSION["emailid"])){
              ?>
              <form onsubmit=" return validateregister()" class="modal-content animate" method="POST" action="insert.php">
              <div class="imgcontainer">
                <button style="right:50px;top:15px; " class="close" type="button" onclick="document.getElementById('id01').style.display='none'" ><span>&times;  </span></button>
                
                <img  style="margin-left:90px;padding-top: 11px"  src="image/man.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                <label><b>First Name</b></label>
                <input style="width: 100%;padding: 12px 20px;margin: 8px 0; display: inline-block;border: 1px solid #ccc;
              box-sizing: border-box;height: 10%" onkeyup="key(this)" class="textfield" type="text" placeholder="Enter First Name" name="fname" id="first" ><br>

                <label><b>Last Name</b></label>
                <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
              box-sizing: border-box;height: 10%" onkeyup="key(this)" class="textfield" type="text" placeholder="Enter Last Name" name="lname" id="last" ><br>
                <label><b>Date of Birth</b></label>
                <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
              box-sizing: border-box;height: 10%"  class="textfieldstyle" type="date" placeholder="Enter Last Name" name="dob" id="dod" ><br>
               
               
               
           	    <label><b>Country</b></label>
                <input style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
              box-sizing: border-box;height: 10%"  onkeyup="key(this)" class="textfield" type="text" placeholder="Country Name"  name="cname" id="cname" ><br>


                <label ><B>Phone Number</B></label><br/>
                <input class="textfieldstyle" type="value"  onkeyup="keynum(this)" placeholder="Enter phone number" maxlength="10" name="phoneno" id="phoneno"  >
                
                <label><b>Address</b></label>
                <textarea class="textfieldstyle" name="address" id="address" cols="3" rows="2"></textarea>
               
                <label><b>Pin Code</b></label>
                <input class="textfieldstyle" type="value" placeholder="Enter Pin code" maxlength="6" onkeyup="keynum(this)" name="pincode" id="pincode" ><br>
                <label><b>Email Id</b></label>
                <input class="textfieldstyle" type="email" placeholder="Enter Email Id"  name="emailid" id="emailid" ><br>
                <label><b>Password</b></label>
                <input class="textfieldstyle" type="password" placeholder="Enter password"  name="pass" id="pass" ><br>
                <label><b> Confirm Password</b></label>
                <input class="textfieldstyle" type="password" placeholder="Enter password"  name="cpass" id="cpass" ><br>
                  
                <input type="submit"   name="submit"  value="SignUp" onclick="return mess();" class="btnsignup">
                <button class="btnlogin" type="button" value="clear" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                
                
                  </div>


            </form>
            <?php
              }
              else
              {
           echo "<h1 style='margin:px 0px;float:right; font-size:40%; margin-right:px;position'><a style='text-decoration:none; color:black;border:1px black solid; border-radius: 2px;background-color:#155fe2'> Hi,".$_SESSION["emailid"]."</a></h1>";
              }
              ?>
                        

          </div>
    

                      <!------------------------------------------register section---------------------------->
                      
                                             
                                      <script>
                                      function validateregister()
                                      {   
                                      var firstname = document.getElementById("first");
                                      var lastname = document.getElementById("last");
                                      var dod = document.getElementById("dod");
                                      var cname= document.getElementById("cname");
                                      var phoneno = document.getElementById("phoneno");
                                      var address = document.getElementById("address");
                                      var pincode = document.getElementById("pincode");
                                      var emailid = document.getElementById("emailid");
                                      var pass = document.getElementById("pass");
                                      var cpass = document.getElementById("cpass");

                                      // var phlength = phoneno.value.length;
                                      // if((firstname == "") || (lastname == "") || (eid == "") || (password == "") || (repassword == "") || (dob == "") || (phoneno == "") || 
                                      //   (pin == "") || (address == "" ))
                                      // {
                                      //   alert( " please enter your data " );
                                      //   return false;
                                      // }
                                      // else
                                      // {
                                      //   return true;
                                      // }
                                      if(firstname.value == "")
                                      {
                                      alert("please enter your first name");
                                      return false;
                                      }
                                      else if( lastname.value == "")
                                      {      
                                      alert("last name");
                                      return false;
                                      }
                                      else if(dod.value =="")
                                      {
                                      alert("Date of Birth");
                                      return false;
                                      }
                                      else if (cname.value =="")
                                      {
                                      alert("Country Name");
                                      return false;
                                      }
                                      else if(phoneno.value == "")
                                      {
                                      alert("Phone Number");
                                      return false;
                                      }
                                      else if (address.value == "")
                                      {
                                      alert("Address");
                                      return false;
                                      }
                                      else if (pincode.value == "")
                                      {
                                      alert("pincode");
                                      return false;
                                      }
                                      else if (emailid.value == "")
                                      {
                                      alert("email id");
                                      return false;
                                      }
                                      else if(pass.value == "")
                                      {
                                      alert("Password");
                                      return false;
                                      }
                                      else if(cpass.value == "")
                                      {
                                      alert("Confirm  Password");
                                      return false;
                                      }
                                      else if(pass.value !=cpass.value)
                                      {
                                      alert("Password does not match");
                                      return false;
                                      }
                                      else if(phoneno.value.length != 10)
                                      {
                                      alert("Phone number should be 10 cheracter");
                                      return false;
                                      }
                                      else
                                      {                
                                      return true;
                                      }
                                      } 
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

                                      <script>
                                      // Get the modal
                                      var modal = document.getElementById('id01');

                                      // When the user clicks anywhere outside of the modal, close it
                                      window.onclick = function(event) {
                                      if (event.target == modal) {
                                      modal.style.display = "none";
                                      }
                                      }
                                      </script>


                                      <script>
                                      function scrollNav() {
                                      $('.nav a').click(function(){  
                                      //Toggle Class
                                      $(".active").removeClass("active");      
                                      $(this).closest('li').addClass("active");
                                      var theClass = $(this).attr("class");
                                      $('.'+theClass).parent('li').addClass('active');
                                      //Animate
                                      $('html, body').stop().animate({
                                      scrollTop: $( $(this).attr('href') ).offset().top - 135
                                      }, 400);
                                      return false;
                                      });
                                      $('.scrollTop a').scrollTop();
                                      }
scrollNav();
                                      </script>
<style>
body, html, .main {
height: 93%;
width: 100%;
}

section {
height:50%;

}
</style>

<div  id="section1">
<section > 
<div style="background-color:" class="">



<button class="filterbtn active" onclick="filterSelection('Register')">Register</button>
  
  <button class="filterbtn" onclick="filterSelection('Event')">Event Calender</button>
  <button class="filterbtn" onclick="filterSelection('News')"> News and Update</button>
  <button class="filterbtn" onclick="filterSelection('Gallery')"> Gallery</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column Register">
    <div class="content">
      <div class="table">
                    <form onsubmit="return clubregister()" method="POST" action="reg.php">
                    <table style="margin-top:3%">
                    <tbody>
                    <th> <th ><b style="margin-left:-395px; font-family: 'Source Sans Pro', sans-serif;font-size: 20px;">About Player</b></th>
                    <tr>
                    <td><label >Player Name</label> </td>
                    <td> <input type="text" placeholder="Enter Player Name" onkeyup="key(this)" id="name" name="Name" ></td>
                     <td> <label>State</label></td>
                    <td><input style="margin-left:0%;" type="text" onkeyup="key(this)" placeholder="Enter State" id="state" name="State" ></td>
                    
                    </tr>
                           
                    <tr>
                    <td><label>Father Name</label></td>
                    <td><input type="text" placeholder="Enter Father Name" onkeyup="key(this)" id="father" name="Father" ></td>
                    <td><label>District</label></td>
                    <td><input style="margin-left:0%;" type="text" onkeyup="key(this)" placeholder="Enter District" id="district" name="District" ></td>
                    </tr>
                        
                    <tr>
                    <td><label>Mother Name</label></td>
                    <td> <input style="margin-left: 10px;" type="text" onkeyup="key(this)" placeholder="Enter Mother Name" id="mother" name="mother" >
                    </td>
                            
                    <th><b style="margin-right: -18px;font-family: 'Source Sans Pro', sans-serif;font-size: -22px;">About Game</b></th>
                    </tr>
                           

                    <tr>
                    <td><label>Date of Birth</label></td>
                    <td><input type="date" placeholder="Date of Birth" id="date" name="Birth" ></td>
                    <td><label>Write Your skill</label></td>
                     <td> <div style="margin-left:48%;margin-top:-4%;">
                      <textarea id="skill" style="width:150%;height:0%;padding:10px 10px; box-sizing: border-box;resize: none;margin-left:-86%;border: 1px solid black"" cols="30" rows="6" name="skill"></textarea></div></td>
                    
                    </tr>

                          
                    <tr>
                    <td><label style="margin-left: 8px;">Date of Application</label></td>
                    <td><input type="Date" placeholder="Date of Application" id="application" name="Application" ></td>
                  
                   
                    </tr>
                         
                    </tr>
                    <tr>
                    <td> <label>Gender</label></td>
                    <td><input type="radio" id="female" name="gen" value="female"> Female&nbsp;&nbsp;&nbsp;&nbsp;<input  type="radio" name="gen" value="male" id="male">Male</td>
                   
                    </tr>

                      
                    <tr>
                    <td><label>Mobile Number</label></td>
                    <td><input type="value" placeholder="Enter Mobile Number" onkeyup="keynum(this)" maxlength="10" name="mobile" id="mobile" ></td>
                    
                    </tr>


                    <tr>
                    <td> <label>Email id</label>
                    <td><input type="text" placeholder="Enter Email id" name="email" id="email"  ></td>
                    </tr>
                      
                    <td><label>Adhar Number</label></td>
                    <td><input type="value" placeholder="Enter Adhar Number" onkeyup="keynum(this)" maxlength="12" name="Adhar" id="adhar" ></td>
                    </tr>
                     
                    <tr>
                    <td><label>Height</label></td>
                    <td><input type="value" placeholder="Enter height" onkeyup="keynum(this)" maxlength="3" name="height" id="height" ></td>
                    </tr>
                    <tr>
                    <td> <label>weight</label></td>
                    <td><input type="value" placeholder="Enter weight" onkeyup="keynum(this)" maxlength="3" name="weight" id="weight" ></td>
                    </tr>

                    <tr>
                    
                    </tr>
                    
                    </tbody>
                    </table>
                    <div style="margin-left: 420px;margin-top: -20%;"><button type="Submit" value="Submit" name="reg" id="register">Register Now</button></div> 
                    </form>
                    </div>
                    </div>
                    </div>
    <!----------------------------------------Club joing---------------------------------------------->


                                     <script>
                                      function clubregister()
                                      {   
                                      var name = document.getElementById("name");
                                      var state = document.getElementById("state");
                                      var father = document.getElementById("father");
                                      var district= document.getElementById("district");
                                      var mother = document.getElementById("mother");
                                      var date = document.getElementById("date");
                                      
                                      var application = document.getElementById("application");
                                      var skill= document.getElementById("skill");
                                     
                                      var female= document.getElementById("female").checked;
                                      var male = document.getElementById("male").checked;
                                     
                                      var mobile = document.getElementById("mobile");
                                      
                                      var email = document.getElementById("email");
                                      var adhar = document.getElementById("adhar");
                                      var height= document.getElementById("height");
                                      var weight = document.getElementById("weight");
                                      var residental = document.getElementById("residental");
                                    
                                      if(name.value == "")
                                      {
                                      alert("Please Enter your Name");
                                      return false;
                                      }
                                      else if(state.value == "")
                                      {      
                                      alert("Please Enter State");
                                      return false;
                                      }
                                      else if(father.value =="")
                                      {
                                      alert("Please Enter Father Name");
                                      return false;
                                      }
                                      else if (district.value =="")
                                      {
                                      alert("District Name");
                                      return false;
                                      }
                                      else if(mother.value == "")
                                      {
                                      alert("Mother Name");
                                      return false;
                                      }
                                      else if (date.value == "")
                                      {
                                      alert("Select date of birth");
                                      return false;
                                      }
                                      else if(state.value == "")
                                      {
                                      alert("Select state");
                                      return false;
                                      }
                                      else if(application.value == "")
                                      {
                                      alert("fill date of Application");
                                      return false;
                                      }
                                       else if(skill.value == "")
                                      {
                                      alert("Enter Your skill");
                                      return false;
                                      } 
                                      else if(female==false && male==false) {
                                       alert("Select Gender");
                                       return false;

                                      }
                                       else if(mobile.value == "")
                                      {
                                      
                                      alert("enter your mobile");
                                      return false;
                                      }
                                       
                                      
                                       else if(email.value == "")
                                      {
                                      alert("Enter Your email id");
                                      return false;
                                      }
                                      
                                       else if(adhar.value == "")
                                      {
                                      alert("Enter Adhar Number");
                                      return false;
                                      }
                                     
                                      else if(height.value == "")
                                      {
                                      alert("Enter Your Height");
                                      return false;
                                      }
                                      else if(height.value.length =="")
                                      {
                                      alert("Enter the length");
                                      return false;
                                      }
                                      
                                       else if(weight.value == "")
                                      {
                                      alert("Enter your weight");
                                      return false;
                                      }
                                      else if(residental.value == "")
                                      {
                                      alert("Enter Your Residental");
                                      return false;
                                      }
                                      else if(mobile.value.length != 10)
                                      {
                                      alert("Phone number should be 10 character");
                                      return false;
                                      }
                                      else if(adhar.value.length != 12)
                                      {
                                      alert("Phone number should be 10 cheracter");
                                      return false;
                                      }
                                    
                                      
                                      else
                                      {
                                         return true;
                                      }
                                      }
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
                                    </div>
  
                                  <div class="column Event">
                                  <div class="content">
                                    <div class="container">
                        
                                      <table id="calendar">
                                      <caption>MAY 2018</caption>
                                      <tr class="weekdays">
                                      <th scope="col">Sunday</th>
                                      <th scope="col">Monday</th>
                                      <th scope="col">Tuesday</th>
                                      <th scope="col">Wednesday</th>
                                      <th scope="col">Thursday</th>
                                      <th scope="col">Friday</th>
                                      <th scope="col">Saturday</th>
                                      </tr>

                                      <tr class="days">
                                      <td class="day other-month">
                                      <div class="date">27</div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">28</div>
                                      <div class="event">
                                      <div class="event-desc">
                                      <b>Cricket tournament</b> 
                                      </div>
                                      <div class="event-time">
                                      1:00pm to 3:00pm
                                      </div>
                                      </div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">29</div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">30</div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">31</div>
                                      </td>


                                      <td class="day">
                                      <div class="date">1</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">2</div>
                                      <div class="event">
                                      <div class="event-desc">
                                        <b>Summer Camp</b>
                                      </div>

                                      <div class="event-time">
                                      2:00pm to 5:00pm
                                      </div>
                                      </div>
                                      <div class="event">
                                      <div class="event-desc">
                                      <b>Prize distrubution</b>
                                      </div>

                                      <div class="event-time">
                                      5:00pm to 6:00pm
                                      </div>
                                      </div>
                                      </td>
                                      </tr>
                                      <tr>
                                      <td class="day">
                                      <div class="date">3</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">4</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">5</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">6</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">7</div>
                                      <div class="event">
                                      <div class="event-desc">
                                      <b>cricket tournment</b>
                                      </div>
                                      <div class="event-time">
                                      6:00Am to 4:00PM
                                      </div>
                                      </div>
                                      </td>
                                      <td class="day">
                                      <div class="date">8</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">9</div>
                                      </td>
                                      </tr>
                                      <tr>
                                      <td class="day">
                                      <div class="date">10</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">11</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">12</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">13</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">14</div>
                                      <div class="event">
                                      <div class="event-desc">
                                      <b>day night cricket tournment</b>
                                      </div>
                                      <div class="event-time">
                                      10:00AM to 3:00pm
                                      </div>
                                      </div>
                                      </td>
                                      <td class="day">
                                      <div class="date">15</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">16</div>
                                      </td>
                                      </tr>
                                      <tr>

                                      <td class="day">
                                      <div class="date">17</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">18</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">19</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">20</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">21</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">22</div>
                                      <div class="event">
                                      <div class="event-desc">
                                        <b>E-city Tournment</b>
                                      </div>
                                      <div class="event-time">
                                      9:00am to 12:00pm
                                      </div>
                                      </div>
                                      </td>
                                      <td class="day">
                                      <div class="date">23</div>
                                      </td>
                                      </tr>
                                      <tr>
                                      <td class="day">
                                      <div class="date">24</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">25</div>
                                      <div class="event">
                                      <div class="event-desc">
                                      <b>Laggan cricket tournment</b>
                                      </div>
                                      <div class="event-time">
                                      1:00pm to 3:00pm
                                      </div>
                                      </div>
                                      </td>
                                      <td class="day">
                                      <div class="date">26</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">27</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">28</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">29</div>
                                      </td>
                                      <td class="day">
                                      <div class="date">30</div>
                                      </td>
                                      </tr>
                                      <tr>

                                      <td class="day">
                                      <div class="date">31</div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">1</div>
                                      <!-- Next Month -->
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">2</div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">3</div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">4</div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">5</div>
                                      </td>
                                      <td class="day other-month">
                                      <div class="date">6</div>
                                      </td>

                                      </table>

                                      </div>
                                      </div>

    </div>
  </div>
 
  <div class="column News">
                          <div style="height:" class="content">
                          <div style="width:100%;height:100%;background-color:#f7efef;margin-top: 30px">
                          <h1 style="margin-left:10px;margin-top: 10px;font-size:30px;color:black;font-family: monospace;">Club News</h1>
                          <hr style="color: black">
                          <hr style="color: black">

                          <h2 style="margin-left:20px;margin-top: 30px;font-size:30px;color:black;font-family: monospace;">Latest</h2>
                          <div style="display:flex;margin-left: 100px;">
                          <div  class="image">
                          <img style="width:80%;height:40%;" src="image/ground1.jpg">
                          <div class="news">
                          <p style="margin-top:0px"><h3 style="color: black">Corporate T-20</h3></p>
                          <p id="demo">Corporate Cricket League 2018.<br>Sun, 29 Apr 7:00AM - Sun, 20 May 6:00PM<br>contact:9102000109</p>


                          </div>


                          </div>
                          <div class="image">
                          <img style="width:80%;height:40%" src="image/ground3.jpg">
                          <div class="news">
                          <p style="margin-top: -17px;"><h3 style="color: black">Summer Camp</h3>
                          Mon, 26 Mar 9:30AM - Thu, 31 May 1:00PM
                          XLR8 Indoor Stadium , North Bangalore - 68 Mins (Approx)
                          Rs 400
                          244 people viewed this event.
                          contact:9102000109</p>

                          </div>


                          </div>
                          <div class="image">
                          <img style="width:80%;height:40%" src="image/ground.jpeg">
                          <div class="news">
                          <p><h3 style="color: black">cricket tournament</h3>Sat, 17 Mar 9:00AM - 4:00PM
                          IFIM College Hostel , Bangalore - 27 Mins (Approx)
                          Rs 1000
                          518 people viewed this event.</p>

                          </div>


                          </div>
                          </div>


                          </div>



    </div>
  </div>
  <div class="column Gallery">
    <div  class="content">
      <div style="margin-top:40px;">
        <div class="second" style="margin-top:-2px;margin-left:66.6%"> 
          <img style="width: 400px;height:175px" src="image/gallery3.jpg">
          <img style="width: 400px;height:175px" src="image/gallery1.jpg">

   </div>
    
    <div class="first" style="margin-top: -354px;margin-left: 0px;">
      <div class=>
   <figure> <img style="width: 700px;height: 350px" src="image/gallery4.jpg"></figure>
      </div>
    </div>


      <div>
        <img style="width:260px;height: 200px" src="image/gallery1.jpg">
        <img style="width: 260px;height: 200px" src="image/gallery5.jpg">
         <img style="width:260px;height: 200px" src="image/gallery3.jpg">
         <img style="width:260px;height: 200px" src="image/pic2.jpg">
       
         
       
      </div>
      
    </div>
    </div>
  </div>


 
</div>

<!-- END MAIN -->
</div>

                    <script>
                    filterSelection("Register")
                    function filterSelection(c) {
                    var x, i;
                    x = document.getElementsByClassName("column");
                    if (c == "all") c = "";
                    for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                    }
                    }

                    function w3AddClass(element, name) {
                    var i, arr1, arr2;
                    arr1 = element.className.split(" ");
                    arr2 = name.split(" ");
                    for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                    }
                    }

                    function w3RemoveClass(element, name) {
                    var i, arr1, arr2;
                    arr1 = element.className.split(" ");
                    arr2 = name.split(" ");
                    for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);     
                    }
                    }
                    element.className = arr1.join(" ");
                    }


                    // Add active class to the current button (highlight it)
                    var btnContainer = document.getElementById("myBtnContainer");
                    var btns = btnContainer.getElementsByClassName("btn");
                    for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function(){
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                    });
                    }
                    </script>




                    </section>
                    </div>




                <div style="margin-top:2%" class="main" id="Groundbooking">
                <section>
                 <div class="left_section">



                <img style="width:50%; height: 50%; border:10px solid black;margin-left: 18px ;margin-bottom:0px;" src="image/ground.jpg">

                </div>
                <div class="right_section">
                <h2 style="color: white;margin-left: -30%;font-family: 'PT Sans', sans-serif;">Welcome To <a style="color:#155fe2">cric</a><a style="color: white">life</a></h2><br>
                <p style="text-align: justify; color:white;font-family: 'PT Sans', sans-serif;font-size:13px;"><a style="color:#155fe2">cric</a><a style="color: white">life</a> is an online platform which enables its users to find their sports buddy, check availability<br> & book sports facilities and discover sports activities near them.<br><br><br>
                GW was started in 2013 by a team of sports enthusiast with a mission to “Simplify recreational<br> Sports”.  Over .The GW team is continuously working on designing new features and processes<br> that will make playing simple & entertaining.

                We believe that we are one among the many,<br> <br>who wants to see India emerge as a sporting nation and we think this is just the first few steps<br> in our long journey to simplify sports and cultivate sporting culture in India.<br>
                We believe that we are one among the many, <br><br>who wants to see India emerge as a sporting nation and we think this is just the first few steps<br> in our long journey to simplify sports and cultivate sporting culture in India<br><br><br>who wants to see India emerge as a sporting nation and we think this is just the first few steps<br> in our long journey to simplify sports and cultivate sporting culture in India.</p>
                </p>
                <form method="POST" action="index.php">
                 
                 </form>
                <?php 
                  if (!isset($_SESSION["emailid"])) 
                    {
                      ?><span><a style='text-decoration: none;color: white' href='login.php'><input type='submit' class='bookingbtn' style='vertical-align:middle' name="submit" value="Login First"></a></span><?php
                    }
                    else 
                    {
                      ?><span><a style='text-decoration: none;color: white' href='groundbooking.php'><input type='submit' class='bookingbtn' style='vertical-align:middle' name="submit" value="BOOK NOW"></a></span><?php
                    }
                  
                 ?>
             
                  </div>


                </div>


                
                </section>
                </div>



<div class="main" id="updates">

<section  style="height:20%;width: 101%; margin-top:-9%">
  <style>
    

    #updateimage
    {
      margin-left: 600px;
      margin-top:-100px;
      width: 40%;
      height:100%;
     
    }
    #styletable2 
    {
      margin-left:20px;
      font-family: monospace;
      font-size: 13px;
      width:500px; 
      color: green;
      height:100px;
    }
    #eventdetails
    {
      font-family: monospace;
      font-size: 16px;
      padding:0px 20px 0px 20px;

     
     
    }
  </style>


                     <div  style="background-color:;margin-top:110px;height:700px;"> 
                    <?php
                    error_reporting(0);
                    include('dbconn.php');
                    $query = "SELECT * FROM createevents ORDER BY id DESC";
                    $result = mysqli_query($con,$query) or die (mysqli_error($con)); 


                    if(mysqli_num_rows($result) > 0){
                   
                    while($row = mysqli_fetch_array($result)){
                    echo "<div id='styletable2' >";
                    ?><h1  style="padding-top:20px;" id="eventdetails">Event Name</h1>  <?php
                    echo "<div id='styletable2'>" . $row['ename'] . "</div>";
                     ?><h1 id="eventdetails">Event Location</h1>  <?php
                    echo "<div id='styletable2'>" . $row['locationid'] . "</div>";
                     ?><h1 id="eventdetails">Event Description</h1>  <?php
                    echo "<div style='text-align:justify' id='styletable2'>" . $row['shortdesc'] . "</div>";
                     ?><h1 id="eventdetails">Event Date</h1>  <?php
                    echo "<div id='styletable2'>" . $row['eventdate'] . "</div>";

                    echo "</div>";
                    echo "<div id='updateimage'>";
                      echo "<div style=''>";
                     echo'<img style="width:136%;height:50%;border:10px solid black;" src="data:image/jpeg;base64,'.base64_encode($row['src'] ).'" />';
                      echo "</div>";
                      echo '<div style="margin-top:-300px;margin-left:300px;color:white;">';
                            ?><h1>Get in touch</h1><?php
                      echo '</div>';
                          
                    echo "</div>";
                    }
                    echo "</div>";
                    // Free result set
                  }
                    else
                    {
                              echo "Error!".$result."<br>". mysqli_error($con);

                    }

                    
                    ?>
                    </div>

</section>
</div>



            <div style="margin-bottom:px;" class="main" id="about-us">
            <section  style="background-color:;height:90%;width: 101%;">
            <img style="width: 100%;height:100%;margin-top:0px;" src="images/aboutus.png">
            <div  class="aboutus">
            <h2 class="vc_custom_heading" >Our<br />
            Company<br />
            Values</h2>

            </div>

            <div style="background-color: white;" class="aboutus-right">
            <div>
            <img src="image/megaphone.png"><br>
            <h3 style="">Transparency</h3><br>
            <p style="text-align: justify;">Openness with our team & <br>clients. We raise issues &<br> provide solutions promptly.</p>
            </div><br><br>
            <div>
            <img src="image/engineer.png"><br>
            <h3 style="">Commitment</h3><br>
            <p style="text-align: justify;">
            Our word and hard work over<br> everything else. Our clients and<br> vision are our guiding beacons.</p>
            </div>
            <div style="margin-left: 50%;margin-top: -55%">
            <img src="image/book.png"> <br>
            <h3 style="">Self Improvement</h3><br>  
            <p style="text-align: justify;">Never stop learning,<br> never stop evolving into who we<br> want to be and where we want to be.</p> 
            </div>
            <div style="margin-left: 50%;margin-top:-2%"><br><br>
            <img src="image/history.png"> <br>
            <h3 style="">Our History</h3><br>  
            <p style="text-align: justify;">Never stop learning,<br> never stop evolving into who we<br> want to be and where we want to be.</p> 
            </div>
            </div>




</section>
</div>
<div style="margin-top: -130px;" class="main" id="contact-us">
<section  style="height:100%;width: 101%;">

                        <div class="contact-us">
                        <form style="padding:90px 50px 50px 100px;" onsubmit="return contact()" method="POST" action="Contactus.php" >
                        <label id="leb">Name</label>
                        <input style="width: 100%;padding: 22px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-radius:0px;height: 20px;" type="text" name="name" id="name" onkeyup="key(this)" placeholder="Enter your Name" required="required">
                        <label id="leb">Email</label>
                        <input style="width: 100%;padding: 12px 20px;margin: 8px 0;box-sizing: border-box;border: none;" type="email" name="email" id="email" placeholder="Enter your Email ID" required="required">
                        <label id="leb">Phone Number</label>
                        <input style="width: 100%;padding: 22px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-radius: 0px;height: 20px;" type="text" name="phone" onkeyup="keynum(this)" maxlength="10" id="phone" required="required" placeholder="Enter Phone No">
                        <label id="leb">Message</label>
                        <textarea  style="width: 100%;height: 130px;padding: 12px 20px;box-sizing: border-box;border: 2px solid #ccc;border-radius: 4px; background-color: #f8f8f8;resize: none;" cols="30" rows="8" required="required" placeholder="Write Something to us  " id="message" name="message"></textarea>
                        <button id="contbtn" type="submit" name="Contact" value="Contact">Contact-Us</button>
                        </form>
                        <div>
                        <script >
                        function contact()
                        {

                        var name = document.getElementById("name");
                        var email = document.getElementById("email");
                        var phone = document.getElementById("phone");
                        var message = document.getElementById("message");
                        if(name.value == "  ")
                        {
                        alert("Enter the name");
                        return false;
                        }
                        else if(email.value == "  ")
                        {
                        alert("Enter the email id");
                        return false;

                        }
                        else if(phone.value =="  ")
                        {
                        alert(Enter the Phone number);
                        return false;
                        }
                        else if(message.value =="  ")
                        {
                        alert("Enter the message");
                        return false;
                        }
                        else
                        {
                        return true;
                        }

                        }

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
</section>
</div>


<footer style="width: 100%;height:50%;margin-top:50px;background-color:black;">
  
                          <div class="first-section">
                          <div style="margin-left:45px;">
                          <table>
                          <tr> 
                          <td><img src="image/location.png" style="margin-left: 43px;margin-top:20px;" onmouseover="src='image/location1.png'" onmouseout="src='image/location.png'"> </td>
                          <td><p style="color:white;margin-top:30px;margin-left: 15px;
                          font-size:16px;font-family: 'Century Gothic', sans-serif;color: rgba(280,280,255,0.9);">KR-Puram Bangalore India</p></td>
                          </tr>
                          <tr>
                          <td><img src="image/phone.png" style="margin-left: 43px;margin-top:14px;" onmouseover="src='image/phone1.png'" onmouseout="src='image/phone.png'"> </td> 
                          <td><p style="margin-top: 15px;margin-left: 15px;font-size:16px;font-family: 'Century Gothic', sans-serif;color: rgba(280,280,255,0.9);">+919102000109 / 8317394866</p></td>                   
                          </tr>
                          <tr>
                          <td><img src="image/email.png" style="margin-left: 43px;margin-top:20px;" onmouseover="src='image/email1.png'" onmouseout="src='image/email.png'"> </td> 
                          <td><p style="color:white;margin-top: 15px;margin-left: 15px;font-size:16px; color: white;font-family: 'PT Sans Narrow', sans-serif;"><a href="mailto:criclife@gmail.com" style="text-decoration: none; font-family: 'Century Gothic', sans-serif;color: rgba(280,280,255,0.9);">Criclife@gmail.com</a></p></td> 
                        </tr>
                          <td><img src="image/email.png" style="margin-left: 43px;margin-top:20px;" onmouseover="src='image/email1.png'" onmouseout="src='image/email.png'"> </td> 
                          <td><p style="color:white;margin-top: 15px;margin-left: 15px;font-size:16px; color: white;font-family: 'PT Sans Narrow', sans-serif;"><a href="mailto:Aryan.admin@criclife.com" style="text-decoration: none; font-family: 'Century Gothic', sans-serif;color: rgba(280,280,255,0.9);">Aryan.admin@criclife.com</a></p></td>                                      
                          </tr>
                          </table>
                          </div>
                          <div class="about-us">
                          <h1 style="font-size: 29px;margin-top:-200px; font-family: 'Century Gothic', sans-serif;color: rgba(280,280,255,0.9);">About the Administrator</h1><br/>
                          <p style="margin-top: 0px;text-align: justify; font-size:14px;font-family: 'Century Gothic', sans-serif;color: rgba(280,280,255,0.7)
                          ;"> This Website is developed by Aryan Kumar student of 6th sem BCA frm SEA College and he is the only administrator of this website.<br/> CricLife website is designed with the motive of managing a cricket club.<br/>For any enquiry please fill the contact-us form or else u can directly contact with the admin by given emailid or phone-no...THANK YOU</p>
                          <tr>
                          <td><img src="image/facebook.png" style="margin-left:0px;margin-top:31px;" onmouseover="src='image/facebook1.png'" onmouseout="src='image/facebook.png'"> </td> 
                          <td><img src="image/instagram.png" style="margin-left: 43px;margin-top:31px;" onmouseover="src='image/instagram1.png'" onmouseout="src='image/instagram.png'"> </td> 
                          <td><img src="image/twitter.png" style="margin-left: 43px;margin-top:31px;" onmouseover="src='image/twitter1.png'" onmouseout="src='image/twitter.png'"> </td> 
                          <td><img src="image/share.png" style="margin-left: 43px;margin-top:25px;" onmouseover="src='image/share1.png'" onmouseout="src='image/share.png'"> </td> 

                          </tr>


                          </div>



                          </div>
                          <div class="second-section">


                          </div>


  

</footer>

</body>
</html>
