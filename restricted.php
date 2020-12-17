
<?php
// Start the session
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
</head>
<body style="padding-top: 3rem;">
<?php
    if($_SESSION["auth"] == true){
        echo<<<html
            <h1>You authorised<h1>
            <p>Hello admin</p>
        html;
    }
    else{
        echo<<<html
            <h1>You haven't authorised<h1>
            <p><a href="login.php">Log in</a></p>
    html;
    }
?>
</body>
</html>