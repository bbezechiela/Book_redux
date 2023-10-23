<?php
        // start it session
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<header>
        <link href='pageStyle.css' rel='stylesheet'>
        <title>Cart Page</title>
</header>
<body>
        <div id='outerContainer'></div>
        <script>
                const currentUserID = <?php echo $_SESSION["currentUserID"]; ?>;
        </script>
        <script src='cartPageJS.js'></script>
</body>
</html>
