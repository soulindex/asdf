
<?php ob_start(); ?>
<div class="sisu">
<div id="pod_menu">
<?php foreach ($rowsc as $rowc){?>

<ul>
	
		<li>
			<a href="menu?id=<?php echo  $rowc['Id_razdel'];?>"><?php echo  $rowc['Name_razdel'];?></a>
		</li>		
	
</ul>


<?php }?>
</div>
<div class="foobar" id="sisu_bl">

<?php foreach ($rows as $row)
{
	if($row['Id_razdel']==$_GET['id'])
	{
		if($row['Visible']==1)
		{
?>

<ul>
        <li><h3><?php echo  $row['Bludo_name'];?></h3>
          <table >
            <tr>
              <td><img class="eda" src="../../img/eda/<?php echo  $row['Image']; ?>"></td>
              <td>Ингридиенты:

              	<?php foreach ($rowsd as $rowd)
              {
                if($row['Id_bludo']==$rowd['Id_bludo'])
                {
                  foreach ($rowsp as $rowp)
                  {
                    if($rowp['Id_product']==$rowd['Id_product'])
                    {
                    echo $rowp['Name_produkt'];
                    }
                  }
                echo " - ";
                echo $rowd['Kolvo'];
                echo ", ";

                }
              }
              ?>


              </td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>Каллорийность блюда: <?php echo  $row['Calorii']; ?> </td>
              <td class="price"><?php echo  $row['Price']; ?></td>
            </tr>
          </table>
        </li>
</ul>


<?php 	} 
	} 
} ?>

</div>
</div>
<?php $content=ob_get_clean();?>

<?php include 'view/template/restoran/layout.php'; ?>

