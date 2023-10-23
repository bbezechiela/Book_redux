<?php
	include 'connection.php';

	$sqlQuery = "SELECT * FROM bookCategories WHERE book_ID > 0";
	$result = $conn->query($sqlQuery);

	if ($result->num_rows > 0) {
		$resultCtn = array();
		while ($rows = $result->fetch_assoc()) {
			$resultCtn[] = $rows;
		}

		header("Content-Type: application/json");
		echo json_encode($resultCtn);
	} else {
		echo json_encode(array());
	}

	$conn->close();
?>
