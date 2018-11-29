<?php
@session_start();
define('MODULO_DEFECTO','inicio');
define('LAYOUT_DEFECTO','inicio.php');//Administrador
define('LAYOUT_INICIO','inicio.php');//Para cualquier tipo de usuario
define('MODULO_PATH',realpath('modulos'));
define('LAYOUT_PATH',realpath('plantillas'));

if ($_SESSION['tipo_usuario']==2){ //DOCENTES
include("modulos/nav_bar_docente.php");

$conf['inicio'] = array(
        'archivo' => 'perfilDoc.php',
        'layout' => LAYOUT_DEFECTO,
    );
     $conf['Perfildocente'] = array(
        'archivo' => 'perfilDoc.php',
        'layout' => LAYOUT_INICIO,
    );

     $conf['AgregarMaterias'] = array(
        'archivo' => 'frmAgregarMateriasDocente.php',
        'layout' => LAYOUT_INICIO,
    );
     $conf['irMateria'] = array(
        'archivo' => 'ContenidoMateriasDocente/frmMateria.php',
        'layout' => LAYOUT_INICIO,
    );

    $conf['error'] = array(
        'archivo' => '404.php',
        'layout' => LAYOUT_INICIO,
    );
}
if ($_SESSION['tipo_usuario']==3){ //ALUMNOS
include("modulos/nav_bar_estudiante.php");

$conf['inicio'] = array(
        'archivo' => 'perfilAlu.php',
        'layout' => LAYOUT_DEFECTO,
      );
 $conf['Perfilalumno'] = array(
        'archivo' => 'perfilAlu.php',
        'layout' => LAYOUT_DEFECTO,
      );
 $conf['PruebaModuloMaterias'] = array(
        'archivo' => 'frmMaterias.php',
        'layout' => LAYOUT_INICIO,
    );
    $conf['Modexistentes'] = array(
       'archivo' => 'mod.php',
       'layout' => LAYOUT_INICIO,
   );
        $conf['error'] = array(
        'archivo' => '404.php',
        'layout' => LAYOUT_INICIO,
    );
}
if ($_SESSION['tipo_usuario']==1){ //SUPER USUARIO
include("modulos/nav_bar_admin.php");

    $conf['cambiar_contra'] = array(
    'archivo' => 'cambiar_contra.php',
    'layout' => LAYOUT_INICIO
    );
        $conf['cambiarestado'] = array(
    'archivo' => 'cambiar_estado.php',
    'layout' => LAYOUT_INICIO
    );
       $conf['inicio'] = array(
        'archivo' => 'perfiladmin.php',
        'layout' => LAYOUT_DEFECTO,
    );

       $conf['PerfilAdmin'] = array(
        'archivo' => 'perfiladmin.php',
        'layout' => LAYOUT_DEFECTO,
    );
     $conf['AgregarDocente'] = array(
        'archivo' => 'agregardocente.php',
        'layout' => LAYOUT_INICIO,
    );

       $conf['CrearAdmin'] = array(
        'archivo' => 'crearAdmin.php',
        'layout' => LAYOUT_INICIO,
    );


     $conf['AgregarMaterias'] = array(
        'archivo' => 'frmAgregarMateriasDocente.php',
        'layout' => LAYOUT_INICIO,
    );
     $conf['irMateria'] = array(
        'archivo' => 'ContenidoMateriasDocente/frmMateria.php',
        'layout' => LAYOUT_INICIO,
    );


     $conf['Perfildocente'] = array(
        'archivo' => 'perfilDoc.php',
        'layout' => LAYOUT_INICIO,
    );

     $conf['AgregarMaterias'] = array(
        'archivo' => 'frmAgregarMateriasDocente.php',
        'layout' => LAYOUT_INICIO,
    );
    $conf['error'] = array(
        'archivo' => '404.php',
        'layout' => LAYOUT_INICIO,
    );


}
//DE MAS XD
 $conf['Perfilalumno'] = array(
        'archivo' => 'perfilAlu.php',
        'layout' => LAYOUT_DEFECTO,
      );
    $conf['logout'] = array(
        'archivo' => 'logout.php',
        'layout' => LAYOUT_INICIO
    );
    $conf['error'] = array(
        'archivo' => '404.php',
        'layout' => LAYOUT_INICIO,
    );


    $conf['login'] = array(
        'archivo' => 'login.php',
        'layout' => LAYOUT_INICIO,
    );

     $conf['perfil'] = array(
        'archivo' => 'perfil.php',
     );

     $conf['Form'] = array(
        'archivo' => 'registro.php',
     );

     $conf['Modexistentes'] = array(
        'archivo' => 'mod.php',
        'layout' => LAYOUT_INICIO,
    );


?>
