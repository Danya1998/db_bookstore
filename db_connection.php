<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=Book','root','');
    $pdo->SetAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOExeption $e){
    exit($e->GetMessage());
}
?>