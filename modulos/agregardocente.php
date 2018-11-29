<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CloudUdb</title>
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
                   <center> <h1><strong>REGISTRO DE DOCENTES <i class="fa fa-user-plus"></i></strong></h1></center>
                    <div class="description">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <p>
                               <center><strong> Rellenar los campos solicitados para realizar un registro exitoso</strong></center>
                            </p>
                        </div>
                        
                            
                        
                    </div>
                    <div class="form-bottom well">
                        <form role="form" id="formulario2" action="procesos/registrodocente.php" method="POST" class="login-form">
                            <label><i class="fa fa-user"></i> Nombre: </label>
                            <input type="text" name="nombre" placeholder="Ingrese su nombre..." required class="form-control"><br>
                            <label><i class="fa fa-user"></i> Apellidos: </label>
                            <input type="text" name="apellido" placeholder="Ingrese sus apellidos..." required class="form-control"><br>
                            <label><i class="fa fa-user"></i> Usuario: </label>
                            <input type="text" name="usuario" placeholder="Ingrese su nombre de usuario..." required class="form-control"><br>
                            <label><i class="fa fa-envelope-o"></i> Correo: </label>
                            <input type="email" name="email" placeholder="ejemplo@dominio.com" required class="form-control"><br>
                            <label><i class="fa fa-key"></i> Contraseña: </label>
                            <input type="password" id="contra" name="contra" placeholder="Ingrese una contraseña" required class="form-control"><br>
                            <label><i class="fa fa-venus-mars"></i> Sexo: </label>
                            <select class="form-control" name="sexo" required>
                                <option value="">Seleccione su sexo</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select><br>
                            <label><i class="fa fa-calendar"></i> Fecha de nacimiento: </label>
                            <input type="date" name="fecha" required class="form-control">
                            <br>
                            <br>
                            <button type='submit' id="registro2" class='btn btn-success'>Registrar Docente</button>
                        </form>
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