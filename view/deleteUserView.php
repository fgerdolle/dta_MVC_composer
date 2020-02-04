<?php 
$title = 'Delete User'; 
?>

<?php 
ob_start(); 
?>

<div class="alert alert-success" role="alert">User has been deleted</div>

<br />
<div>          
	<button><a href="UsersController.php" class="btn black-background">
	 Back to list of users 
	</a>
</div>

<?php 
$content = ob_get_clean(); 
?>

<?php 
require('../template/template.php'); 
?>