<?php 

class modulo
{
	
	function __construct()
	{
	}

	public static function saveModulo($codigo,$idUsuario,$nombre)
	{
		$sql="INSERT INTO modulo(idmodulo,id_usuario,nombre_mod) values (?,?,?)";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($codigo,$idUsuario,$nombre));
				echo "<script>alert('El modulo fue registrado exitosamente');</script>";
				return $comando->fetch(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
	}

	public static function ViewMateriaInDocente($id_usuario)
	{
		$sql="SELECT idmodulo, nombre_mod from modulo where id_usuario=?";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($id_usuario));
				return $comando->fetchAll(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
	}
}

 ?>