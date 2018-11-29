<form method="post" enctype="multipart/form-data" action="procesos/subirArchivos.php">
<div class="col-md-12">
		
	<h2><i class="fa fa-cloud-upload"></i> Subir archivos</h2>
	<hr>
	<div class="form-group">
		<label><i class="fa fa-book"></i> Nombre del archivo:</label>
		<input name="nombre" type="text" class="form-control" data-validation="required" data-validation-error-msg="Ingrese el nombre del archivo"></input>
	</div>

	<div class="form-group">
		<label><i class="fa fa-file-archive-o"></i> Seleccionar archivo:</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="16000000">
		<input name="archivo" id="archivo" type="file" class="form-control" data-validation="required" data-validation-error-msg="Seleccione un archivo a subir"></input>
	</div>

	<!--<div class="form-group">
		<label><i class="fa fa-image"></i> Seleccionar imagenes / capturas:</label>
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
		<input name="imagenes" type="file" class="form-control"></input>
	</div>-->

	<div class="form-group">
		<label><i class="fa fa-pencil"></i> Descripcion del archivo:</label>
		<textarea name="descripcion" rows="4" cols="5" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-info">Subir archivo</button>
	</div>

</div>
</form>