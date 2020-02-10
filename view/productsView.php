<?php 
$title = 'List of Products'; 
?>

<?php 
ob_start(); 
?>

<h1>List of Products</h1>
<br />
<div>          
	<a href="addProductController.php" class="btn btn-primary">
	<i class="fas fa-plus"></i> Add Product 
	</a>
</div>
<br />

<table class="table table-striped">
        
	<thead>
		<tr>
			<th>#</th>
			<th>Product Name</th>
			<th>Product City </th>
            <th>Product Price </th>
            <th>Product Sell </th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
<?php
        foreach ($products as $product) {
?>
		<tr>
			<th scope="row"><?php echo $product->id ?></th> 
			<td><?php echo $product->productName ?></td>
			<td><?php echo $product->productCity ?></td>
            <td><?php echo $product->productPrice ?></td> 
			<td><?php echo $product->productSell ?></td> 
			<td><a href="updateProductController.php?id=<?php echo $product->id ?>"><i class="fas fa-pencil-alt"></i></a></td>
			<td><a href="deleteProductController.php?id=<?php echo $product->id ?>"><i class="fas fa-trash-alt"></i></a></td>
		</tr>
<?php 
        }
?>	  			
	</tbody>
</table>    

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>