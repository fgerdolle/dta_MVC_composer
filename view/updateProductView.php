<?php 
$title = 'Update Product'; 
?>

<?php 
ob_start(); 
?>
    
<h1>Update Product</h1>

<form method="post" action="updateProductController.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<div class="form-group">
    	<label for="productName">Product Name</label>
    	<input type="text" class="form-control standardWidth" id="productName" name="productName" value="<?php echo $productName; ?>">
    	<?php 
    	if (!empty($errors["product.productName"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["product.productName"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
  	
  	<div class="form-group">
    	<label for="productCity">Product City</label>
    	<input type="text" class="form-control standardWidth" id="productCity" name="productCity" value="<?php echo $productCity; ?>">
    	<?php 
    	if (!empty($errors["product.productCity"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["product.productCity"]; ?></span>
        <?php 
    	}
        ?>
  	</div>

      <div class="form-group">
    	<label for="productPrice">Product Price</label>
    	<input type="text" class="form-control standardWidth" id="productPrice" name="productPrice" value="<?php echo $productPrice; ?>">
    	<?php 
    	if (!empty($errors["product.productPrice"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["product.productPrice"]; ?></span>
        <?php 
    	}
        ?>
  	</div>

      <div class="form-group">
    	<label for="productSell">Product Sell </label>
    	<input type="text" class="form-control standardWidth" id="productSell" name="productSell" value="<?php echo $productSell; ?>">
    	<?php 
    	if (!empty($errors["product.productSell"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["product.productSell"]; ?></span>
        <?php 
    	}
        ?>
  	</div>

  	<button type="submit" class="btn black-background">Update</button>
</form>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>