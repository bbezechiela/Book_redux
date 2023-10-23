<?php
	session_start();
	include 'connection.php';

	// getting getting last timestamp
	$lastMessageTimestamp = $_GET["lastMessageTimestamp"];

	// sender id
	$senderUserID = $_SESSION["currentUserID"];

	// receiver id
	$receiverUserID = $_GET["receiverUserID"];

	$getMessagesQuery = "SELECT * FROM messageDB WHERE timestamp > '$lastMessageTimestamp' AND (senderID = '$senderUserID' OR senderID = '$receiverUserID') AND (receiverID = '$senderUserID' OR receiverID = '$receiverUserID') AND senderID <> receiverID";
	$result = $conn->query($getMessagesQuery);

	// check if mayda gin return na row
	if ($result->num_rows > 0) {
		$messages = array();
		while ($row = $result->fetch_assoc()) {
			$messages[] = $row;
		}

		// send the messages as a JSON response
		header("Content-Type: application/json");
		echo json_encode($messages);
	} else {
		header("Content-Type: application/json");
		echo json_encode(array());
	}

	$conn->close();
?>
