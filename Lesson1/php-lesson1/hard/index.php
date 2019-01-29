<?php
	
    $files = scandir('img');
    $images = [];

    foreach($files as $f){
        if(is_file("img/$f")){
            $images[] = $f;
        }
    }

	$h = date('H');
	$img = $images[$h % count($images)];
?>
<!doctype html>
<html lang="en">
    <head>
        <title>32432</title>
        <style>
            body{
                background: url(img/<?php echo $img ?>);
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