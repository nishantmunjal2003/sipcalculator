<?php include("header.php"); ?>

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

<div style="font-family: Sans-serif ;background-color:rgb(248,249,280);padding:40px;color:black"><h1>Contact for sipcalculator.website</h1>
<p>You can contact for any query about the sipcalculator.website by email on nishant.eth2@gmail.com</p></div>

<?php include("footer.php");?>

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