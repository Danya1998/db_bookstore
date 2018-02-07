<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<style>
		input{
			display:block;
			margin:20px 0;
			height:40px;
			width:230px;
			border-radius:7px;
			border-color:blue;
			font-size:14px;
		}
		input[type="submit"]{
			margin-left:65px;
			display:block;
			width:100px;
			height:40px;
			font-size:14px;
			border-radius:5px;
		}
	</style>
	<div>
	<?php
		include (__DIR__ . '/show_brand.php');
	?>
		<p>Enter information</p>
			<form action="insert_brand.php" method="POST">
				<input type="number" name="pok" placeholder="Номер покупателя">
				<input type="number" name="id" placeholder="Номер заказа">
            	<input type="text" name="name" placeholder="Автор*">
           		<input type="text" name="yop" placeholder="Назва книги*">
           		<input type="date" name="cc" placeholder="Дата заказа">
           		<input type="number" name="weight" placeholder="Кількість за обліком">
				<input type="submit" value="Send">
			</form>
	<div>
</body>
</html>