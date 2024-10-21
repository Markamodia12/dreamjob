<?php require_once 'core/dbconfig.php'; ?>
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
	<h3>Welcome to the Gym Membership System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="age">age</label> <input type="text" name="age"></p>
		<p><label for="email">email</label> <input type="text" name="email"></p>
		<p><label for="gender">gender</label> <input type="text" name="gender"></p>
		<p><label for="nationality">nationality</label><input type="text" name="nationality"></p>
        <p><label for="skills">skills</label> <input type="text" name="skills">
			<input type="submit" name="insertBtn">
		</p>
	</form>


	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>employeeID</th>
	    <th>firstName</th>
	    <th>lastName</th>
	    <th>age</th>
	    <th>email</th>
	    <th>gender</th>
	    <th>nationality</th>
	    <th>skills</th> 
	    <th> Action </th> 
	  </tr> 

	  <?php $insertIntoemployee = seeAllemployee($pdo); ?>
	  <?php foreach ($insertIntoemployee as $row) { ?>
	  <tr>
	  	<td><?php echo $row['employeeID']; ?></td>
	  	<td><?php echo $row['firstName']; ?></td>
	  	<td><?php echo $row['lastName']; ?></td>
	  	<td><?php echo $row['age']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['gender']; ?></td>
	  	<td><?php echo $row['nationality']; ?></td>
	  	<td><?php echo $row['skills']; ?></td>
	  	<td>
	  		<a href="editemployee.php?employeeID=<?php echo $row['employeeID'];?>">Edit</a>
	  		<a href="deleteemployee.php?employeeID=<?php echo $row['employeeID'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>