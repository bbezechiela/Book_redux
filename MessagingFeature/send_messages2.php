<?php
	// start session
	session_start();

	include 'connection.php';
	// pag receive an value tikang ha client which is an app.js
        $data = json_decode(file_get_contents("php://input"), true);
        $messageValue = $data["inputFieldValue"];

        // Setting to local date
        date_default_timezone_set("Asia/Manila");
        $currentDateTime = date("Y-m-d H:i:s");

        // Getting current sender user id
        $currentSenderID = $_SESSION["currentUserID"];

       	// getting current user name
	$currentUserName = $_SESSION["currentUserName"];

	// conversationID
	$conversationID = $data["conversationID"];

	// receiver user detail
        $receiverUserDetail = $data["receiverUserDetail"];

	// ig explode para mag bulag hira hin container it duwa na string
	$arr = explode(",", $receiverUserDetail);

	$receiverName = ($arr[0] === $currentUserName) ? strval($arr[1]) : strval($arr[0]);

	// pag kuha receiver id
	$receiverIdQuery = "SELECT userID FROM loginDB WHERE username = '$receiverName'";
	$receiverResult = $conn->query($receiverIdQuery);

	$receiverID = 0;

	// checker if mayda sulod it gin return
	if ($receiverResult->num_rows > 0) {
		$row = $receiverResult->fetch_row();
		$receiverID = $row[0];
	}

	$checkConversationQuery = "SELECT conversationID FROM conversationDB WHERE conversationName LIKE '%$receiverUserDetail%'";
        $conversationResult = $conn->query($checkConversationQuery);

        if ($conversationResult) {
                $sql = "INSERT INTO messageDB (senderID, receiverID, content, timestamp, conversationID) VALUES ('$currentSenderID', '$receiverID', '$messageValue', '$currentDateTime', '$conversationID')";
                $conn->query($sql);
        }

        $conn->close();
?>
