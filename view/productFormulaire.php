<?php 
$title = 'Add Product'; 
?>

<?php 
ob_start(); 
?>
<div class="container-fluid">
<h1>Add Product</h1>
<br />

<?php
    if(!empty($errors)){
?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php           
                foreach($errors as $error){ 
                
                    echo '<li>'.$error.'</li>';
               } 
            ?>
        </ul>
    </div>
<?php
}
?>
<form action="addProductController.php" method ="POST">
    <div>
        <input type="text"  name="productName" class="form-control" placeholder="productName" value="<?php  echo $productName;?>">
    </div>
    <br>
    <div>
        <input type="text" name="productCity" class="form-control" placeholder="productCity" value="<?php  echo $productCity;?>">
    </div>
    <br>
    <div>
        <input type="text" name="productPrice" class="form-control" placeholder="productPrice" value="<?php  echo $productPrice;?>">
    </div>
    <br>
    <div>
        <input type="text" name="productSell" class="form-control" placeholder="productSell" value="<?php  echo $productSell;?>">
    </div>
  
    
    <button type="submit"> Submit </button>
</form>
</div>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>