<?php
	include 'connection.php';

	// pag receive an gin send tikang ha client "js"
	$data = json_decode(file_get_contents("php://input"), true);

	// selected bookID
	$currentBookID = $data["bookID"];

	// current userID
	$currentUserID = $data["currentUserID"];

	$selectQuery = "SELECT * FROM likedBooks WHERE book_ID = '$currentBookID' AND userID = '$currentUserID'";
	$result = $conn->query($selectQuery);

	if ($result->num_rows === 0) {
		$insertQuery = "INSERT INTO likedBooks (book_ID, userID) VALUES ('$currentBookID', '$currentUserID')";
		$conn->query($insertQuery);
	}

	$conn->close();
?>
