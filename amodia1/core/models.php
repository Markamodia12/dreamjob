<?php  

require_once 'dbconfig.php';

function insertIntoemployee($pdo, $firstName, $lastName, $age, $email, $gender, $nationality, $skills) {

	$sql = "INSERT INTO employee (firstName, lastName, age, email, gender, nationality, skills) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute(
		[$firstName, $lastName, $age, $email, $gender, $nationality, $skills]

	);

	if ($executeQuery) {
		return true;
	}
}

function seeAllemployee($pdo) {
	$sql = "SELECT * FROM employee";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getemployeeID($pdo, $employeeID) {
	$sql = "SELECT * FROM employee WHERE employeeID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$employeeID]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function updateASemployee($pdo,$employeeID, $firstName, $lastName, $age, $email, $gender, $nationality, $skills) {

	$sql = "UPDATE employee
				SET firstName = ?,
					lastName = ?,
				    age = ?,
					email = ?,
					gender = ?,
					nationality = ?,
					skills = ?
			WHERE employeeID = ?";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute(
		[$firstName, $lastName, $age, $email, $gender, $nationality, $skills, $employeeID]
	);

	if ($executeQuery) {
		return true;
	}

}

function deleteASemployee($pdo, $employeeID) {

	$sql = "DELETE FROM employee WHERE employeeID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$employeeID]);

	if ($executeQuery) {
		return true;
	}
}

?>
