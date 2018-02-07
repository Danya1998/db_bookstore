<?php
require_once(__DIR__ . '/db_connection.php');

$select_all = 'SELECT * FROM Books';
$special_select = 'SELECT * FROM Books 
										 WHERE Books.Price=(SELECT MAX(Price) FROM Books)';

$result = $pdo->query($select_all,PDO::FETCH_ASSOC);
$special_result = $pdo->query($special_select,PDO::FETCH_ASSOC);
$array = $result->fetchAll();
$special_array = $special_result->fetchAll();

echo 'SELECT ALL information';

echo '<table border="1" cellpadding="5" style="border-collapse:collapse;border:1px solid black;margin:10px 0;">';

foreach($array as $row)
{
    echo '<tr>';
    foreach($row as $row_2)
    {
        echo "<td>$row_2</td>";
    }
    echo '</tr>';
}

echo '</table>';

echo 'SPECIAL SELECT information';

echo '<table border="1" cellpadding="5" style="border-collapse:collapse;border:1px solid black;margin:10px 0;">';

foreach($special_array as $row)
{
    echo '<tr>';
    foreach($row as $row_2)
    {
        echo "<td>$row_2</td>";
    }
    echo '</tr>';
}

echo '</table>';
?>