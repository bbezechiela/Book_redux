<?php
	session_start();
	include 'connection.php';

	$currentUserName = $_SESSION["currentUserName"];

	$lastConversationTimestamp = $_GET["lastConversationTimestamp"];

	$sqlQuery = "SELECT * FROM conversationDB WHERE timestamp > '$lastConversationTimestamp' AND conversationName LIKE '%$currentUserName%'";
	$result = $conn->query($sqlQuery);

	if ($result->num_rows > 0) {
		$conversationName = array();
		while($rows = $result->fetch_assoc()) {
			$conversationName[] = $rows;
		}

		header("Content-Type: application/json");
		echo json_encode($conversationName);
	} else {
		header("Content-Type: application/json");
		echo json_encode(array());
	}

	$conn->close();
 ?>
