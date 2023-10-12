
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

<div style="font-family: Sans-serif ;background-color:rgb(248,249,280);padding:40px;color:black"><h1>Disclaimer for SIP Calculator</h1>
<p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at nishant.eth2@gmail.com</p>
<h2>Disclaimers for SIP Calculator</h2>
<p>All the information on this website - sipcalculator.website - is published in good faith and for general information purpose only. SIP Calculator does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (SIP Calculator), is strictly at your own risk. SIP Calculator will not be liable for any losses and/or damages in connection with the use of our website.</p>
<p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>
<p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>
<h2>Consent</h2>
<p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
<h2>Update</h2>
<p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p></div>

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