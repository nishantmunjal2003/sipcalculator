<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/my.css">
<link rel="stylesheet" href="css/css.css?family=Lato">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<style>
body {font-family: "Lato", sans-serif}
</style>
</head>
<body>

<!-- Navbar -->
<?php include("header.php"); ?>

<div style="font-family: Sans-serif ;background-color:rgb(248,249,250);padding:40px;color:black"><br><h2 style="algin:center font-family: Sans-serif ;color:black;">About Us !</h2>
<h2 style="font-family: Sans-serif ;text-align: center;">Welcome To <span id="W_Name1" >sipcalculator.nishantmunjal.com</span></h2>
<p><span id="W_Name2">sipcalculator.nishantmunjal.com</span> is a Professional <span id="W_Type1">SIP Calculator, EMI Calculator</span> Platform. Here we will only provide you with interesting content that you will enjoy very much. We are committed to providing you the best of <span id="W_Type2">SIP Calculator, EMI Calculator</span>, with a focus on reliability and <span id="W_Spec">Day to day use Calculator</span>. we strive to turn our passion for <span id="W_Type3">SIP Calculator, EMI Calculator</span> into a thriving website. We hope you enjoy our <span id="W_Type4">SIP Calculator, EMI Calculator</span> as much as we enjoy giving them to you.</p>
<p>I will keep on posting such valuable anf knowledgeable information on my Website for all of you. Your love and support matters a lot.</p>
<p style="font-weight: bold; text-align: center;">Thank you For Visiting Our Site<br><br>
<span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">Have a great day !</span></p></div><br><br>

<?php include("footer.php");?>
</div>
</div>
<script>
// Automatic Slideshow - change image every 4 seconds
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
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>