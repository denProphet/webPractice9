<?php
// Start the session
session_start();
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
</head>
	<?php 
		$login = "admin";
		$password = "1111";

		echo $_POST["login"]; 
		echo $_POST["password"];

		if($_POST["login"] == $login && $_POST["password"] == $password) {
			$_SESSION["auth"] = true;
		} else {
			$_SESSION["auth"] = false;
		}
		header('Location: restricted.php');
	?>
</body>
</html>
