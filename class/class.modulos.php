<?php

require_once("../config/config2.php");

class Modulo {
  function __construct()
	{
	}

	public static function ViewModulos($nombreMateria,$idModulo)
	{

		$query="SELECT m.id_usuario, m.nombre_mod, u.nombre, u.apellido, u.id_usuario, m.idmodulo FROM modulo AS m INNER JOIN usuario AS u ON m.id_usuario = u.id_usuario WHERE m.nombre_mod LIKE '%$nombreMateria%' OR m.idmodulo='$idModulo'";
		//echo $query;
		try
		{
			$comando = Database::getInstance()->getDb()->prepare($query);
			$comando->execute();
			return $comando->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e) {
			return Database::getInstance()->getDb()->errorInfo();
		}
	}
}
?>
