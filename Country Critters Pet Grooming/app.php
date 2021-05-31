<!DOCTYPE html>

<div class="topnav">
    <a href="about.html">About</a>
    <a href="https://www.facebook.com/CCPetGroomer/">Facebook</a>
    <a href="https://www.google.com/maps/dir//country+critters+pet+grooming/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x8822f44422b18a99:0xd9f9c5815181bba9?sa=X&ved=2ahUKEwjyy6nA3IjvAhWFU80KHcUTAIAQ9RcwG3oECD8QBQ">Directions</a>
    <a href="services.html">Services</a>
    <a href="app.php">Client Application</a>
    <a href="index.html">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="changepage()"></a>
    <div class="rightnav">
        Country Critters Pet Grooming
    </div>
    <div class="menu1">
    <button id="openmenubutton"><img src="menu.png" width="50px" height="50px" onclick="openmenu()"></button>
    </div>
</div>

<div class="background"></div>

<body>
<div class="overlay" id="overlay">
    <div class="menu">
    <button id="closemenubutton"><img src="close.jpg" width="50px" height="50px" onclick="closemenu()"></button><br><br>
    <a href="index.html" id="menubutton"><b>Home</b></a><br><br>
    <a href="app.php" id="menubutton"><b>Client Application</b></a><br><br>
    <a href = "services.html" id="menubutton"><b>Services</b></a><br><br>
    <a href="https://www.google.com/maps/dir//country+critters+pet+grooming/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x8822f44422b18a99:0xd9f9c5815181bba9?sa=X&ved=2ahUKEwjyy6nA3IjvAhWFU80KHcUTAIAQ9RcwG3oECD8QBQ" id="menubutton"><b>Directions</b></a><br><br>
    <a href="https://www.facebook.com/CCPetGroomer/" id="menubutton"><b>Facebook</b></a><br><br>
    <a href="about.html" id="menubutton"><b>About</b></a><br><br>
    </div>
  </div>
    <img src="logo.png" id="ccpglogo" class="center">
    <header>Welcome to Country Critters Pet Grooming!</header>
    <div class="caption">
        Paw's Down, Best Clip in Town!
    </div>
    <div class="news">
        <div class="header">
            <b>ALL NEW CLIENTS!</b>
        </div>
        <div class="description">
        Every pet is special to us! We currently have a very busy schedule with clients that book on a regular basis. <br>To ensure we are able to fulfill your need for a groomer please fill out this application. This application is required <br>prior to your first visit, to save time we have this serve as an application as well as a waitlist.
        </div>
    </div>
    <div class="container">
  <form action="" name="client-application" method="post" id="client-application">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your First Name.." class="form-control" required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Last Name.." class="form-control" required>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" placeholder="Your Phone Number.." class="form-control" required>

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email.." class="form-control" required>

    <label for="sa1">Street Address</label>
    <input type="text" id="sa1" name="sa1" placeholder="Your Street Address.." class="form-control" required>

    <label for="sa2">Address Line 2</label>
    <input type="text" id="sa2" name="sa2" placeholder="Address Line 2?" class="form-control">

    <label for="city">City</label>
    <input type="text" id="city" name="city" placeholder="Your City.." class="form-control" required>

    <label for="zip">Zip Code</label>
    <input type="text" id="zip" name="zip" placeholder="Your Zip Code.." class="form-control" required>

    <label for="pet">What Is Your Pet's Name</label>
    <input type="text" id="pet" name="pet" placeholder="Your Pet's Name.." class="form-control" required>

    <label for="age">What Is Your Pet's Age</label>
    <input type="text" id="age" name="age" placeholder="Your Pet's Age.." class="form-control" required>

    <label for="breed">What Is Your Pet's Breed</label>
    <input type="text" id="breed" name="breed" placeholder="Your Pet's Breed.." class="form-control" required>

    <label for="nonut">Is Your Pet Spayed/Neutered?</label>
    <input type="text" id="nonut" name="nonut" placeholder="Is Your Pet Spayed/Neutered?" class="form-control" required>

    <label for="hba">List of All Your Pet's Health Concerns, Behavioral Concerns, and Allergies</label>
    <input type="text" id="hba" name="hba" placeholder="List of All Your Pet's Health Concerns, Behavioral Concerns, and Allergies.." class="form-control" required>

    <label for="casualquestion">How did you hear about us?</label>
    <input type="text" id="casualquestion" name="casualquestion" placeholder="How did you hear about us?" class="form-control" required>

    <label for="pregs">What Was Your Previous Grooming Salon?</label>
    <input type="text" id="pregs" name="pregs" placeholder="What Was Your Previous Grooming Salon.." class="form-control" required>

    <label for="alg">What Was Your Approximate Last Grooming?</label>
    <input type="text" id="alg" name="alg" placeholder="Your Last Grooming.." class="form-control" required>

    What is the best day for you to schedule? We work by appointment only so please pick all that will work with your schedule.<br>
    <input type="checkbox" id="monday" name="monday" value="Monday" class="form-control">
    <label for="monday">Monday</label><br>
    <input type="checkbox" id="tuesday" name="tuesday" value="Tuesday" class="form-control">
    <label for="tuesday">Tuesday</label><br>
    <input type="checkbox" id="wednesday" name="wednesday" value="Wednesday" class="form-control">
    <label for="wednesday">Wednesday</label><br>
    <input type="checkbox" id="thursday" name="thursday" value="Thursday" class="form-control">
    <label for="thursday">Thursday</label><br><br>

    Prefered Frequency?<br>
    <input type="checkbox" id="bi" name="bi" value="Bi-Weekly" class="form-control">
    <label for="bi">Bi-Weekly</label><br>
    <input type="checkbox" id="threeweeks" name="threeweeks" value="ThreeWeeks" class="form-control">
    <label for="threeweeks">3 Weeks</label><br>
    <input type="checkbox" id="fourweeks" name="fourweeks" value="FourWeeks" class="form-control">
    <label for="fourweeks">Four Weeks</label><br>
    <input type="checkbox" id="sixweeks" name="sixweeks" value="SixWeeks" class="form-control">
    <label for="sixweeks">Six Weeks</label><br>
    <input type="checkbox" id="other" name="other" value="Other" class="form-control">
    <label for="other">Other</label><br><br>

    Upload A Recent Photo of Your Pet.<br>
    <label for="dog">Select a file:</label>
    <input type="file" id="dog" name="dog" class="form-control" required>

    <br><br><br><input type="submit" value="Submit">
    <img src="loading.gif" id="loading-img" class="loading-img">
  </form>
  <div class="response_msg"></div>
</div>
</body>

<script>
    function changepage() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }</script>

<script>
  function openmenu(){
    var buttonpress = document.getElementById("openmenubutton")
    var overlaymenu = document.getElementById("overlay")
    buttonpress.style.display = 'none'
    overlaymenu.style.display = 'block'
    console.log("open")
  }
  function closemenu(){
    var buttonpress = document.getElementById("openmenubutton")
    var overlaymenu = document.getElementById("overlay")
    overlaymenu.style.display = 'none'
    buttonpress.style.display = 'block'
    console.log("close")
  }
</script>

<link rel="stylesheet" href="styles.css">
<title>Country Critters Pet Grooming</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script>
$(document).ready(function(){
$("#client-application").on("submit",function(e){
e.preventDefault();
if($("#client-application [name='firstname']").val() === '')
{
$("#client-application [name='firstname']").css("border","1px solid red");
}
else if ($("#client-application [name='your_email']").val() === '')
{
$("#client-application [name='your_email']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(200000);
$("#client-application").find("input[type=text], input[type=email], textarea").val("");
}
});
}
});
$("#client-application input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>

</html>