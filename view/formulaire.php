<?php 
$title = 'Add User'; 
?>

<?php 
ob_start(); 
?>
<div class="container-fluid">
<h1>Add User</h1>
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
<form action="addUserController.php" method ="POST">
    <div>
        <input type="text"  name="firstName" class="form-control" placeholder="FirstName" value="<?php  echo $firstName;?>">
    </div>
    <br>
    <div>
        <input type="text" name="lastName" class="form-control" placeholder="LastName" value="<?php  echo $lastName;?>">
    </div>
    <br>
    <div>
        <input type="password" id="inputPassword6" name="password" class="form-control" aria-describedby="passwordHelpInline" placeholder="password">
        <small id="passwordHelpInline" class="text-muted">
        Must be < 45 characters long.
        </small>
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