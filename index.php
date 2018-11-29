
    <head>
<meta charset="UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CloudUDB</title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
       <link rel="icon" href="img/Cloudnube.png" type="image/x-icon">

    </head>
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>CloudUDB</strong></h1>
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Iniciar Sesion</h3>
                                    <p>Ingresa tu usuario y contrase&ntilde;a para poder acceder a tu perfil:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form id="login" name="login" method="POST" autocomplete="off" onSubmit="return false" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="usuario">Usuario</label>
                                        <input type="text" name="usuario" placeholder="Usuario..." class="form-username form-control" id="usuario">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contra">Contrase&ntilde;a</label>
                                        <input type="password" name="contra" placeholder="Contraseña..." class="form-control" id="contra">
                                    </div>                                                              <div class="form-group"></div>
                                    <a href="modulos/Olvidecontra.php">He olvidado mi Contrase&ntilde;a</a>
                                    <br>
                                    <br>
                      

                                
                                    <button type="submit" name="formulario" id="formulario" class="btn">Iniciar!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                            <h3>Algunas opciones:</h3>
                            <div class="social-login-buttons">
                                <a class=" btn-link-1 " href="modulos/registro.php">
                                    <i class="fa fa-plus-square"></i> Registrarse
                                </a>
                                <a class="btn btn-link-1 " href="busqueda_alumno/index.html">
                                    <i class="fa fa-search "></i> Buscar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
                <script type="text/javascript">
// Funcion que nos permitira mandar los datos a ingresar
$(document).ready(function () {
    $('#formulario').click(function () {
        var formulario = $('#login').serializeArray();
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: 'procesos/ValidarLogin.php',
            data: formulario,
        }).done(function (response) {
            if(response.success == true) {
                location.href = "admin.php";
            }
            else{
                alert(response.mensaje, { title: response.titulo, icon: 'info', buttons: { 'Cerrar': function () { $(this).dialog("close"); }}}) (jquery);
            }
                });
    });
});


</script> 

