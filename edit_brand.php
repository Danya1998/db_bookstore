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

		<form action="edit_brand.php" method="POST">
				<p>Field's with * must be field in</p>
   				<input type="number" name="number" placeholder="Order,which you want to edit">
   				<input type="text" name="dd" placeholder="Номер заказа">
    			<input type="text" name="name" placeholder="Автор*">
    			<input type="text" name="yop" placeholder="Назва книги*">
    			<input type="date" name="cc" placeholder="Дата покупки">
    			<input type="text" name="weight" placeholder="Кількість">
				<input type="submit" value="Send" name="Send">
		</form>

<?php
if($_POST['Send'])
{
    require_once(__DIR__ . '/db_connection.php');
    $dd = $_POST['dd'];
    $name = $_POST['name'];
    $yop = $_POST['yop'];
    $cc = $_POST['cc'];
    $weight = $_POST['weight'];
  	$edit_row = (int)$_POST['number'];

    
    $sql = 'UPDATE `Orders` SET
    	Numb_ords = :dd,
        Author = :name,
        Book_tit = :year_of_production,
        Data_ord = :carring_capacity,
        Counts = :weight
              WHERE Check_num = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':dd', $dd, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':year_of_production', $yop , PDO::PARAM_STR);
    $stmt->bindParam(':carring_capacity', $cc, PDO::PARAM_STR);
    $stmt->bindParam(':weight', $weight, PDO::PARAM_STR);
    $stmt->bindParam(':id', $edit_row, PDO::PARAM_INT);
    $stmt->execute();
}
?>

	?>