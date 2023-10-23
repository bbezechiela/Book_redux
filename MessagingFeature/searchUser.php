<?php
	include 'connection.php';

	$username = $_GET["username"];

	$selectUserQuery = "SELECT userID, username FROM loginDB WHERE username='$username'";
	$result = $conn->query($selectUserQuery);

	if ($result->num_rows > 0) {
		$userDetails = array();
		while ($row = $result->fetch_assoc()) {
			$userDetails[] = $row;
		}

		// Send JSON response ha client
		header("Content-Type: application/json");
		echo json_encode($userDetails);
	} else {
		header("Content-Type: application/json");
		echo json_encode(array());
	}

	// close connection
	$conn->close();
?>
