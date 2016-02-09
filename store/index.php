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

    <title>Arillo</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

<!-- Custom styles for this template -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,600,800' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>

<header class="container">
<?php include 'header.php'; ?>
</header>

<section class="container">
<div class="row">
<?php
   // connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully";
	
   // select a database
   $db = $m->ecommerce;
   //echo "Database ecommerce selected";
   $collection = $db->products;
   //echo "Collection selected succsessfully";

   $cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
//      echo $document["price"] . "<br>";
?>
<div class="col-md-4 col-sm-4 col-xs-12">
	<div class="property-container">
	  <div class="property-image">
		<img src="<?php echo $document["smallImage"]; ?>" align="middle" alt="">
		<div class="property-price">
		  <h4></h4>
		  <span><?php echo "$ ".$document["price"]; ?></span>
		</div>
	  </div>
	  <div class="property-content">
		<h3><a href="#"><?php echo substr($document["productName"], 0, 25)."..."; ?></a> <small>Qty: <?php echo $document["quantity"]; ?></small></h3>
		<p><?php echo substr($document["smallDescription"], 0, 70)."..."; ?></p>
	  </div>
	  <div class="property-features">
		<span>Color: <?php echo ucfirst($document["color"]); ?></span>
	  </div>
	</div>
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