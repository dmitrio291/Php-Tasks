<?php
    date_default_timezone_set('Europe/Samara'); 
    $h = date('G');
    $m = date('i');
    $s = date('s');

    if($h <= 5) {
        $img = 'night';
    } elseif($h <= 11) {
        $img = 'morning';
    } elseif($h <= 17) {
        $img = 'day';
    } else {
        $img = 'evening';
    }


    // if($h == 0 || ($h >= 5 && $h <= 20)) {
    //     $word = 'часов';
    // }elseif ($h == 1 || $h == 21) {
    //     $word = 'час';
    // }else {
    //     $word = 'часа';
    // }


    function wordEnding($h, $var1, $var2, $var3) {
        // $h2 = $h % 100;
        $h1 = $h % 10;

        if($h >= 5 && $h <= 20) {
            $word = $var1;
        } elseif ($h1 == 1) {
            $word = $var2;
        } elseif($h1 >= 2 && $h1 <= 4) {
            $word = $var3;
        } else {
            $word = $var1;
        }

        return $word;
    }

    echo $h . ' ' . wordEnding($h, 'часов', 'час', 'часа') . ' ' . $m . ' ' . wordEnding($m, 'минут', 'минута', 'минуты') . ' ' . $s . ' ' . wordEnding($s, 'секунд', 'секунда', 'секунды');

    // for($i = 0; $i < 31; $i++) {
    //     echo "$i " . wordEnding($i, 'дней', 'день', 'дня') . '<br>';
    // }

    // for($i = 0; $i < 24; $i++) {
    //     echo "$i " . wordEnding($i, 'часов', 'час', 'часа') . '<br>';
    // }

    // for($i = 0; $i < 60; $i++) {
    //     echo "$i " . wordEnding($i, 'минут', 'минута', 'минуты') . '<br>';
    // }

    // for($i = 0; $i < 60; $i++) {
    //     echo "$i " . wordEnding($i, 'секунд', 'секунда', 'секунды') . '<br>';
    // }

    // for($i = 0; $i < 200; $i++) {
    //     echo "$i " . wordEnding($i, 'товаров', 'товар', 'товара') . '<br>';
    // }

    
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