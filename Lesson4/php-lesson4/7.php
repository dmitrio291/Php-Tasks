<?php
	/*
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //$_SERVER['REQUEST_METHOD'] == 'POST'
	*/

    $showForm = true;

    if(count($_POST) > 0){
    	// уже отправил форму
    	$dt = date("Y-m-d H:i:s");
    	$name = trim($_POST['name']);
    	$phone = trim($_POST['phone']);

    	if(false){
    		
    	}
    	elseif(false){

    	}
    	else{
	    	file_put_contents('app.txt', "$dt $name $phone\n", FILE_APPEND);
	    	mail('admin@site', 'Новая заявка', "$dt $name $phone");

	    	$msg = 'Заявка успешно отправлена! Жди!';
	    	$showForm = false;
	    }
    }
    else{
    	// пришёл методом get
    	$msg = 'Заполни форму и мы позвоним!';
    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php if($showForm){ ?>
		<form method="post">
			Имя<br>
			<input type="text" name="name"><br>
			Телефон<br>
			<input type="text" name="phone"><br>
			<input type="submit" value="Заказать звонок">
		</form>
	<?php } ?>
	<?php echo $msg; ?>
</body>
</html>