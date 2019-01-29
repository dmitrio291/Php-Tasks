<?php
	
    define('PI', 3.14);

	function rangeArea($r){
        echo $r * $r * PI;
    }

    function rangeLength($r){
        echo 2 * $r * PI; 
    }
    
    rangeArea(5);
    echo '<br>';
    rangeArea(4);
    echo '<br>';
    rangeLength(5);
    echo '<br>';
    rangeLength(4);
    