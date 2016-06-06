<?php
/**
 *RecipeModel
 *
 *Класс RecipeModel содержит функции используемые в контроллере RecipeControllers
 */
Class RecipeModel extends Dbh
{
	/**
 	*function RecipeModel
 	*
 	*инициирует значение динамической перменной rows
 	*/
	public function RecipeModel()
	{
		parent::Dbh('recept');
	}
	/**
 	*add_ingredient
 	*
 	*добовляет новую строку в таблице recept и заполняет её значениями
 	*/
	public function add_ingredient()
	{
		echo $_REQUEST['add_Id_bludo'];

		if(!empty($_REQUEST['add_Id_bludo'])
			AND !empty($_REQUEST['add_Id_product'])
				AND !empty($_REQUEST['add_Kolvo']))
					{
						
						$Id_page=$_REQUEST['Id_page'];
						$add_Id_bludo=$_REQUEST['add_Id_bludo'];
						$add_Id_product=$_REQUEST['add_Id_product'];
						$add_Kolvo=$_REQUEST['add_Kolvo'];

						$sql = "INSERT INTO recept(`Id_bludo`, `Id_product`, `Kolvo`) VALUE (?, ?, ?)";
						$stmt=$this->getDbh()->prepare($sql);
						$stmt->execute(array($add_Id_bludo, $add_Id_product, $add_Kolvo));
						header('Location: http://localhost/Project/index.php/recipe/editrecipe?id='.$_REQUEST['add_Id_bludo']);
  						exit;
						return true;
					}
		else
		{
			echo "Пропущена!";
  		}
			
			header('Location: http://localhost/Project/index.php/recipe/editrecipe?id='.$_REQUEST['add_Id_bludo']);
  			exit;
	}
	/**
 	*update_recipe
 	*
 	*изменяет значение ячеек в таблице recept
 	*/
	public function update_recipe()
	{			
		$update_Id=$_REQUEST['update_Id'];		
		$update_Kolvo=$_REQUEST['update_Kolvo'];

		$sql ="UPDATE `recept` SET `Kolvo`=? WHERE `Id`=?";		
		$stmt=$this->getDbh()->prepare($sql);
		$stmt->execute(array($update_Kolvo, $update_Id));
		header('Location: http://localhost/Project/index.php/recipe/editrecipe?id='. $_REQUEST['Id_page']);
  		exit;

	}
	/**
 	*delete_rows
 	*
 	*удаляет строку в таблице recept в зависимости от передоваемой $id
 	*/	
	public function delete_rows($Id)
	{
		echo $Id;
		$sql = "DELETE FROM recept WHERE Id=?";
		$stmt=$this->getDbh()->prepare($sql);
		$stmt->execute([$Id]);
		echo $_GET['page'];
  		header('Location: http://localhost/Project/index.php/recipe/editrecipe?id='.$_GET['page']);
  		exit;
		return;
	}
}
?>