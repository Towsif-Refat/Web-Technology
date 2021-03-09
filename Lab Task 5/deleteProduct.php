<?php  
require_once 'controller/productInfo.php';

$product = fetchProduct($_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
	<style>
	</style>
</head>
<body>

	 <table style="width: 500px;">
	    <legend><b>DELETE PRODUCT</b></legend>
	    <label for="name">Name: <?php echo $product['name']?></label><br>
	    <label for="name">Buying Price: <?php echo $product['buying price']?></label><br>
	    <label for="name">Selling Price: <?php echo $product['selling price']?></label><br>
	    <label for="name">
	    Displayable: 
	    <?php if ( $product['display']==1): ?>
	    Yes	
	    <?php else: ?>
	    No	
	    <?php endif ?>
	    </label><br>
	    <hr>
	    <form action="controller/deleteProduct.php?id=<?php echo $product['id'] ?>" method="POST">
	    <input type="submit" value="Delete"
	         name="deleteProduct" id="deleteProduct" >
		</form>

	</fieldset>
<footer><a href="displayAllProducts.php" ><b>Go Back</b></a></td></footer>
</body>
</html>