<?php
// define variables and set to empty values


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
<title>EMI Calculator</title>
<meta name="description" content="Loans made things simpler, it fulfills the demand to grow big, but always look the EMI before taking any loan. With EMI Calculator you can check the repayment monthly EMI and calculate your financial.">
<meta name="keywords" content="emi calculator, loan calculator, financial planning, personal loan calculator, car loan, car loan calculator, emi, loan, student loan, home loan" />
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

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:32px">
   <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-16" style="max-width:800px" id="band">
    <h2 class="w3-wide">EMI CALCULATOR</h2>
    <p class="w3-opacity"><i>CALCUALTE & UNDERSTAND BEFORE TAKING ANY LOAN</i></p>
    <p class="w3-justify">
      <div class="w3-container w3-content w3-center w3-padding-16" style="max-width:800px" id="band">
      <div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-wide">
              <label>LOAN AMOUNT</label><input class="w3-input w3-border" type="number" inputmode="decimal" name="name" value="<?php echo $name;?>" placeholder="LOAN AMOUNT" >
            </div>
            <div class="w3-wide">
              <label>INTEREST PERCENTAGE</label><input class="w3-input w3-border" type="number" inputmode="decimal" name="email" value="<?php echo $email;?>" placeholder="INTEREST PERCENTAGE" step="any">
            </div>
          </div>
          <div class="w3-wide">
          <label>LOAN TENURE(MONTHS)</label><input class="w3-input w3-border" type="number" inputmode="decimal" name="website" value="<?php echo $website;?>" placeholder="TENURE IN MONTHS" required name="website">
        </div>
          <button class="w3-button w3-black w3-section w3-center" type="submit" name="submit" value="submit">CALCUALTE</button>
        </form>
      </div>
</div>
<br>
<?php
if(!isset($_POST['submit']))
{
    $name=$email=$website=1;
}
$loanamount=$name;
$l=$loanamount;
$int=$email;
$tenure=$website;

//modified values
$roi=(float)$int/12/100;
$emimiddle=(float)pow((1+$roi),(int)$tenure);
$emi=round((float)$loanamount*(float)$roi*((float)$emimiddle/((float)$emimiddle-1)));

//echo "Monthly Amount is :".$sipamount;
//echo "<br>Interest:".$int;
//echo "<br>Tenure:".$tenure;
//echo "<br>";

$totalintpaid=((float)$emi*(float)$tenure)-(float)$loanamount;
$gstonint=(($totalintpaid*18)/100)+(float)$totalintpaid;
$totalamount=(float)$emi*(float)$tenure;


echo "<div class='w3-wide'>";
echo "-------------------------";
echo "<br>";
echo "Monthly EMI is <br><b>Rs.".$emi."</b>";
echo "<br>Total Interest Payble<br><b>Rs.".$totalintpaid."</b>";
echo "<br>Total Amount (Interest+Principle) in ".$tenure." months: <br><b>Rs.".$totalamount."</b>";
echo "<br>";
echo "-------------------------";
echo "</div>";

echo "<b>You are paying a total interest of Rs".(float)$totalintpaid."+GST(18%)= Rs ".$gstonint."</b>";
echo "<h5 class='w3-amber'><b>Invest 10% of your Monthly EMI through SIP and your loan will be Interest Free</b><br>";
echo "<b><a href='https://sipcalculator.nishantmunjal.com' style='color:blue'>Plan your investment. Use SIP Calulator to calculate.</a></b></h5>";

//more detail about the loan
$interestmonthlyper=(float)$int/12;
$totalpayment=0;

echo "<div>";
echo "<table class='w3-table-all' width='100%'>";
echo "<thead class='w3-bordered'><th>Principle(Rs)</th><th>Interest(Rs)</th><th>Balance(Rs)</th></thead>";
for($i=0;$i<$tenure;$i++)
{
    $intrs=round((((float)$l*(float)$interestmonthlyper)/100),0);
    $balance=$l-($emi-$intrs);
    $l=$balance;
    
    echo "<tr><td>".($emi-$intrs)."</td><td>".$intrs."</td><td>".$balance."</td></tr>";
}
echo "</table></div>";
?>
  </p>
        </div>
    </div>
  </div>
  
<!-- The Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Loan Calculator</h2>
      <p class="w3-opacity w3-center">Before you take out any kind of loan, whether it's a secured or unsecured advance, you should find out how much you'll have to pay each month. This is an important step to take before you can get any kind of loan. This is true no matter what kind of loan you want, whether it's a secured loan or an unsecured one. In this situation, it might be very helpful to use an EMI calculator in India.

It makes it easier for you to get a good estimate of the total amount of your EMI, which then lets you plan your finances based on what you've learned. If you want to improve your chances of getting a loan, you should try to get the amount of money you owe to less than half of what you make.

EMI Calculator enables you save vital time. You won't have to do complicated calculations by hand, which takes away a step that could be very time-consuming. It takes away the chance of making a mistake in the calculation and always gives you an accurate estimate.</p><br>

        </div>
    </div>
  </div>  
  
  
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