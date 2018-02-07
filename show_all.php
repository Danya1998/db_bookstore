<?php
	require_once(__DIR__ . '/db_connection.php');

	$select_all = 'SELECT * FROM `Books`';
	$result = $pdo->query($select_all,PDO::FETCH_ASSOC);
	$array = $result->fetchAll();

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
?>