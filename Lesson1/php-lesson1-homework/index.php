<?php
    // Получаем текущее время на сервере
	// $h = date('H');
    // Делим текущее время на 6 (кол-во часов в промежутке)
    // Находим остаток от деления на 4 (кол-во картинок)
    // $result = ($h / 6) % 4;


/*
    числа от 1 до 23 делим на 6
    потом аналогично берем остаток от такого деления
    которой тоже делим на 6
    от первого числа вычитаем последнее
*/
    $h = date('H');
    // $img = ($h / 6) - ($h % 6 / 6);
    $img = (int)($h / 6);
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Lesson 1</title>
        <style>
            body{
                background: url(img/<?php echo $img ?>.jpg);
                background-size: cover;
                font-size: 56px;
                color: #0048d8;
                text-shadow: 5px 5px 10px rgba(0, 72, 216, 0.50);
            }
        </style>
    </head>
    <body>
		<?php 
			// echo $h . ' часа(ов)';
            // echo '<br>' . $result;
            echo $h;
		?>
	</body>
</html>