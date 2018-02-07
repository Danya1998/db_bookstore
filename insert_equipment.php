<?php
require_once(__DIR__ . '/db_connection.php');
$id     = $_POST['id'];
$name   = $_POST['name'];
$yop    = $_POST['yop'];
$cc     = (int)$_POST['cc'];
$weight = (int)$_POST['weight'];
$ep     = (int)$_POST['ep'];

if(!$name || !$yop || !$cc || !$ep)
{
    echo 'Please fulfill all fieds with *<br />';
    if(!$name) echo 'You did not fill in name field<br />';
    if(!$yop) echo 'You did not fill in year of production field<br />';
    if(!$cc) echo 'You did not fill in carring capacity field<br />';
    if(!$ep) echo 'You did not fill in engine power field<br />';
    die;
}

$sql_insert = 'INSERT INTO Books (Numb_ord, Author ,Book_tit,Year_or_pub,Counts, Price) 
								 VALUES (:id,:name,:yop,:cc,:weight,:ep)';
$sth = $pdo->prepare($sql_insert);
$sth->execute([':id'=>$id, ':name' => $name,':yop' => $yop,':cc' => $cc,':weight' => $weight,':ep' => $ep]);
echo 'Information was successfully added to database';
?>