<?php
	include 'connection.php';

	$currentUserID = $_GET["currentUserID"];

	$selectQuery = "SELECT cartTable.*, bookCategories.* FROM cartTable JOIN bookCategories ON cartTable.book_ID = bookCategories.book_ID WHERE userID = '$currentUserID'";
	$result = $conn->query($selectQuery);

	if ($result->num_rows > 0) {
		$resultCtn = array();
		while ($row = $result->fetch_assoc()) {
			$resultCtn[] = $row;
		}

		header("Content-Type: application/json");
		echo json_encode($resultCtn);
	} else {
		header("Content-Type: application/json");
		echo json_encode(array());
	}

?>
