<?php
	
	$a = mt_rand(0, 5);
	$b = mt_rand(0, 5);

	echo $a . ' ' . $b . '<hr>';

	if($a > $b){
		echo "$a > $b";
	}
	elseif($a < $b){
		echo "$a < $b";
	}
	else{
		echo "$a = $b";
	}
