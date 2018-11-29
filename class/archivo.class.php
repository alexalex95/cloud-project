<?php 

	class archivo
	{
		
		function __construct()
		{
		}

		public static function uploadArchivo($nombre,$archivo,$descripcion,$tamaño,$tipo,$id_usuario,$idmod)
		{
			$sql="INSERT INTO archivo(nombre, archivo,descripcion,tamanio,tipo,id_usuario,idmodulo,estado) values (?,?,?,?,?,?,?,3)";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($nombre,$archivo,$descripcion,$tamaño,$tipo,$id_usuario,$idmod));
				echo "<script>alert('El archivo fue mandado al docente. Si lo aprueba aparecera en el inicio.');</script>";
				return $comando->fetch(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function getIdArchivo($nombre,$archivo)
		{
			$sql="SELECT id_archivo from archivo where nombre=? and archivo=?";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($nombre,$archivo));
				return $comando->fetch(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function getAllArchivos($idUsuario,$idmodulo)
		{
			$sql="SELECT nombre,descripcion,archivo from archivo where id_usuario=? AND idmodulo=? AND estado=1";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($idUsuario,$idmodulo));
				return $comando->fetchAll(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function soliArchivos($idmodulo)
		{
			$sql="SELECT a.id_archivo, a.nombre AS archivo, a.tipo, a.descripcion, u.nombre, u.apellido, a.archivo as file from archivo as a inner join usuario as u on a.id_usuario=u.id_usuario WHERE a.idmodulo=? AND a.estado=3";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($idmodulo));
				return $comando->fetchAll(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function aprobarArchivo($idarchivo)
		{
			$sql="UPDATE archivo set estado=1 where id_archivo=?";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($idarchivo));
				return $comando->fetch(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function rechazarArchivo($idarchivo)
		{
			$sql="UPDATE archivo set estado=2 where id_archivo=?";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($idarchivo));
				return $comando->fetch(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function getAllArchivosByModulo($idmodulo)
		{
			$sql="SELECT a.archivo AS file, a.nombre AS archivo, a.descripcion, u.nombre, u.apellido from archivo as a inner join usuario as u on a.id_usuario=u.id_usuario WHERE a.idmodulo=? AND a.estado=1";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($idmodulo));
				return $comando->fetchAll(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}
	}

 ?>