<?php
	include 'connection.php';

	// kuha.a an data tikang ha client js
	$data = json_decode(file_get_contents("php://input"), true);

	// book id
	$currentBookID = $data["book_ID"];

	// current user id
	$currentUserID = $data["currentUserID"];

	$selectQuery = "SELECT * FROM cartTable WHERE book_ID = '$currentBookID' AND userID = '$currentUserID'";
	$result = $conn->query($selectQuery);

	if ($result->num_rows === 0) {
		$insertQuery = "INSERT INTO cartTable (book_ID, userID) VALUES ('{$data['book_ID']}', '{$data['currentUserID']}')";
		$conn->query($insertQuery);
	}

	$conn->close();
?>
