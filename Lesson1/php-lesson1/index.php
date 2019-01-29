<?php
	
	$h = date('H');
	$img = $h % 8;
?>
<!doctype html>
<html lang="en">
    <head>
        <title>32432</title>
        <style>
            body{
                background: url(img/<?php echo $img ?>.jpg);
                background-size: cover;
                color: #ff0;
            }
        </style>
    </head>
    <body>
		<?php 
			echo $h;
		?>
	</body>
</html>