<?php
	include 'connection.php';

	$data = json_decode(file_get_contents("php://input"), true);

	$book_genre = $data["book_genre"];
	$book_title = $data["book_title"];
	$book_author = $data["book_author"];
	$book_price = $data["book_price"];
	$book_timestamp = $data["book_timestamp"];
	$book_owner = $data["book_owner"];

	$sqlQuery = "INSERT INTO bookCategories (book_genre, book_title, book_author, book_price, book_timestamp, book_owner) VALUES ('$book_genre', '$book_title', '$book_author', '$book_price', '$book_timestamp', '$book_owner')";

	$conn->query($sqlQuery);
?>
