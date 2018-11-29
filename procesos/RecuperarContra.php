<?php

include("../modulos/conexion.php");

$con=conectarse();

//echo $_POST["email"];

$query = "SELECT * FROM usuario WHERE correo='".$_POST['email']."'";



$psswd = substr( md5(microtime()), 1, 8);
//echo $psswd;

$result = mysqli_query($con,$query);
		$fila = mysqli_fetch_assoc($result);
		$fila2 = mysqli_num_rows($result);

		if($fila2 >0)
		{





$query2="UPDATE usuario SET password='".$psswd."' Where correo='".$_POST['email']."'";

$result2 = mysqli_query($con,$query2);


$mensaje="Por este medio se le hace llegar sus nuevas credenciales de acceso, se le ruega cambiara lo antes posible.   ";
					$mensaje.="password:";
					$mensaje.=$psswd;
					/*$mensaje.="Gracias por Preferirnos.";*/


//echo "<br />el nombre del usuario seleccionado es: ".$fila['nombre'];

//echo "su nueva Clave ha sido enviada a su correo electronico. Inicie sesion con sus nuevas credenciales.<br />";


echo "<input type='hidden' value='".$_POST["email"]."' id='tengo_correo' />";
echo "<input type='hidden' value='".$mensaje."' id='mensaje' />";



echo " 
<script type='text/javascript'>

var valor = document.getElementById('tengo_correo').value;
var valor2 = document.getElementById('mensaje').value;



var ajax_url = 'http://nonualconet.comlu.com/mail.php';


var params = 'parametro='+valor+'&mensaje='+valor2+'';


ajax_url += '?' + params;


var ajax_request = new XMLHttpRequest();


ajax_request.open( 'GET', ajax_url, true );

ajax_request.send();



</script>


";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CloudUDB</title>
<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/form-elements.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Felicidades!</strong></h1>
                    <div class="description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Su contraseña ha sido enviada con éxito.</h3>
                            <p>
                                Revise su correo electronico para poder obtener y usar sus nuevas credenciales.
                            </p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-check"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        
                           
                            <a href="../index.php" class="btn btn-success" role="button">Regresar</a>

                     

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="../assets/js/jquery-1.11.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.backstretch.min.js"></script>
<script src="../assets/js/script2.js"></script>
<!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
</body>
</html>

<?php

//echo "<a href='../index.php'>Regresar</a>";



		}
		else
		{

			?>


			<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CloudUDB</title>
<!-- CSS -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/form-elements.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<!-- Top content -->
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>UPSSS...</strong></h1>
                    <div class="description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>El correo no existe.</h3>
                            <p>
                                Por favor revise que: <?php echo $_POST["email"]; ?> &nbsp; este bien escrito.
                            </p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-close"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        
                           
                            <a href="../index.php" class="btn btn-success" role="button">Regresar</a>

                     

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Javascript -->
<script src="../assets/js/jquery-1.11.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.backstretch.min.js"></script>
<script src="../assets/js/script2.js"></script>
<!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
</body>
</html>

			<?php

		}

?>


