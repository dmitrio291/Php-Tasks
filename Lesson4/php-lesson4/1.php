<?php

    function wordEndind($h, $var1, $var2, $var3){
        $h2 = $h % 100;
        $h1 = $h % 10;

        if($h2 >= 5 && $h2 <= 20){
            $word = $var1;
        }
        elseif($h1 == 1){
            $word = $var2;
        }
        elseif($h1 >= 2 && $h1 <= 4){
            $word = $var3;
        }
        else{
            $word = $var1;
        }

        return $word;
    }

    for($i = 0; $i < 31; $i++){
        echo "$i " . wordEndind($i, 'дней', 'день', 'дня') . '<br>';
    }

    for($i = 0; $i < 24; $i++){
        echo "$i " . wordEndind($i, 'часов', 'час', 'часа') . '<br>';
    }

    for($i = 0; $i < 60; $i++){
        echo "$i " . wordEndind($i, 'минут', 'минута', 'минуты') . '<br>';
    }

    for($i = 0; $i < 60; $i++){
        echo "$i " . wordEndind($i, 'секунд', 'секунда', 'секунды') . '<br>';
    }

    for($i = 0; $i < 200; $i++){
        echo "$i " . wordEndind($i, 'товаров', 'товар', 'товара') . '<br>';
    }

    /*
        if 5-20 
            минут
        else
            0 - минут
            1 - минута
            2 - минуты
            3 - минуты
            4 - минуты
            5 - минут
            6 - минут
            7 - минут
            8 - минут
            9 - минут
    */
?>
