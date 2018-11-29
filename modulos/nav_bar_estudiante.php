<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="img/user_icon.png" style="background: #ffffff;" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo($_SESSION["nombre"]); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header" align="center">MENÚ PRINCIPAL</li>
      <li>
        <a href="?mod=Perfilalumno">
          <i class="fa fa-user"></i> <span>Perfil Alumno</span>
        </a>
      </li>

      <li>
      <a href="?mod=Modexistentes">
        <i class="fa fa-cubes"></i> <span>M&oacute;dulos</span>
         </a>
       </li>


   </ul>
  </section>
  <!-- /.sidebar -->

</aside>

