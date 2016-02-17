<?php
	echo "outside if";
	echo $_GET['id'];

if(isset($_REQUEST['Submit']))
{
	echo "inside if";
   initializeOrder();
} 
function initializeOrder() {
   // connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully";
	
   // select a database
   $db = $m->ecommerce;
   //echo "Databecommercease mydb selected";
   $collection = $db->fakeOrder;
   //echo "Collection selected succsessfully";
	
   $document = array( 
      "id" => $_POST['id'], 
      "qty" => $_POST['qty'], 
      "fullName" => $_POST['fullName'], 
      "address" => $_POST['address'], 
      "city" => $_POST['city'], 
      "state" => $_POST['state'], 
      "country" => $_POST['country'], 
      "phone" => $_POST['phone'], 
      "creditCard" => $_POST['field'], 
      "cardType" => $_POST['cartType'], 
      "ccv" => $_POST['ccv'], 
      "ccExpiry" => $_POST['ccExpiry'], 
      "email" => $_POST['email']
  );
	
   $collection->insert($document);
   echo "Document inserted successfully";
   header("Location: review.php");; //redirect is a function

}

?>