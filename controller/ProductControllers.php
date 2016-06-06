<?php
/**
 * Class ProductControllers
 *
 * содержит ряд активируемых функций
 */
Class ProductControllers
{
	/**
 	* function p_admin_action()
 	*
 	* запоминает значение из соответсвующих таблиц для вывода на страницу администрирования
 	*/
	function p_admin_action()
	{
		$row_Model= new ProductModel();
		$rows =$row_Model->get_all_rows();
		require 'view/template/product/admin.php';
	}
	/**
 	* function p_admin_action()
 	*
 	* запоминает значение из соответсвующих таблиц для вывода на страницу редактирования строки
 	*/
	function p_show_action($Id_product)
	{	$row_Model= new ProductModel();
		$row=$row_Model->get_rows_by_id($Id_product);

		require 'view/template/product/show.php';
	}
	/**
 	*  p_delete_action($Id_product)
 	*
 	* удаляет блюдо
 	* запоминает значение из соответсвующих таблиц для вывода на страницу администрирования	
 	*/
	function p_delete_action($Id_product)
	{
		$row_Model=new ProductModel();
		$row_Model->delete_rows($Id_product);
		$rows =$row_Model->get_all_rows();
		require"view/template/product/admin.php";
	}	
	function p_showedit_action($Id_product)
	{
		$row_Model=new ProductModel();
		$row=$row_Model->get_rows_by_id($Id_product);
		require"view/template/product/edit.php";

	}
	/**
 	* function p_update_action()
 	* редактирует выбранную строку
 	* запоминает значение из соответсвующих таблиц для вывода на страницу администрирования	
 	*/
	function p_update_action()
	{
		$row_Model=new ProductModel();
		$row_Model->update_row_by_id();
		$rows =$row_Model->get_all_rows();
		require"view/template/product/admin.php";
	}
	/**
 	* p_add_action()
 	* создаёт строку с заданными значениями
 	* запоминает значение из соответсвующих таблиц для вывода на страницу администрирования	
 	*/
	function p_add_action()
	{
		$row_Model=new ProductModel();
		$row_Model->p_add_row();
		$rows =$row_Model->get_all_rows();
		//var_dump($rows);
		require 'view/template/product/admin.php';
	}
}