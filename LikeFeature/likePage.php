<?php
	// start it session
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<header>
	<link href='pageStyle.css' rel='stylesheet'>
	<title>Like Page</title>
</header>
<body>
	<div id='outerContainer'></div>
	<script>
		const currentUserID = <?php echo $_SESSION["currentUserID"]; ?>;
	</script>
	<script src='likePageJS.js'></script>
</body>
</html>
