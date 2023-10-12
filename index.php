<?php
// define variables and set to empty values

$name=$email=$website=0;

$nameErr = $emailErr =  $websiteErr = "";
$name = $email = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "SIP Amount is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!is_numeric($name)) {
      $nameErr = "Only Number is allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Interest % is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!is_float($email)) {
      $emailErr = "Only Number is allowed";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "Tenure in Years";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!is_numeric($website)) {
      $websiteErr = "Only Number is allowed";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
<title>SIP Calculator</title>
<meta charset="UTF-8">
<meta name="description" content="System Investment Plan SIP Calculator is an online tool that can help you to calcualte returns.">
<meta name="keywords" content="sip calculator, financial planning, mutual fund, investment calculator, sip, investment, monthly investment" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/my.css">
<link rel="stylesheet" href="css/css.css?family=Lato">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6007141702343212"
     crossorigin="anonymous"></script>

<style>


body {font-family: "Lato", sans-serif}
</style>
</head>
<body>

<!-- Navbar -->
<?php include("header.php"); ?>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:32px">
   <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-16" style="max-width:800px" id="band">
    <h1 class="w3-wide">SIP CALCULATOR</h1>
    <p class="w3-opacity"><i>CALCULATE AND GAIN WEALTH</i></p>
    <label><a href="https://sipcalculator.website" style="color:white;background-color:black">MONTHLY</a> | <a href="https://sipcalculator.website/lumpsum.php">LUMPSUM</a></label>
    <p class="w3-justify">
      <div class="w3-container w3-content w3-center w3-padding-16" style="max-width:800px" id="band">
      <div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-wide">
              <label>MONTHLY SIP AMOUNT</label><input class="w3-input w3-border" type="number" inputmode="decimal" name="name" value="<?php echo $name;?>" placeholder="SIP AMOUNT" required name="name">
            </div>
            <div class="w3-wide">
              <label>RETURN PERCENTAGE</label><input class="w3-input w3-border" type="number" inputmode="decimal" name="email" value="<?php echo $email;?>" placeholder="RETURN PERCENTAGE EXPECTED" step="any">
            </div>
          </div>
          <div class="w3-wide">
          <label>YEARS</label><input class="w3-input w3-border" type="number" inputmode="decimal" name="website" value="<?php echo $website;?>" placeholder="YEAR" required name="website">
        </div>
          <button class="w3-button w3-black w3-section w3-center" type="submit" name="submit" value="submit">CALCUALTE</button>
        </form>
      </div>
</div>
<br>
<?php
$sipamount=$name;
$l=$sipamount;
$int=$email;
$tenure=$website;

//modified values
$tenurem=(int)$tenure*12;
$intm=(int)$int/12;

//echo "Monthly Amount is :".$sipamount;
//echo "<br>Interest:".$int;
//echo "<br>Tenure:".$tenure;
//echo "<br>";

$k=1;
for($i=0;$i<$tenurem;$i++)
{
  $intmonthly=((float)$sipamount*(float)$intm)/100;
  $sipamount+=(float)$l+(float)$intmonthly;
}
$finalamount=round((float)$sipamount)-(int)$l;
$totalint1=(int)$l*(int)$tenurem;
$finalint=(int)$finalamount-(int)$totalint1;

echo "<div class='w3-wide'>";
echo "-------------------------";
echo "<br>";
echo "Amount Invested in ".$tenure." Years <br>";
echo "<b>Rs. ".(int)$l*(int)$tenurem."</b>";
echo "<br>Wealth Gain:<br><b>Rs. ".$finalint."</b>";
echo "<br>Total Wealth in ".$tenure." years: <br><b>Rs. ".$finalamount."</b>";
echo "<br>";
echo "-------------------------";
echo "</div>";
?>

  </p>
    
  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Why SIP?</h2>
      <p class="w3-opacity w3-center">The Systematic Investment Plan (SIP), which is also just called "SIP," is one type of investment plan that mutual fund companies offer. A systematic investment plan, or SIP, is a way to put money into a mutual fund on a regular basis in amounts that are small enough to handle but still big enough to make a difference. Retail investors who want to build wealth over the long term can benefit from a structured and hands-off approach to investing with systematic investment plans by following a more diversified and less volatile portfolio. By investing the money at regular intervals, you can lessen the bad effects of the market's volatility. Using this calculator, you can figure out how much money you will make and how much you can expect to gain from your systematic investment plan (SIP), which is an investment you make every month. By using a projected annual return rate to figure out the amount that will be reached at maturity for any monthly SIP, you can get a rough estimate of the amount that will be reached at maturity.</p><br>

<h2 align="center">Advantages</h2>
<div class="w3-opacity">
      <p>Putting money into a systematic investment plan, often known as a SIP, is less taxing on one's finances. It would be far more convenient to make twelve payments of 5,000 rupees each over the course of a year as opposed to making a single commitment of 60,000 rupees. A strategy known as rupee-cost averaging is recognised as being among the most important advantages offered by the SIP. You will have the flexibility to buy fewer units when the market is going up and more when it is going down because of the systematic investment plan (SIP).
You have a great deal of latitude in deciding how you want to make use of SIP due to the fact that it is feasible to set it up, alter it, or cancel it at any time. As a consequence of this, you may choose between a variety of possible courses of action. Before you can start investing in the vast majority of funds, you are needed to make a minimum deposit of one thousand Indian Rupees each and every month. This is a prerequisite for investing (INR). </p>
  </div>
        </div>
    </div>
  </div>

  
  <!-- The Contact Section -->
  
  
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

</body></html>