<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post">
		Login<br>
		<input type="text" name="login"><br>
		Password<br>
		<input type="password" name="pass"><br>
		<input type="submit" value="Go">
	</form>
</body>
</html>