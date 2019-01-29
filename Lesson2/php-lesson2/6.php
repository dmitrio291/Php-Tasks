<?php
	
	$a = mt_rand(-10, 10);
	$b = mt_rand(-10, 10);

	/*
		|| - или
		&& - и
	*/

	if(($a > 0) || ($b > 0)){
		if($a > $b){
			echo $a;
		}
		else{
			echo $b;
		}
	}
	else{
		echo 'пропускаем!';
	}