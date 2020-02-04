<?php 
$title = 'List of Users'; 
?>

<?php 
ob_start(); 
?>

<h1>List of Users</h1>
<br />
<div>          
	<a href="addUserController.php" class="btn btn-primary">
	<i class="fas fa-plus"></i> Add user 
	</a>
</div>
<br />

<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
<?php
        foreach ($users as $user) {
?>
		<tr>
			<th scope="row"><?php echo $user->id ?></th> 
			<td><?php echo $user->firstName ?></td>
			<td><?php echo $user->lastName ?></td> 
			<td><a href="updateUserController.php?id=<?php echo $user->id ?>"><i class="fas fa-pencil-alt"></i></a></td>
			<td><a href="deleteUserController.php?id=<?php echo $user->id ?>"><i class="fas fa-trash-alt"></i></a></td>
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