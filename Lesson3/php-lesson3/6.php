<?php
	
	function rangeArea($r, $pi = M_PI){
        echo $r * $r * $pi;
    }

    function rangeLength($r, $pi = M_PI){
        echo 2 * $r * $pi; 
    }
    
    rangeArea(5);
    echo '<br>';
    rangeArea(4);
    echo '<br>';
    rangeLength(5);
    echo '<br>';
    rangeLength(4, 3.14);
