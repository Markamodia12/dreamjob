<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this employee?</h1>
	<?php $getemployeeID = getemployeeID($pdo, $_GET['employeeID']); ?>
	<form action="core/handleForms.php?employeeID=<?php echo $_GET['employeeID']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getemployeeID['firstName']; ?></p>
			<p>Last Name: <?php echo $getemployeeID['lastName']; ?></p>
			<p>Age: <?php echo $getemployeeID['age']; ?></p>
			<p>Email: <?php echo $getemployeeID['email']; ?></p>
			<p>Gender: <?php echo $getemployeeID['gender']; ?></p>
			<p>Nationality: <?php echo $getemployeeID['nationality']; ?></p>
			<p>Skills: <?php echo $getemployeeID['skills']; ?></p>
			<input type="submit" name="deleteBtn" value="Delete">
		</div>
	</form>
</body>
</html>
