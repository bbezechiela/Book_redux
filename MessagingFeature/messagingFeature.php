<?php
	session_start();
	include "connection.php";
	echo $_SESSION["currentUserID"];
	echo $_SESSION["currentUserName"];
?>

<!DOCTYPE html>
<html>
<header>
	<title>Messaging</title>
	<link href="messageStyle.css" rel="stylesheet">
</header>
<body>
	<div id="outerContainer">
		<div id="searchContainer">
			<input type="text" id="searchField">
			<button type="button" id="searchButton">Search</button>
			<div id="searchResult"></div>
		</div>
		<div id="conversationContainer">
			<!-- Contents goes here -->
		</div>
		<div id="conversationList"></div>
	</div>
	<script>
		const currentUserID = <?php echo $_SESSION['currentUserID']; ?>;
		const currentUserName = "<?php echo $_SESSION['currentUserName']; ?>";
	</script>
	<script src="app.js"></script>
</body></html>
