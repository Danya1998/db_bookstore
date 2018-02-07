<?php
	include (__DIR__ . '/show_brand.php');
?>

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

<form action="delete_brand.php" method="POST">
		<p>Enter row you want to delete?</p>
		<input type="text" name="number" placeholder="Row,you want to delete">
		<input type="submit" value="Send">
	</form>

<?php
require_once(__DIR__ . '/db_connection.php');
$delete_row = (int)$_POST['number'];
$delete = "DELETE  FROM Orders WHERE Check_num = $delete_row";
$result = $pdo->exec($delete);
?>