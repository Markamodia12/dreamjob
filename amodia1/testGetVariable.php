
<?php  

if (isset($_GET['memberName'])) {
	echo "<h2>Member Name: " . $_GET['memberName'] . "</h2>";
}

if (isset($_GET['MembershipStartDate'])) {
	echo "<h2>Membership Start Date: " . $_GET['MembershipStartDate'] . "</h2>";
}


?>
