<?php require_once 'core/models.php'; ?>
<?php require_once 'core/handleForms.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2 style="color: red">The Member ID is <?php echo $_GET['employeeID']; ?></h2>

	<?php $getemployeeID = getemployeeID($pdo, $_GET['employeeID']); ?>
	<form action="core/handleForms.php?employeeID=<?php echo $getemployeeID['employeeID']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getemployeeID['firstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getemployeeID['lastName']; ?>">
		</p>
		<p>
			<label for="age">age</label>
			<input type="text" name="age" value="<?php echo $getemployeeID['age']; ?>">
		</p>
		<p>
			<label for="email">email</label> 
			<input type="text" name="email" value="<?php echo $getemployeeID['email']; ?>">
		</p>
		<p>
			<label for="gender">gender</label> 
			<input type="text" name="gender" value="<?php echo $getemployeeID['gender']; ?>">
		</p>
		<p>
			<label for="nationality">nationality</label>
			<input type="text" name="nationality" value="<?php echo $getemployeeID['nationality']; ?>">
		</p>
		<p>
			<label for="skills">skills</label> 
			<input type="text" name="skills" value="<?php echo $getemployeeID['skills']; ?>">
			<input type="submit" name="editBtn">
		</p>
	</form>

</body>
</html>