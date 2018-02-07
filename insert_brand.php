<?php
	require_once(__DIR__ . '/db_connection.php');
	$pok     = $_POST['pok'];
		$id     = $_POST['id'];
		$name   = $_POST['name'];
		$yop    = $_POST['yop'];
		$cc    = $_POST['cc'];
		$weight = (int)$_POST['weight'];
	$sth = $pdo->prepare($sql_insert);
	$sql_insert = 'INSERT INTO Orders (Check_num,Numb_ords, Author,Book_tit,Data_ord,Counts) 
								 VALUES (:pok,:id,:name,:yop,:cc,:weight)';
$sth = $pdo->prepare($sql_insert);
$sth->execute([':pok'=>$pok,':id'=>$id, ':name' => $name,':yop' => $yop,':cc' => $cc,':weight' => $weight]);
echo 'Information was successfully added to database';
?>
