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
if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) ) {
    //do something
// echo $_GET['id'];
   // connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully";
	
   // select a database
   $db = $m->ecommerce;
   //echo "Database ecommerce selected";
   $collection = $db->products;
   //echo "Collection selected succsessfully";

   $cursor = $collection->find(array('_id'=> new MongoId($_GET['id'])));
   // iterate cursor to display title of documents	
} else {
    header("Location: ./");; //redirect is a function
}
?>

<?php 	  
//   }
?>

<section class="container">
	<?php
		foreach ($cursor as $document) {
	?>
	<div class="row" style="margin-bottom: 30px;">
	<div class='col-md-4'>
		<img src="<?php echo $document["largeImage"] ?>" class="img-responsive center-block">
	</div>



	<div class='col-md-8'>
		<h1><?php echo $document["productName"] ?></h1>
		<h4>Price: $<?php echo $document["price"] ?></h4>
		<h4>Color: <?php echo ucfirst($document["color"]) ?></h4>
		<h4><b>Product Description:</b></h4>
		<h5><?php echo $document["smallDescription"] ?></h5>


		<h5><?php echo $document["largeDescription"] ?>
		</h5>
		<form method="GET" action="ship-pay.php" >
			<h4><b>Quantity: </b>
			<input type="text" name="qty"size="4">
			<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
			</h4>
			<input type="Submit" class="btn btn-primary" value="Add to Cart">
		</form>
	</div>
	<?php 	
	}
	?>
	</div>
</section>


<footer class="container">
	<?php include 'footer.php'; ?>
</footer>
</body>
</html>