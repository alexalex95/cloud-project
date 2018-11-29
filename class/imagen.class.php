<?php 
class imagen
	{
		
		function __construct()
		{
		}

		public static function uploadImagen($idArchivo,$imagenes)
		{
			$sql="INSERT INTO imagen values (?,?)";
		try
			{
				$comando = Database::getInstance()->getDb()->prepare($sql);
				$comando->execute(array($nombre,$archivo,$descripcion));
				echo "<script>alert('El archivo fue subido correctamente');</script>";
				return $comando->fetch(PDO::FETCH_ASSOC);

			}
		catch (PDOException $e) {
				return Database::getInstance()->getDb()->errorInfo();
			}
			
		}
	}
 ?>