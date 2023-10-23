<?php
	include 'connection.php';

	// kuha.a data tikang ha client js
	$data = json_decode(file_get_contents("php://input"), true);

	$asd = $data["liked_book_ID"];

	$query = "DELETE FROM likedBooks WHERE liked_book_ID = '$asd'";
	$conn->query($query);
?>
