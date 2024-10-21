<?php 

require_once 'dbconfig.php'; 
require_once 'models.php';

if(isset($_POST['InsertBtn'])){
   echo "<pre>";
   print_r($_POST);
   echo "</pre>";
}
if (isset($_POST['insertBtn'])) {

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];
	$skills = $_POST['skills'];

	if (!empty($firstName) && !empty($lastName) && !empty($age) && !empty($email ) && !empty($gender) && !empty($nationality)  && !empty($skills)) {

			$query = insertIntoemployee($pdo, $firstName, $lastName, 
			$age, $email, $gender, $nationality, $skills);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editBtn'])) {

	$employeeID = $_GET['employeeID'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];
	$skills = $_POST['skills'];

	if (!empty($firstName) && !empty($lastName) && !empty($age) && !empty($email ) && !empty($gender) && !empty($nationality)  && !empty($skills)) {

		$query = updateASemployee($pdo, $employeeID, $firstName, $lastName, $email, 
			$age, $gender, $nationality, $skills);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteBtn'])) {

	$query = deleteASemployee($pdo, $_GET['employeeID']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>