<?php
	
	$h = date('H');

    if($h <= 5){
        $img = 'night.jpg';
    }
    elseif($h <= 11){
        $img = 'morning.jpg';
    }
    elseif($h <= 17){
        $img = 'day.jpg';
    }
    else{
        $img = 'evening.jpg';
    }

    if($h == 0 || ($h >= 5 && $h <= 20)){
        $word = 'часов';
    }
    elseif($h == 1 || $h == 21){
        $word = 'час';
    }
    else{
        $word = 'часа';
    }
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
                min-height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
		<?php 
			echo $h . ' ' . $word;
		?>
	</body>
</html>