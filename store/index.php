<!DOCTYPE html>
<html>
<title>Ecommerce1.0</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
</head>
<body class="container">

<header>
<?php include 'header.php'; ?>
</header>

<section>

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
	
//   foreach ($cursor as $document) {
//      echo $document["price"] . "<br>";
//   }
?>
<div class="container">
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>
      <div class="col-sm-3">
       <p>Some text..</p>
      </div>

</div>

</section>


<footer>
<?php include 'footer.php'; ?>
</footer>
</body>
</html>