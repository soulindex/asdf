<!DOCTYPE HTML PUBLIC>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <title>Jolanta</title>
    <link rel="shortcut icon" href="../../img/logo_icon.png" type="image/x-icon"> <!-- иконка в адресной строке -->
  </head>

  <body>
    <header>
      <div id="logo"></div><!-- end id="logo"  Логотип -->
      <div id="lan-sea"></div><!-- end id="lan-sea"  Часить, где располагается переклюяение языков и окно поиска -->
    </header><!-- end header   Голова сайта --> 
  <div id="content">
    <div id="menu">
      <ul>
        <li><a href="main">Главная</a></li>
        <li><a href="menu">Меню</a></li>
        <li><a href="contact">Контакты</a></li>
      </ul>
    </div>
    <?php echo $content;?>
  </div>
  </body>
</html>