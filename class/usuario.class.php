
<?php 
		require_once("../config/config2.php");

		class usuario
		{
			
			function __construct()
			{
			}

			public static function saveNewUser($usuario,$contra,$nombre,$apellido,$sexo,$correo,$fecha)
			{
			$sql="INSERT INTO usuario(usuario,password,nombre,apellido,sexo,correo,fecha_nac,tipo_usuario,estado) values (?,?,?,?,?,?,?,3,'Activo')";
			try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($usuario,$contra,$nombre,$apellido,$sexo,$correo,$fecha));
				echo "<script>alert('Usuario registrado exitosamente');</script>";
				return $comando->fetch(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
			}

	public static function saveNewDoc($usuario,$contra,$nombre,$apellido,$sexo,$correo,$fecha)
			{
			$sql="INSERT INTO usuario(usuario,password,nombre,apellido,sexo,correo,fecha_nac,tipo_usuario,estado) values (?,?,?,?,?,?,?,2,'Activo')";
			try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($usuario,$contra,$nombre,$apellido,$sexo,$correo,$fecha));
				return $comando->fetch(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
			}


				public static function saveNewAdmin($usuario,$contra,$nombre,$apellido,$sexo,$correo,$fecha)
			{
			$sql="INSERT INTO usuario(usuario,password,nombre,apellido,sexo,correo,fecha_nac,tipo_usuario,estado) values (?,?,?,?,?,?,?,1,'Activo')";
			try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($usuario,$contra,$nombre,$apellido,$sexo,$correo,$fecha));
				echo "<script>alert('Usuario registrado exitosamente');</script>";
				return $comando->fetch(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
			}



			
			public static function ValidarUsuario($contra,$usuario,$correo)
			{
			$sql="SELECT COUNT(password) FROM usuario WHERE password = ? AND (usuario = ? OR correo = ?)";
			try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($contra,$usuario,$correo));
				return $comando->fetch(PDO::FETCH_ASSOC);
			}
			catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
			}
			public static function logout()
  			 {
		        session_destroy();
		        unset($_SESSION['usuario']);
		        return true;
  			 }

  			public static function tabla_usuarios($usuario,$id_usuario){
  				$sql="SELECT u.id_usuario,u.usuario, u.nombre as Nombre,m.nombre_mod,u.apellido, u.tipo_usuario, u.correo, a.archivo, a.nombre as Archivo, i.id_modulo,a.descripcion,a.tipo from usuario as u 
					inner join archivo as a on a.id_usuario = u.id_usuario
					inner join intermedia as i on u.id_usuario = i.id_intermedia
					inner join modulo as m on m.idmodulo = a.idmodulo
					where CONCAT_WS(' ',u.correo,u.apellido,u.usuario) LIKE '%$usuario%' OR  u.correo='$usuario' OR u.apellido='$usuario' OR u.correo= '$usuario' OR u.usuario= '$usuario' order by u.apellido";
				try{
					$comando = Database::getInstance()->getDb()->prepare($sql);
					$comando->execute(array($usuario,$id_usuario));
					return $comando->fetchAll(PDO::FETCH_ASSOC);
				}catch (PDOException $e){ 
					return Database::getInstance()->getDb()->errorInfo();
				}
  			}  
		}

 ?>


