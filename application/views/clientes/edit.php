<form class="cell" action="/Clientes/create" method="Post" autocomplete="off">
	<h1>Editar un cliente</h1>
    <div class="grid-x grid-margin-x">
		<div class="cell large-4">
			<label>Nombre/s</label>
			<input autocomplete="off" type="text" name="inputNombre" />
		</div>
		<div class="cell large-4 small-6">
			<label>Apellido Paterno</label>
			<input autocomplete="off" type="text" name="inputApellidoPaterno" />
		</div>
		<div class="cell large-4 small-6 ">
			<label>Apellido Materno</label>
			<input autocomplete="off" type="text" name="inputApellidoMaterno" />
		</div>
		<div class="cell large-12">
			<label>Dirección</label>
			<input autocomplete="off" type="text" name="inputDirrecion" />
		</div>
		<div class="cell large-12">
			<label>Entre calle *</label>
			<input autocomplete="off" class="form-optional" type="text" name="" />
		</div>
		<div class="cell large-12">
			<label>Y calle *</label>
			<input autocomplete="off" class="form-optional" type="text" name="" />
		</div>
		<div class="cell large-6 small-6">
			<label>Celular</label>
			<input autocomplete="off" type="tel" name="inputNumeroDeCelular" />
		</div>
		<div class="cell large-6 small-6">
			<label>Número de Casa</label>
			<input autocomplete="off" type="tel" name="inputNumeroDeCasa" />
		</div>
		<div class="cell large-12">
			<label>Correo Electronico</label>
			<input autocomplete="off" type="email" name="inputCorreoElectronico" />
		</div>
	</div>
	<div class="grid-x align-right">
		<button class="button large-shrink">Registrar Nuevo Cliente</button>
	</div>
</form>
