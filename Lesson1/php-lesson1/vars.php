<?php
	
	$a = 10;
	$b = 3;
	$c = true;
	$d = null;
	$firstName = 'Dmitry';

	// константа для числа пи
	define('PI', 3.14);

	echo 'Hello, $firstName!<br>';
	echo "Hello, $firstName!<br>";
	echo 'Hello, ' . $firstName . '!<br>';

	/* Тестируем арифметические операции */
	echo ($a + $b) . '<br>';
	echo ($a - $b) . '<br>';
	echo ($a * $b) . '<br>';
	echo ($a / $b) . '<br>';
	echo ($a % $b) . '<br>';

	echo '<hr>' . ($a + $b) . '<br>';

	echo PI;

?>