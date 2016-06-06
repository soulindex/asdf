<?php
/**
 *DBH
 *
 *Материнский класс Dbh содержит функции используемые в разных контроллерах 
 */
Class Dbh
{
	/**
	 * Переменные DBH
	 *
	 * $user- логин в базе данных
	 * $pass- пароль в базе данных
	 * $db- база данных
	 * $charset- кодировка
	 * $host- хост
	 */
	protected $dbh;
	private $table;
	private $user ="restoran";
	private $pass ="restoran";
	private $db ="restoran";
	private $charset ="UTF8";
	private $host ="localhost";
	/**
	 * function Dbh
	 * 
	 * Подключение к базе данных
	 */
	public function Dbh($table)
	{
		$this->table=$table;
		$dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
		$opt = array(
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		);
		try
		{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $opt);
		}
		catch(Exception $e)
		{
			echo"error!";
		}

	}
	/**
	 * GetDbh
	 * 
	 * в зависимости от контроллера берёт название таблицы в базе данных
	 */
	public function getDbh()
	{
		/*echo"<pre>";
		var_dump($this->dbh());
		echo "</pre>";*/
		return $this->dbh;
	}
	/**
	 * get_all_rowsp
	 * 
	 * Хранит значение таблицы producti в перменной $rowsp
	 */
	public function get_all_rowsp()
	{
		$sql="SELECT * FROM produkti";

		$stmt=$this->getDbh()->query($sql);
		$rowsp = array();
		while ($row =$stmt-> fetch())
		{
			$rowsp[]=$row;
		}

		return $rowsp;
	}
	/**
	 * get_all_rowsd
	 * 
	 * Хранит значение таблицы recept в перменной $rowsd
	 */
	public function get_all_rowsd()
	{
		$sql="SELECT * FROM recept";

		$stmt=$this->getDbh()->query($sql);
		$rowsd = array();
		while ($row =$stmt-> fetch())
		{
			$rowsd[]=$row;
		}

		return $rowsd;
	}
	/**
	 * get_all_rows
	 * 
	 * Хранит значение из таблицы обусловленной контроллером в перменной $rows
	 */
	public function get_all_rows()
	{
		$sql="SELECT * FROM ".$this->table;

		$stmt=$this->getDbh()->query($sql);
		$rows = array();
		while ($row =$stmt-> fetch())
		{
			$rows[]=$row;
		}

		return $rows;
	}
	/**
	 * get_all_rowsc
	 * 
	 * Хранит значение таблицы razdelmenu в перменной $rowsc
	 */
	public function get_all_rowsc()
	{
		$sql="SELECT * FROM razdelmenu";

		$stmt=$this->getDbh()->query($sql);
		$rowsc = array();
		while ($row =$stmt-> fetch())
		{
			$rowsc[]=$row;
		}

		return $rowsc;
	}
	
	/**
	 * get_rows_by_id
	 * 
	 * Хранит значение строки в соответсвующей таблице в зависимости от выбранного id_product в перменной $row
	 * int- $id_product-хранит передоваемый id
	 * 
	 */
	public function get_rows_by_id($Id_product)
	{
		$sql="SELECT * FROM ".$this->table." WHERE Id_product=?";//запрос в sql
		$stmt = $this->getDbh()->prepare($sql);//подготавливает места для перменных
		$stmt->execute(array($Id_product));//присваевает соответсвующие значение перменных в соответсвующие(подготоваленные)места
		$row = $stmt->fetch();
		return $row;
	}
	/**
	 * get_rows_by_id_dish
	 * 
	 * Хранит значение строки в соответсвующей таблице в зависимости от выбранного id_bludo в перменной $row
	 * int- $id_bludo-хранит передоваемый id
	 * 
	 */
	public function get_rows_by_id_dish($Id_bludo)
	{
		$sql="SELECT * FROM ".$this->table." WHERE Id_bludo=?";//запрос в sql
		$stmt = $this->getDbh()->prepare($sql);//подготавливает места для перменных
		$stmt->execute(array($Id_bludo));//присваевает соответсвующие значение перменных в соответсвующие(подготоваленные)места
		$row = $stmt->fetch();
		return $row;
	}
	/**
	 * delete_rows
	 * 
	 * Удоляет строку в соответвсвующей таблице по id_product
	 * id_product- хранит id удоляемой строки
	 */
	public function delete_rows($Id_product)
	{
		$sql = "DELETE FROM ".$this->table." WHERE Id_product= ?";
		$stmt=$this->getDbh()->prepare($sql);
		$stmt->execute([$Id_product]);
		header('Location: http://localhost/Project/index.php/product/admin');
  		exit;
		return;
	}

}