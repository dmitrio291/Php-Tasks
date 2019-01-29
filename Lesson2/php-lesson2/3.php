<?php
	
	/* 
		>
		>=
		<
		<=
		==
		!=
		===
		!==
	*/

	$a = 3;
	$b = 3.1;

	$res = ($a == $b);
	echo (int)$res;

	$res = ($a != $b);
	echo (int)$res;

	$a = 3;
	$b = 3.0;

	$res = ($a === $b);
	echo (int)$res;
