<?php
	// get connection
	include 'connection.php';

	// kuha.a it arguments na gin send tikang ha js client
	$currentUserID = $_GET["currentUserID"];

	$query = "SELECT likedBooks.*, bookCategories.* FROM likedBooks JOIN bookCategories ON likedBooks.book_ID = bookCategories.book_ID WHERE userID = '$currentUserID'";
	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		$responseArr = array();
		while ($row = $result->fetch_assoc()) {
			$responseArr[] = $row;
		}

		header("Content-Type: application/json");
		echo json_encode($responseArr);
	} else {
		header("Content-Type: application/json");
		echo json_encode(array());
	}

?>
