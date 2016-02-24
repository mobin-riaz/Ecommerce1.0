<!DOCTYPE html>
<html>
<title>Ecommerce1.0</title>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="Sample Ecommerce Portal">
    <meta name="author" content="Mobin-Riaz">
    <link rel="shortcut icon" href="img/favicon.png">


    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

<!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
<!--    <link href="css/style.css" rel="stylesheet"> -->
    <link href="css/responsive.css" rel="stylesheet">
<!-- Below scripts are for jquery validation -->	
<!-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<!-- Below scripts is for creditCard check -->
<script src="creditcard.js" type="text/javascript"></script>
</head>

<body>

<header class="container">
	<?php include 'header.php'; ?>
</header>

<section class="container">
	<div class="row">
		<form method="POST" id="ship-pay-form" action="storeMethods.php" >
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<input type="hidden" name="qty" value="<?php echo $_GET['qty'] ?>">
			<div class='col-md-1'></div>
			<div class='col-md-10'>
				<div class='col-md-6'>
				<h3>Shippment</h3>
					<div class="form-group">
						<label for="">Full Name:</label>
						<input type="text" class="form-control" name="fullName" value="Mobin Riaz" required>
					</div>
					<div class="form-group">
						<label for="">Address:</label>
						<input type="text" class="form-control" name="address" value="1002 E Wilson Ave" required>
					</div>
					<div class="form-group">
						<label for="">City:</label>
						<input type="text" class="form-control" name="city" value="Lombard" required>
					</div>
					<div class="form-group">
						<label for="">State:</label>
						<input type="text" class="form-control" name="state" value="IL" required>
					</div>
					<div class="form-group">
						<label for="">Country:</label>
						<input type="text" class="form-control" name="country" value="USA" required>
					</div>
					<div class="form-group">
						<label for="">Phone:</label>
						<input type="text" class="form-control" name="phone">
					</div>
				</div>				
				<div class='col-md-6'>
				<h3>Payment</h3>
					<div class="form-group">
						<label for="">Credit Card#:</label>
						<input type="text" class="form-control" id="creditCard" name="creditCard" value="6011743165479303" required>
					</div>
					<div class="form-group">
						<label for="">Card Type:</label>
						<input type="text" class="form-control" id="cardType" name="cartType" value="Discover" required>
					</div>
					<div class="form-group">
						<label for="">CCV:</label>
						<input type="text" class="form-control" name="ccv" value="223" required>
					</div>
					<div class="form-group">
						<label for="">CC Expiry:</label>
						<input type="text" class="form-control" name="ccExpiry" value="02/2016" required>
					</div>
					<div class="form-group">
						<label for="">Email:</label>
						<input id="cemail" type="email" class="form-control" name="email" value="mob-riz@yaho.com" required>
					</div>
					<div class="form-group">
						<input type="Submit" onClick="testCreditCard(); return false;" class="btn btn-primary" name="Submit" value="Continue">
					</div>		 
				</div>
			</div>
			<div class='col-md-1'></div>
		</form>
	</div>
</section>


<footer class="container">
	<?php include 'footer.php'; ?>
</footer>

<!-- Below scripts are for jquery validation and  -->
<script>
//checkCreditCard (cardnumber, cardname)
//cardnumber comes form input field
//cardname comes from input tag
function testCreditCard() {
  if (checkCreditCard (document.getElementById('creditCard').value,document.getElementById('cardType').value)) {
//    alert ("Credit card has a valid format");
	$("#ship-pay-form").validate();
  } 
  else {
	  alert (ccErrors[ccErrorNo]);
	};
  
}

</script>
</body>
</html>