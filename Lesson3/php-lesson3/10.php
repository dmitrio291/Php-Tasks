<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<select name="" id="">
		<?php
			$i = 1910;

			while($i <= 2010){
				echo "<option value=\"$i\">$i</option>";
				$i++;
			}
		?>
	</select>
</body>
</html>