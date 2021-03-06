<?php
/**
 * Class RecipeControllers
 *
 * содержит ряд активируемых функций
 */
Class RecipeControllers
{
	/**
 	* function r_editrecipe_action()
 	*
 	* запоминает значение из соответсвующих таблиц для вывода на страницу редактирования рецепта 
 	*/
	function r_editrecipe_action()
	{
		$row_Model= new RecipeModel();
		$rows =$row_Model->get_all_rows();
		$rowsd =$row_Model->get_all_rowsd();
		$rowsp =$row_Model->get_all_rowsp();
		require 'view/template/recipe/editrecipe.php';
	}
	/**
 	* function r_addingredient_action()
 	*
 	* добовляет новый ингридиент(новая строка в таблице recept)
 	* запоминает значение из соответсвующих таблиц для вывода на страницу редактирования рецепта 
 	*/	
	function r_addingredient_action()
	{
		$row_Model=new RecipeModel();
		$row_Model->add_ingredient();
		$rows =$row_Model->get_all_rows();
		$rowsp =$row_Model->get_all_rowsp();

		require"view/template/recipe/editrecipe.php";
	}
	/**
 	* function r_delete_action($Id)
 	*
 	* удаляет выбранный ингридиент
 	* запоминает значение из соответсвующих таблиц для вывода на страницу редактирования рецепта 
 	*/	
	function r_delete_action($Id)
	{
		$row_Model=new RecipeModel();
		$row_Model->delete_rows($Id);
		$rows =$row_Model->get_all_rows();
		require"view/template/recipe/editrecipe.php";
	}
	/**
 	* function r_updaterecipe_action()
 	*
 	* изминяет значение выбранного ингридиента
 	* запоминает значение из соответсвующих таблиц для вывода на страницу редактирования рецепта 
 	*/	
	function r_updaterecipe_action()
	{
		$row_Model=new RecipeModel();
		$row_Model->update_recipe();
		$rows =$row_Model->get_all_rows();
		require"view/template/recipe/editrecipe.php";

	}
}
?>