<?php
    date_default_timezone_set('Europe/Samara'); 
    $h = date('g');
    $m = date('i');
    // $minuts = date('i');

    if($h <= 5) {
        $img = 'night';
    } elseif($h <= 11) {
        $img = 'morning';
    } elseif($h <= 17) {
        $img = 'day';
    } else {
        $img = 'evening';
    }

    // if($h == 0 || ($h >= 5 && $h <= 20) 
    //            || ($h >= 25 && $h <= 30) 
    //            || ($h >= 35 && $h <= 40) 
    //            || ($h >= 45 && $h <= 50) 
    //            || ($h >= 55 && $h <= 59)) {
    //     $word = 'часов';
    // }elseif ($h == 1 || $h == 21 || $h == 31 || $h == 41 || $h == 51) {
    //     $word = 'час';
    // }else {
    //     $word = 'часа';
    // }

    if($h == 0 || ($h >= 5 && $h <= 20)) {
        $word = 'часов';
    }elseif ($h == 1 || $h == 21) {
        $word = 'час';
    }else {
        $word = 'часа';
    }

    if($m == 0 || ($m >=5 && $m <= 20) || ($m >=25 && $m <= 30) || ($m >=35 && $m <= 40) || ($m >=45 && $m <= 50) || ($m >=55 && $m <= 59)) {
        $minute = 'минут';
    }elseif ($m == 1 || $m == 21 || $m == 31 || $m == 41 || $m == 51) {
        $minute = 'минута';
    }else {
       $minute = 'минуты'; 
    }

    echo 'Самарское время - '. $h. ' '. $word. ' '. $m. ' '. $minute;
    
?>
<!doctype html>
<html lang="ru">
    <head>
        <title>Lesson 1</title>
        <style>
            body{
                background: url(img/<?php echo $img ?>.jpg);
                background-size: cover;
                font-size: 78px;
                font-weight: 700;
                color: #0048d8;
                text-shadow: 5px 5px 10px rgba(0, 0, 0, 0.70);
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>

	</body>
</html>