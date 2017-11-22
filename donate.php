<?php 
include('header.php');

if($_SERVER['REQUEST_METHOD']=="POST")
{
	
require __DIR__.'/PayPal-PHP-SDK/autoload.php'; 
// After Step 1
$apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AYSq3RDGsmBLJE-otTkBtM-jBRd1TCQwFf9RGfwddNXWz0uFU9ztymylOhRS',     // ClientID
            'EGnHDxD_qRPdaLdZz8iCr8N7_MzF-YHPTkjs6NKYQvQSBngp4PTTVWkPZRbL'      // ClientSecret
        )
);


$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');

$amount = new \PayPal\Api\Amount();
$amount->setTotal('1.00');
$amount->setCurrency('USD');

$transaction = new \PayPal\Api\Transaction();
$transaction->setAmount($amount);

$redirectUrls = new \PayPal\Api\RedirectUrls();
$redirectUrls->setReturnUrl("http://localhost:8080/janmbhoomi/donate.php")
    ->setCancelUrl("http://localhost:8080/janmbhoomi/donate.php");

$payment = new \PayPal\Api\Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions(array($transaction))
    ->setRedirectUrls($redirectUrls);
	
	
	// After Step 3
try {
    $payment->create($apiContext);
	//echo $payment['_propMap:PayPal\Common\PayPalModel:private']['links'][1]['_propMap:PayPal\Common\PayPalModel:private']['href'];die;
    echo '<a href="'.$payment->getApprovalLink().'">Click to proceed</a>';

    
}
catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // This will print the detailed information on the exception.
    //REALLY HELPFUL FOR DEBUGGING
    echo $ex->getData();
}

}
?>
<html>
<head>
<title>Donate us</title>
</head>
<body>


<?php if(isset($_SESSION['name']))
{?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Enter amount:<br>
<input type="text" name="amount">
<br>

<input type="submit" value="Donate">
</form>
<?php }else{?>

<div class="container">
<div class="row">
<div class="col-lg-2">
</div>
<div class="col-lg-8 col-sm-12 col-xs-12">
<h1 style="height:50px;color:#ffffff;text-align:center;background-color:#de4949;">Register</h1>
</div>
</div>
<br>
<br>
<div class="row" >
<div class="col-lg-2">
</div>
<div class="col-lg-8 col-sm-12 col-xs-12">
<form action="connection.php"  method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <input type="name" class="form-control" placeholder="First Name" name="fname" required="true">
  </div>
  <div class="form-group">
    <input type="lname" class="form-control" placeholder="Last Name" name="lname" required="true">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Contact" name="contact" required="true">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Email" name="email" required="true">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="password" placeholder="password" name="password" required="true">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="confirm_password" placeholder="repassword" name="repassword" required="true">
  </div>
  <div class="form-group">
    <textarea class="form-control" placeholder="About Yourself" rows="5"name="introduction" required="true"></textarea>
  </div>
 

<div class="form-group">
    <input type="text" class="form-control" placeholder="Enter amount to donate" name="amount" required="true">
  </div>

<input type="submit" value="Donate">
</form>
  <div class="form-group">
  <label>
    <input type="file" class="form-control" placeholder="UploadYourPhoto" name="image" required="true">
  </div>
  <button type="submit" onclick="validatePassword()" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</div>
<?php } ?>
<br>
<br>
</body>
</html>


</body>
</html>