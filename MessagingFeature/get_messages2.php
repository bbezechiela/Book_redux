<?php
	// open sessions
	session_start();

	// db connection
	include 'connection.php';

	// getting conversationID
	//$conversationID = $_GET["conversationID"];

	$conversationName = $_GET["conversationName"];

	// getting timestamp;
	$lastMessageTimestamp = $_GET["lastMessageTimestamp"];

	// queries
	$sqlQuery = "SELECT * FROM conversationDB WHERE conversationName LIKE '%$currentUserName%'";
	$result = $conn->query($sqlQuery);

	if ($result->num_rows > 0) {
		$anotherQuery = "SELECT * FROM messageDB WHERE timestamp > '$lastMessageTimestamp' AND conversationID = '$conversationID'";
		$secondResult = $conn->query($anotherQuery);

		if ($secondResult->num_rows > 0) {
			$messages = array();
			while ($rows = $secondResult->fetch_assoc()) {
				$messages[] = $rows;
			}

			header("Content-Type: application/json");
			echo json_encode($messages);
		} else {
			header("Content-Type: application/json");
			echo json_encode(array());
		}
	}

	$conn->close();
?>
