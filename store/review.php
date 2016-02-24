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
</head>

<body>

<header class="container">
	<?php include 'header.php'; ?>
</header>
<?php 
session_start();
//if($_SESSION["trackOrderId" == db session )
echo $_SESSION["trackOrderId"]; 
?>
<section class="container">
	<div class="row">
		<form method="POST" action="thankyou.php" >
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<input type="hidden" name="qty" value="<?php echo $_GET['qty'] ?>">
			<div class='col-md-1'></div>
			<div class='col-md-10'>
				<div class='col-md-9'>
					<h3>Review Order Summary</h3>
					<div class='col-md-2'>
						<img src="http://ecx.images-amazon.com/images/I/51H88Nrhl9L._SY220_.jpg" style="height:80px"  class="img-responsive center-block">
					</div>
					<div class='col-md-10' style="border-bottom: 1px solid #DCDCDC;">
						<h4>Product Full Name</h4>
						<h4 class="form-inline">
						Price: $9999.99
						Quantity: 
						<input type="text" class="form-control"  name="qty" size="4">
						<button type="button" class="btn btn-primary">Update</button>
						<button type="button" class="btn btn-primary">Delete Item</button>
						</h4>
					</div>
<!--				<div class='col-md-2'>
						<img src="http://ecx.images-amazon.com/images/I/51H88Nrhl9L._SY220_.jpg" style="height:80px"  class="img-responsive center-block">
					</div>
					<div class='col-md-10' style="border-bottom: 1px solid #DCDCDC;">
						<h4>Product Full Name</h4>
						<h4 class="form-inline">
						Price: $9999.99
						Quantity: 
						<input type="text" class="form-control"  name="qty" size="4">
						<button type="button" class="btn btn-primary">Update</button>
						<button type="button" class="btn btn-primary">Delete Item</button>
						</h4>
					</div>
					<div class='col-md-2'>
						<img src="http://ecx.images-amazon.com/images/I/51H88Nrhl9L._SY220_.jpg" style="height:80px"  class="img-responsive center-block">
					</div>
					<div class='col-md-10' style="border-bottom: 1px solid #DCDCDC;">
						<h4>Product Full Name</h4>
						<h4 class="form-inline">
						Price: $9999.99
						Quantity: 
						<input type="text" class="form-control"  name="qty" size="4">
						<button type="button" class="btn btn-primary">Update</button>
						<button type="button" class="btn btn-primary">Delete Item</button>
						</h4>
					</div> -->
				</div>				
				<div class='col-md-3' style="border: 1px solid #DCDCDC; margin-bottom: 40px;">
					<h3>Shipping To:</h3>
					<h5>Address</h5>
					<h5>City, State Zipcode</h5>
					<h3>Order Summary:</h3>
					<h5>Items: $800.00</h5>
					<h5>Shipping: $10.00</h5>
					<h5>Total: $810.00</h5>
					<h5>Tax (6.25%): $50.63</h5>
					<h5>Order Total: $860.63</h5>
					<h3>Payment:</h3>
					<h5>Card Type: VISA</h5>
					<input type="Submit" class="btn btn-success" value="Place Order" style="margin-bottom: 15px;">
				</div>
			</div>
			<div class='col-md-1'></div>
		</form>
	</div>
</section>


<footer class="container">
	<?php include 'footer.php'; ?>
</footer>
</body>
</html>