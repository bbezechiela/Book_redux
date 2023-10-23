<?php
	session_start();
	include 'connection.php';
	// pag receive an value tikang ha client which is an app.js
	$data = json_decode(file_get_contents("php://input"), true);
	$messageValue = $data["messageValue"];

	// Setting to local date
	date_default_timezone_set("Asia/Manila");
	$currentDateTime = date("Y-m-d H:i:s");

	// Getting current sender user id
	$currentSenderID = $_SESSION["currentUserID"];

	// Getting current receiver user id
	$currentReceiverID = $data["receiverID"];

	// conversationID
	$participantsUserName = $data["participantsUserName"];

	// getting current username
	$currentUserName = $_SESSION["currentUserName"];

	$participantsUserArr = explode(",", $participantsUserName);
	sort($participantsUserArr);
	$conversationName = implode(",", $participantsUserArr);

	$checkerQuery = "SELECT conversationID FROM conversationDB WHERE conversationName LIKE '%$conversationName%'";
	$result = $conn->query($checkerQuery);

	if ($result) {
		$row = $result->fetch_row();
		$sql = "INSERT INTO messageDB (senderID, receiverID, content, timestamp, conversationID) VALUES ('$currentSenderID', '$currentReceiverID', '$messageValue', '$currentDateTime', $row[0])";
		$conn->query($sql);
	}

	$conn->close();
?>

