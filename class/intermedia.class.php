<?php 

	/**
	* 
	*/
	class intermedia
	{
		
		function __construct()
		{
			# code...
		}

		public static function guardar($id_modulo,$idUsuario)
		{
			$sql="INSERT INTO intermedia(id_modulo,id_estudiante,estado) values (?,?,3)";
			try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($id_modulo,$idUsuario));
				return $comando->fetchAll(PDO::FETCH_ASSOC);

			}
			catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function mostrar($id_usuario)
		{
			$sql="SELECT i.id_modulo, m.nombre_mod, u.nombre, u.apellido from intermedia as i inner join modulo as m on i.id_modulo=m.idmodulo inner join usuario as u on m.id_usuario=u.id_usuario where i.id_estudiante=? AND i.estado=1";
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

		public static function getSolicitudbyId($id_modulo)
		{
			$sql="SELECT i.id_intermedia, i.id_estudiante, u.nombre, u.apellido from intermedia as i inner join usuario as u on i.id_estudiante=u.id_usuario where u.id_usuario=i.id_estudiante AND i.id_modulo=? AND i.estado=3";
			try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($id_modulo));
				return $comando->fetchAll(PDO::FETCH_ASSOC);

			}
			catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function aprobar($aprobar)
		{
			$sql="UPDATE intermedia set estado=1 where id_intermedia=?";
			try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($aprobar));
				return $comando->fetch(PDO::FETCH_ASSOC);

			}
			catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}

		public static function rechazar($rechazar)
		{
			$sql="UPDATE intermedia set estado=2 where id_intermedia=?";
			try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($id_modulo));
				return $comando->fetch(PDO::FETCH_ASSOC);

			}
			catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
		}
	}

 ?>