<?php
	// session start
	session_start();

	echo $_SESSION["currentUserName"];
?>

<!DOCTYPE html>
<html lang='en'>
<header>
	<link href="categoryPage.css" rel="stylesheet">
	<title>Category Page</title>
</header>

<body>
	<!-- post container prototype -->
	<div id='postContainer'>

	</div>

	<a href='likePage.php'>Like Page</a>

	<a href='cartPage.php'>Cart Page</a>

	<!-- script tag -->
	<script>
		const currentUserID = <?php echo $_SESSION["currentUserID"] ?>;
	</script>
	<script src='categoryPageJS.js'></script>
</body>
</html>
