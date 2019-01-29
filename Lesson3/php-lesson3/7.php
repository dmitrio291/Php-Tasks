<?php
	
	function rangeArea($r, $pi = 3.14){
        return $r * $r * $pi;
    }

    $r1 = rangeArea(5);
    $r2 = rangeArea(4);

    echo "$r1 - $r2 = " . ($r1 - $r2);

    /*
    function f($x){
        return $x * $x;
    }

    f(x) = x * x

    15 + f(5) + 20 = ???
*/