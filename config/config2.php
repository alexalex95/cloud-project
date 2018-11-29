<?php
	/*
		Clase que devuelve una instancia de PDO
		para el manejo de la base de datos
	*/

define("database", "basenube");	//	Nombre de la base de datos
define("hostname", "68.178.143.98"); //Nombre del host
define("username", "basenube");	//	Nombre del usuario
define("password", "HG865lj#5ktu3");	//	Contraseña

class Database
{
	/* Unica instancia de la clase*/
	private static $db = null;
	/*Instancia de PDO*/
	private static $pdo;
	final private function __construct()
	{
		try {
			//Crear una conexion PDO
			self::getDb();
		} catch (PDOException $e) {
			//MAnejo de excepciones
		}
	}
	/*
	Retorna en la unica instancia de la clase
	@return Database|null
	*/
	public static function getInstance()
	{
		if (self::$db === null) {
			self::$db = new self();
		}
		return self::$db;
	}
	/*
	Crear una nueva conexion PDO basada
	en los datos de conexion
	@return PDO Objeto PDO
	*/
	public function getDb()
	{
		if (self::$pdo == null) {
			self::$pdo = new PDO('mysql:dbname='.database.';host='.hostname.';port:63343;',username,password,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
				);

			//Habilitar excepciones
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		return self::$pdo;
	}
	/*
	Evita la clonacion del objeto
	*/
	final protected function __clone()
	{
	}
	function _destructor()
	{
		self::$pdo = null;
	}
}

?>