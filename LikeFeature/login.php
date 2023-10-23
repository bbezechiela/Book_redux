<?php
	session_start();
	include 'connection.php';

	$username = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = validateInput($_POST["username"]);
		$password = validateInput($_POST["password"]);

		$selectUserQuery = "SELECT userID, username, password FROM loginDB WHERE username='$username' AND password='$password'";

		$result = $conn->query($selectUserQuery);
		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			$_SESSION["currentUserID"] = $row["userID"];
			$_SESSION["currentUserName"] = $row["username"];
			header('Location: categoryPage.php');
		} else {
			echo "username / password is incorrect";
		}
	}

	function validateInput($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<!DOCTYPE html>
<html lang="en">
<header>
	<title>Login Form</title>
</header>
<body>
	<h1>Like Feature</h1>
	<form method="post">
		<input type="text" id="username" name="username" placeholder="username">
		<input type="password" id="password" name="password" placeholder="password">
		<button type="submit" id="submitButton">Login</button>
	</form>
</body>
</html>
