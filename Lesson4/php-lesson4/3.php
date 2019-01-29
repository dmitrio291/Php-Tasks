<?php

    $dictionary = [
        'hi' => 'привет',
        'day' => 'день',
        'hour' => 'час'
    ];

    echo $dictionary['day'] . '<hr>';

    $capitals = [
        'Россия' => 'Москва', 
        'Франция' => 'Париж', 
        'Англия' => 'Лондон', 
        'Япония' => 'Токио'
    ];

    foreach($capitals as $country => $city){
        echo "$country - $city<br>";
    }
