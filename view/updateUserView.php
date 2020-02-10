<?php 
$title = 'Update User'; 
?>

<?php 
ob_start(); 
?>
    
<h1>Update User</h1>

<form method="post" action="updateUserController.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<div class="form-group">
    	<label for="firstName">First Name</label>
    	<input type="text" class="form-control standardWidth" id="firstName" name="firstName" value="<?php echo $firstName; ?>">
    	<?php 
    	if (!empty($errors["user.firstName"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["user.firstName"]; ?></span>
        <?php 
    	}
        ?>
  	</div>
  	
  	<div class="form-group">
    	<label for="lastName">Last Name</label>
    	<input type="text" class="form-control standardWidth" id="lastName" name="lastName" value="<?php echo $lastName; ?>">
    	<?php 
    	if (!empty($errors["user.lastName"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["user.lastName"]; ?></span>
        <?php 
    	}
        ?>
  	</div>

      <div class="form-group">
    	<label for="password">Password</label>
    	<input type="password" class="form-control standardWidth" id="password" name="password" value="<?php echo $password; ?>">
    	<?php 
    	if (!empty($errors["user.password"])) {
    	?>
        <span class="label label-danger"><?php echo $errors["user.password"]; ?></span>
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