<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<body>
<div style="margin-top: -75px;" class="main" id="contact-us">
<section  style="height:100%;width: 101%;">

                        <div class="contact-us">
                        <form style="padding:90px 50px 50px 100px;" onsubmit="return contact()" method="POST" action="Contactus.php" >
                        <label id="leb">Name</label>
                        <input style="width: 100%;padding: 22px 20px;margin: 8px 0;box-sizing: border-box;border: none;border-radius:0px;height: 20px;" type="text" name="name" id="name" placeholder="Enter your Name" required="required">
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
</body>
</head>
</html>