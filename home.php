<?php
session_start();

?>

<html>
<head>
<title>
Home
</title>

</head>

<body>

<a href="logout.php">LOG OUT</a>
<h2> WELCOME <?php echo $_SESSION['username']; ?> </h2>

</body>
</html>