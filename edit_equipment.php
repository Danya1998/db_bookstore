<?php
 include (__DIR__ . '/show_all.php');
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


<form action="edit_equipment.php" method="POST">
    <p>Field's with * must be field in</p>
    <input type="text" name="number" placeholder="Row,you want to edit">
    <input type="text" name="name" placeholder="Автор*">
    <input type="text" name="yop" placeholder="Назва книги*">
    <input type="date" name="cc" placeholder="Рік видання">
    <input type="number" name="weight" placeholder="Кількість за обліком">
    <input type="number" name="ep" placeholder="Ціна(грн.)*">
    <input type="submit" value="Send" name="Send">
</form>
<?php
if($_POST['Send'])
{
    require_once(__DIR__ . '/db_connection.php');
    $name = $_POST['name'];
    $yop = $_POST['yop'];
    $cc = $_POST['cc'];
    $weight = $_POST['weight'];
    $ep = $_POST['ep'];

    if(!$name || !$yop || !$cc || !$ep)
    {
        echo 'Please fill in all fieds with *<br />';
        if(!$name) echo 'You did not fill in name field<br />';
        if(!$yop) echo 'You did not fill in year of production field<br />';
        if(!$cc) echo 'You did not fill in carring capacity field<br />';
        if(!$ep) echo 'You did not fill in engine power field<br />';
        die;
    }

    $edit_row = (int)$_POST['number'];
    $sql = 'UPDATE `Books` SET
        Author = :name,
        Book_tit = :year_of_production,
        Year_or_pub = :carring_capacity,
        Counts = :weight,
        Price = :engine_power
              WHERE Numb_ord = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':year_of_production', $yop , PDO::PARAM_STR);
    $stmt->bindParam(':carring_capacity', $cc, PDO::PARAM_STR);
    $stmt->bindParam(':weight', $weight, PDO::PARAM_STR);
    $stmt->bindParam(':engine_power', $ep, PDO::PARAM_STR);
    $stmt->bindParam(':id', $edit_row, PDO::PARAM_INT);
    $stmt->execute();
}
?>
