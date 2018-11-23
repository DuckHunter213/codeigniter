<?
if(!empty($Error)){
	print "
		<div class='cell text-center content-box-red'>
		<label >{$Error}</label>
		</div>
	";
}
?>

<form name="inicioSesionUsuario" method="post" action="/Account/login">
	<div class="cell auto content-box-green">
		<h3 class="cell text-center">Iniciar Sesión</h3>
		<label class="cell">Nombre de usuario:</label>
		<input type="text" name="inputUsuarioLogin" />
		<label class="cell">Contraseña: </label>
		<input type="password" name="inputPasswordLogin" />
		<button class="cell shirnk button align-right" name="botonGuardar"> Iniciar Sesión </button>
	</div>
</form>
