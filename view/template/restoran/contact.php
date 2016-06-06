
<?php ob_start(); ?>

<div id="sisu">
    <h1>Обратная связь</h1> 
     
    <div id="contact">  
    <h3>Мы находимся здесь:</h3>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2002.307471984433!2d24.759249999999998!3d59.437691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNarva+mnt+5%2C+Narva+maantee%2C+Tallinn%2C+Tallinna+linn!5e1!3m2!1set!2see!4v1426784854714" frameborder="0" style="border:0"></iframe>
        <hr>
        <form class="kont">
          <h3>Оставить отзыв</h3>
            <table>
                <tbody>
                    <tr>
                        <td><p>Имя: </p></td>
                        <td><input class="" type="text" placeholder="Ваше имя..."></td>
                    </tr>
                    <tr>
                        <td><p>Е-почта: </p></td>
                        <td><input type="email" placeholder="Ваш э-майл..."></td>
                    </tr>
                    <tr>
                        <td><p>Сообщение: </p></td>
                        <td><textarea type="text" placeholder="Текст сообщения..."></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input class="ok" type="submit"></td>
                    </tr>
                </tbody>
            </table>
        </form>
     </div>
</div>
<?php $content=ob_get_clean();?>

<?php include 'view/template/restoran/layout.php'; ?>