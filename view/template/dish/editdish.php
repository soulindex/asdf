
<?php ob_start(); ?>
			<div class="hed">
			<h1>Админитсратирование странички</h1>
	</div>
<form action="/Project/index.php/dish/updatedish" method="post" name="add form">
	<table class="form">
    <tr>
		<td><h3>Редактирование блюда</h3></td>
		<td></td>
	</tr>
	<tr>
		<td>ID:</td>
		<td><input readonly type="text" name="Id_bludo" value="<?php echo $row ['Id_bludo']?>"></td>
	</tr>
	<tr>
		<td>Имя продукта:</td>
		<td><input type="text" name="update_Bludo_name" value="<?php echo $row ['Bludo_name']?>"></td>
	</tr>
	<tr>
		<td>Раздел:</td>
		<td><input type="text" name="update_Id_razdel" value="<?php echo $row ['Id_razdel']?>"></td>
	</tr>
	<tr>
		<td>Калории:</td>
		<td><input type="text" name="update_Calorii" value="<?php echo $row ['Calorii']?>"></td>
	</tr>

		<td>Цена:</td>
		<td><input type="text" name="update_Price" value="<?php echo $row ['Price']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input class="button" type="reset" name="reset" value="Очистить">
        <input class="button" type="submit" name="submit" value="Изменить"></td>
	</tr>
	</table>
</form>

<?php $content=ob_get_clean();?>

<?php include 'view/template/product/layout.php'; ?>