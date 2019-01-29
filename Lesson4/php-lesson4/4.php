<?php

    // $_GET $_POST $_SERVER

    echo '<pre>';
    print_r($_SERVER);
    echo '<pre>';

    if($_SERVER['REMOTE_ADDR'] === '...'){
        exit();
    }