<?php
        session_start();
        include 'connection.php';

        $data = json_decode(file_get_contents("php://input"), true);

	// Setting to local date
        date_default_timezone_set("Asia/Manila");
        $currentDateTime = date("Y-m-d H:i:s");

	$participantsUserIDs = $data["participantsUserIDs"];
	$participantsUserName = $data["participantsUserName"];

	$currentUserName = $_SESSION["currentUserName"];

	$participantsUserArr = explode(",", $participantsUserName);
	sort($participantsUserArr);
	$conversationName = implode(",", $participantsUserArr);

	$result = $conn->query("SELECT * FROM conversationDB WHERE conversationName LIKE '%$conversationName%'");

	if ($result->num_rows === 0) {
		$sqlQuery = "INSERT INTO conversationDB (conversationName, timestamp) VALUES (?,?)";
	        $stmt = $conn->prepare($sqlQuery);
        	$stmt->bind_param("ss", $conversationName, $currentDateTime);
        	$stmt->execute();
	}

        $stmt->close();
        $conn->close();
?>
