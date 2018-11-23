
<div class="grid-x grid-margin-x">
	<div class="grid-x grid-margin-x content-box-blue cell">
		<div class="cell large-auto small-6">
			<label class="cell large-auto text-center">
				Identificador del cliente
			</label>
			<label class="text-center">
				<?=$cliente->PersonaID;?>
			</label>
		</div>
		<div class="cell large-auto small-6 text-center">
			<label>Nombre Completo</label>
			<label>
				<?=$cliente->nombre;?> <?=$cliente->apellidoPaterno;?> <?=$cliente->apellidoMaterno;?>
			</label>
		</div>
		<div class="cell large-auto content-box-red text-center">
			<label>Debe la cantidad de: $<?=$deudaTotal?>.<sup>00</sup></label>
		</div>
		<div class="cell">
			<div class="cell large-shrink grid-x align-right">
				<a href="/Clientes/edit/" class="button"> Editar cliente</a>
			</div>
		</div>
	</div>
	<div class="cell grid-x grid-margin-x align-right">
		<a href="/Ventas/create/<?=$cliente->PersonaID;?>" class="cell button large-shrink">Realizar una venta a este cliente</a>
	</div>
	<div class="cell large-12">
		<h3>Recibos</h3>
		<table class="stack">
			<tr>
				<th>Folio Recibo</th>
				<th>Fecha de Creación</th>
				<th>Liquidado</th>
				<th>Adeudo</th>
				<th>Acciones</th>
			</tr>
			<?if (!empty($recibos)) {
				foreach ($recibos->result() as $recibo) {?>
					<tr>
						<th><a href="#"><?=$recibo->numeroFolio?></a></th>
						<th><?=$recibo->fechaDeElaboracion?></th>
						<?if ($recibo->montoTotal == 0) {?>
						<th>Si</th>
						<?} else {?>
						<th>No</th>
						<?}?>
						<th>$<?=$recibo->montoTotal?></th>
						<th><a href="/Ventas/create/<?=$cliente->PersonaID;?>" class="cell button large-shrink">Realizar un abono</a></th>
					</tr>
				<?}?>
			<?}?>
		</table>
	</div>
</div>
