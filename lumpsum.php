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
    
<title>SIP Lumsump Calculator</title>
<meta name="description" content="Investing is always good. Got bonus and looking for investment, you can still invest lumpsum in Mutual Funds. Calculate your returns before investing in any fund based on its previous records.">
<meta name="keywords" content="financial planning, calculator, sip calculator, lumpsump investment, investment, investment plan, invest in mutual fund, invest through mutual fund, invest monthly" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/my.css">
<link rel="stylesheet" href="css/css.css?family=Lato">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6007141702343212" crossorigin="anonymous"></script>

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
    <h2 class="w3-wide">SIP CALCULATOR</h2>
    <p class="w3-opacity"><i>CALCULATE AND GAIN WEALTH</i></p>
    <label><a href="https://sipcalculator.website">MONTHLY</a> | <a href="https://sipcalculator.website/lumpsum.php" style="color:white;background-color:black">LUMPSUM</a></label>
    <p class="w3-justify">
      <div class="w3-container w3-content w3-center w3-padding-16" style="max-width:800px" id="band">
      <div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-wide">
              <label>LUMPSUM AMOUNT</label><input class="w3-input w3-border" type="number" inputmode="decimal" name="name" value="<?php echo $name;?>" placeholder="LUMPSUM AMOUNT" required name="name">
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
$lumpsumamount=$name;
$l=$lumpsumamount;
$int=$email;
$tenure=$website;

//modified values
$tenurem=(int)$tenure*12;
$intm=(int)$int/12;

$k=1;
for($i=0;$i<$tenure;$i++)
{
  $lumpsumamount+=((float)$lumpsumamount*(float)$int)/100;
}
//$finalamount=round((float)$sipamount);
//$totalint1=(int)$l*(int)$tenurem;
//$finalint=(int)$finalamount;

echo "<div class='w3-wide'>";
echo "-------------------------";
echo "<br>";
echo "Amount Invested<br>";
echo "<b>Rs. ".(int)$l."</b>";
echo "<br>Wealth Gain:<br><b>Rs. ".(int)($lumpsumamount-$l)."</b>";
echo "<br>Total Wealth in ".$tenure." years: <br><b>Rs. ".(int)$lumpsumamount."</b>";
echo "<br>";
echo "-------------------------";
echo "</div>";
?>

  </p>
    
<!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Why SIP?</h2>
      <p class="w3-opacity w3-center">A "lump sum" is a large amount of money that is invested in a mutual fund all at once. The term "lump sum" is used to describe this kind of investment commitment when it comes to mutual funds. The SIP method, on the other hand, involves spreading it out over a bit longer period of time (Systematic Investment Plans).

When it comes to investing in mutual funds, big players and investors tend to prefer lump-sum investments. This is especially true for players and investors whose ability to make money depends on how much company stock goes up. If an investor is willing to take on a lot of risk and has a lot of money to invest, they could benefit from investing a lump sum in a mutual fund.


For example, say you find out one year that you are eligible for a very large bonus. After taking into account all of your expected costs and obligations, including investments, you still have 50,000 rupees to invest. This means that you have 75,000 rupees left over. You decide that it is best to take a chance with this amount, even though it is too much and you don't know how it will be used. You can choose to invest the whole amount in a single mutual fund strategy that is designed to meet your needs in the best way. It's likely that this is different from investing Rs. 6,250 per month for a whole year.</p><br>

        </div>
    </div>
  </div>

  
  <!-- The Contact Section -->
  
  
<!-- Footer -->
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