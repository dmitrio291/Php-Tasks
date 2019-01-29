<?php
	
	$a = mt_rand(-10, 10);
	$b = mt_rand(-10, 10);

	echo $a . ' ' . $b . '<hr>';

	if($a > $b){
		echo 'a - ' . $a;
		$res = $a;
	}
	else{
		echo 'b - ' . $b;
		$res = $b;
	}

	if($res > 0){
		echo "Ура!";
	}
