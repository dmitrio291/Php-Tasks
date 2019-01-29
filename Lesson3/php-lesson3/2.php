<?php
	
	function rangeArea($r){
        echo $r * $r * 3.14;
    }

    function rangeLength($r){
        echo 2 * $r * 3.14; 
    }
    
    rangeArea(5);
    echo '<br>';
    rangeArea(4);
    echo '<br>';
    rangeLength(5);
    echo '<br>';
    rangeLength(4);