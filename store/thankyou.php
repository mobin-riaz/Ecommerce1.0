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

<section class="container">
	<div class="row">
		<form method="GET" action="" >
		<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
		<input type="hidden" name="qty" value="<?php echo $_GET['qty'] ?>">
			<div class='col-md-1'></div>
			<div class='col-md-10'>
				<div class='col-md-9'>
					<h3>Thankyou</h3>
					<h4>Your order has been queued, someone in the office will contact you if we need any information.</h4>
				</div>	
				<div class='col-md-3'>
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