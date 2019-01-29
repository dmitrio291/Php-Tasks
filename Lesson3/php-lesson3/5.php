<?php
	
	function rangeArea($r, $pi){
        echo $r * $r * $pi;
    }

    function rangeLength($r, $pi){
        echo 2 * $r * $pi; 
    }
    
    $pi = 3.14;

    rangeArea(5, $pi);
    echo '<br>';
    rangeArea(4, $pi);
    echo '<br>';
    rangeLength(5, $pi);
    echo '<br>';
    rangeLength(4, $pi);
    