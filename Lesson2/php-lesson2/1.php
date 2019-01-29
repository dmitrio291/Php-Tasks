<?php
	
	$h = date('H');
	//$img = ($h / 6) - ($h % 6 / 6);
    $img = (int)($h / 6);

    // ($h / 6) - ($h % 6 / 6)
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
                min-height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
		<?php 
			echo $h;
		?>
	</body>
</html>