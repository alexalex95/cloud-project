<?php 
@session_start();

 include("conexion.php");//se incluye el archivo de conexion a la base de datos y al servidor
    $con=conectarse(); // esta variable guarda la conexion que devuele el archivo "conexion.php"
    
    $query = "SELECT * from imagen2 where id_im ='".$_SESSION["id_usuario"]."'";
    $result2 = mysqli_query($con,$query);
    $fila = mysqli_fetch_row($result2);
   // echo $_SESSION["id_usuario"];
?>

<section class="col-sm-12 col-md-12 col-lg-12 ">

<div class="container">
  <br>
<header>
  <nav class="navbar navbar-default">
<br>
<div class="conteiner-fluid">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
    <span class="sr-only">Menu</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>

<a href="#" class="navbar-brand"> <i class="fa fa-cloud"></i> CloudUDB</a>
  </div>

<div class="collapse navbar-collapse" id="navbar-1">

  <ul class="nav navbar-nav">

  
      <li class="dropdown">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button">
       <i class="fa fa-cogs"></i> Configuraciones de la cuenta <span class="caret"></span>
      </a>
      <ul class="dropdown-menu">
        <li><a href="javascript:" title="Editar" style="" onclick="datosuser()">Cambiar foto de perfil</li></a>
      </ul>
    </li>

<form class="navbar-form navbar-right" >
  <div class="form-group">
  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
      <i class="fa fa-pencil"></i> Editar nombre y correo
  </button>
   </div>
    </form>
     </ul>
     </div>
    </div>
   </nav>
  </header>
 </div>
</section>

<!--Fin de la barra de menu-->


<section>


<br><br>
<p class="row  col-md-2 col-lg-1">


<br>
<br>
<p class="row col-md-2 col-lg-1">
</p>
<section class="col-sm-5 col-md-5 col-lg-4">
<aside class="panel panel-primary">
<div class="panel-heading">
  <h3 class="panel-title">Usuario</h3>
</div>
<div class="panel-body">
    <form class="form-group" id="docente" action="modulos/proc.php" method="post" enctype="multipart/form-data">
    <div class=" container-fluid form-group">
      <center>
      <h2>Foto de Perfil</h2>
      </center>
      <center><?php
  echo "<img src='".$fila[1]."' alt='foto usuario' width='175px' class='img-responsive img-thumbnail'/>";



?></center>
      <hr>
    </div>

      <div class="form-group" id="mostrar1">
        <!--
      <lab>Estado del Alumno</lab>
       <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
     -->
    

 <div class="form-group">
          <lab>Usuario:</lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-user"></i>
          </div>
          <input class="form-control" type="text"  placeholder="<?php echo($_SESSION["usuario"]); ?>" disabled>
          </div>
          </div>

                

</div>


<div class="form-group" id="mostrar2" style='display:none;'>
        <!--
      <lab>Estado del Alumno</lab>
       <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
     -->
    

        <p class="text-muted text-center">Cambiar imagen de perfil </p>

                 

  


  <div class="form-group col-xs-5">
             <div class="input-group">
                   Seleccione una foto:
                   <input type="file" name="foto" id="foto"  />
                  </div>
                </div>



      <button type="submit" class="btn btn-block btn-info">Guardar</button>
    
       <a href="javascript:"  class="btn btn-block btn-primary" onclick="ss()">Cancelar</a>

</div>

  </form>
</div>
</aside>
</section>
<p class="row col-md-1 col-lg-1">
</p>
<section class="col-sm-5 col-md-5 col-lg-5">
<aside class="panel panel-primary">
<div class="panel-heading">
  <h3 class="panel-title">Datos Personales</h3>
</div>





<div class="panel-body">
<form class="" action="index.html" method="post">
    <center><h2>Información Personal</h2></center>


 <div class="form-group">
          <lab>Nombres:</lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-user"></i>
          </div>
          <input class="form-control" type="text"  placeholder="<?php echo($_SESSION["nombre"]); ?>" disabled>
          </div>
          </div>


<div class="form-group">
          <lab>Profesión:</lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-university"></i>
          </div>
          <input class="form-control" type="text"  placeholder="Profesion " disabled>
          </div>
          </div>

<div class="form-group">
          <lab> Formación Profesional</lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-graduation-cap"></i>
          </div>
          <input class="form-control" type="text"  placeholder="Universidad" disabled>
          </div>
          </div>


<div class="form-group">

          <lab>Sexo:</lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-venus-mars"></i>
          </div>
          <input class="form-control" type="text"  placeholder="<?php echo($_SESSION["sexo"]); ?>" disabled>
          </div>
          </div>

<div class="form-group">
          <lab>Contacto:</lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-envelope-o"></i>
          </div>
          <input class="form-control" type="text"  placeholder="<?php echo($_SESSION["correo"]); ?>" disabled>
          </div>
          </div>

<div class="form-group">
          <lab>Fecha de nacimiento: </lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-calendar"></i>
          </div>
<input type="text"  class="form-control datepicker" placeholder="<?php echo($_SESSION["fecha_nac"]); ?>" data-validation="required " disabled data-validation-error-msg="required">
          </div>
          </div>

</form>
    </div>

</aside>
</section>

<!--espacio de descripcion-->

</section>

<!-- Modal 1 -->

<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel " class="btn btn-edit"><i class="fa fa-pencil"></i> Datos Personales</h4>
      </div>
      <div class="modal-body">


 <form class="" action="procesos/actualizardatos.php" method="post">

 <div class="form-group">
          <lab>Nombres:</lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-user"></i>
          </div>
          <input class="form-control" type="text" name="nombre" id="nombre" placeholder="<?php echo($_SESSION["nombre"]); ?>" >
          </div>
          </div>
<div class="form-group">
          <lab>Contacto:</lab>
          <div class="input-group">
          <div class="input-group-addon">
          <i class="fa fa-envelope-o"></i>
          </div>
          <input class="form-control" type="text"  id="correo" name="correo" placeholder="<?php echo($_SESSION["correo"]); ?>" >
          </div>
          </div>






      <div class="modal-footer">
                            <button type='submit' id="registro2" class='btn'>Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>

<!-- Modal 2 -->
<div class="modal fade" id="myModal2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel " class="btn btn-edit"><i class="fa fa-pencil"></i> Descripcion</h4>
      </div>
      <div class="modal-body">


<div class="form-group">


       <label for="describe">Descrición: </label>
        <textarea class="form-control" rows="5" id="describe"></textarea>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
/*
var a = document.getElementById("1").placeholder;
var aa = document.getElementById("1");
var b = document.getElementById("2").placeholder;
var c = document.getElementById("3").placeholder;
var d = document.getElementById("4").placeholder;
*/

function mostrar(cantidad){

  for(var i=1; i<= cantidad; i++){
var txtTexto = document.getElementById(''+i); // obtengo referencia al objeto para manipularlo
txtTexto.disabled = false; // aplico el cambio de propiedad al elemento
}
document.getElementById('oculto').style.display = 'block';
document.getElementById('oculto2').style.display = 'block';
cantidad = 1

}

function ocultar(cantidad){

  location.reload(true);

}

function datosuser(){

  document.getElementById('mostrar2').style.display = 'block';
  document.getElementById('mostrar1').style.display = 'none';



}
function ss(){
 document.getElementById('mostrar2').style.display = 'none';
  document.getElementById('mostrar1').style.display = 'block';
  
}

</script> 

