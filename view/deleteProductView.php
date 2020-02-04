<?php 
$title = 'Delete Product'; 
?>

<?php 
ob_start(); 
?>

<div class="alert alert-success" role="alert">Product has been deleted</div>

<br />
<div>          
	<button><a href="ProductController.php" class="btn black-background">
	 Back to list of product 
	</a>
</div>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>