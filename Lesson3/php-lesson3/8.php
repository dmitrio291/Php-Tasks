<?php
	
	function some(){
        if(mt_rand(0, 1) > 0){
            return 1;
        }
        else{
            return 2;
        }

        // недостижимый код
        return 3;
    }

    echo some() . '<br>';

    echo date("Y.m.d H:i:s") . '<br>';
    echo time();