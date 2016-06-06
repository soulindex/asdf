<?php
/**
 * Class DishControllers
 *
 * содержит ряд активируемых функций
 */
Class DishControllers
{
	/**
 	* function p_dish_action()
 	*
 	* запоминает значение из соответсвующих таблиц для вывода на страницу
 	* $row_Model= new DishModel-подключает модель dish
 	* $rows -хранит значение динамической таблицы, в данном контроллере она принимает значение bludo
 	* $rowsd-хранит значение таблицы recept
 	* $rowsp-хранит значение таблицы producti
 	*/
	function p_dish_action()
	{
		$row_Model= new DishModel();
		$rows =$row_Model->get_all_rows();
		$rowsd = $row_Model->get_all_rowsd();
		$rowsp= $row_Model->get_all_rowsp();
		require 'view/template/dish/dish.php';
	}
	/**
 	* function p_showeditdish_action()
 	*
 	* запоминает значение из соответсвующих таблиц для вывода на страницу редактирования блюда 	
 	*/
	function p_showeditdish_action($Id_bludo)
	{
		$row_Model=new DishModel();
		$row=$row_Model->get_rows_by_id_dish($Id_bludo);
		require"view/template/dish/editdish.php";
	}
	/**
 	* function p_dish_action()
 	*
 	* редактирует таблицу bludo
 	* запоминает значение из соответсвующих таблиц для вывода на страницу редактирования блюда 	
 	*/	
	function d_update_action() 
	{
		$row_Model=new DishModel();
		$row_Model->update_dish();
		$rows=$row_Model->get_all_rows();
		require 'view/template/dish/editdish.php';
	}
	/**
 	* function d_createshow_action() 
 	*
 	* запоминает значение из соответсвующих таблиц для вывода на страницу создания блюда 	
 	*/
	function d_createshow_action() 
	{
		$row_Model=new DishModel();		
		$rows=$row_Model->get_all_rows();
		require 'view/template/dish/createdish.php';
	}
	/**
 	* d_create_action()
 	*
 	* добавляет новое блюдо
 	* запоминает значение из соответсвующих таблиц для вывода на страницу демонстрации блюд 	
 	*/
	function d_create_action() 
	{
		$row_Model=new DishModel();
		$row_Model->add_dish();
		$rows=$row_Model->get_all_rows();
		$rowsd = $row_Model->get_all_rowsd();
		$rowsp= $row_Model->get_all_rowsp();
		require 'view/template/dish/dish.php';
	}
	/**
 	*  d_delete_action($Id_bludo)
 	*
 	* удаляет блюдо
 	* запоминает значение из соответсвующих таблиц для вывода на страницу демонстрации блюд 	
 	*/
	function d_delete_action($Id_bludo)
	{
		$row_Model=new DishModel();
		$row_Model->delete_rows($Id_bludo);
		$rows=$row_Model->get_all_rows();
		require 'view/template/dish/dish.php';
	}

}
?>