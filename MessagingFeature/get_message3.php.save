<?php
	// start it session
	session_start();

	// db
	include 'connection.php';

	// getting conversationNamE
	$conversationName = $_GET["conversationName"];

	// getting timestamp
	$lastMessageTimestamp = $_GET["lastMessageTimestamp"];

	$conversationNameArr = explode(",", $conversationName);
	sort($conversationNameArr);
	$finalConvoName = implode(",", $conversationNameArr);

        // select queries
        $sqlQuery = "SELECT * FROM conversationDB WHERE conversationName LIKE '%$finalConvoName%'";
        $result = $conn->query($sqlQuery);

        if ($result->num_rows > 0) {
		$row = $result->fetch_row();

                $anotherQuery = "SELECT * FROM messageDB WHERE timestamp > '$lastMessageTimestamp' AND conversationID = '$row[0]'";
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
