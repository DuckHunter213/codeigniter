<?if(empty($clientes)){?>
<h1 class="cell text-center">Al parecer no tiene a ningun cliente registrado</h1>
<h2 class="cell text-center">
	Prueba agregando uno
	<a href="/Clientes/create">aqui</a>
</h2>
<?}else{?>

<div class="grid-x cell">
	<div class="cell auto">
		<input type="text" placeholder="Introduce el número de cliente" />
	</div>
	<div class="cell shrink">
		<button class="button">Buscar </button>
	</div>
</div>

<table class="cell auto stack hover">
	<tr>
		<th>Nombre</th>
		<th>Celular</th>
	</tr>
	<?foreach ($clientes->result() as $cliente) { ?>
	<tr>
		<th>
			<a href="/Clientes/details/<?= $cliente->PersonaID ?>">
				<?= $cliente->nombre; ?> <?= $cliente->apellidoPaterno; ?> <?= $cliente->apellidoMaterno; ?>
			</a>
		</th>
		<!--numero de celular-->
		<?if(!empty($cliente->numeroDeCelular)){?>
		<th>
			<?= $cliente->numeroDeCelular; ?>
		</th>
		<?}else{?>
		<th>Sin numero de celular</th>
		<?}?>
	</tr>
	<? } ?>
</table>
<? } ?>
