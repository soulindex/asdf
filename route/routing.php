<?php

$controllers=new ProductControllers();
//echo "<br> uri=".$_SERVER['REQUEST_URI'];

$s=explode('?',$_SERVER['REQUEST_URI']);
$uri=$s[0];

if ($uri=='/Project/index.php/product/show' && isset($_GET['id'])) 
{
	$controllers->p_show_action($_GET['id']);
}
elseif($uri=='/Project/index.php/product/admin') 
{
	$controllers->p_admin_action();
}
elseif ($uri=='/Project/index.php/product/add') 
{
	$controllers->p_add_action();
}
elseif ($uri=='/Project/index.php/product/delete') 
{
	$controllers->p_delete_action($_GET['id']);
}
elseif ($uri=='/Project/index.php/product/edit') 
{
	$controllers->p_showedit_action($_REQUEST['id']);
}
elseif ($uri=='/Project/index.php/product/update') 
{
	$controllers->p_update_action();
}

$controllers=new DishControllers();
if ($uri=='/Project/index.php/dish/dish') 
{
	$controllers->p_dish_action();
}
elseif ($uri=='/Project/index.php/dish/editdish') 
{
	$controllers->p_showeditdish_action($_REQUEST['id']);
}

elseif ($uri=='/Project/index.php/dish/updatedish') 
{
	$controllers->d_update_action();
}
elseif($uri=='/Project/index.php/dish/createdish')
{
	$controllers->d_createshow_action();
}
elseif ($uri=='/Project/index.php/dish/createrecipe') 
{
	$controllers->d_create_action(); 
}
elseif ($uri=='/Project/index.php/dish/delete') 
{
	$controllers->d_delete_action($_GET['id']);
}

$controllers=new RecipeControllers();
if($uri=='/Project/index.php/recipe/editrecipe') 
{
	$controllers->r_editrecipe_action();
}
elseif ($uri=='/Project/index.php/recipe/addingredient') 
{
	$controllers->r_addingredient_action();
}
elseif ($uri=='/Project/index.php/recipe/delete') 
{
	$controllers->r_delete_action($_GET['id']);
}
elseif ($uri=='/Project/index.php/recipe/updaterecipe') 
{
	$controllers->r_updaterecipe_action(); 
}

$controllers=new RestoranControllers();
if($uri=='/Project/index.php/restoran/main') 
{
	$controllers->restoran_main_action();
}
elseif($uri=='/Project/index.php/restoran/contact') 
{
	$controllers->restoran_contact_action();
}
elseif($uri=='/Project/index.php/restoran/menu') 
{
	$controllers->restoran_menu_action();
}
