<form class="cell">
    <div class="grid-x grid-margin-x">
        <div class="grid-x grid-margin-x content-box-blue cell">
            <div class="cell large-auto small-6">
                <label class="text-center">Identificador del cliente</label>
                <label class="text-center"><?= $cliente->PersonaID; ?></label>
            </div>
            <div class="cell large-auto small-6 text-center">
                <label>Nombre Completo</label>
                <label><?= $cliente->nombre; ?> <?= $cliente->apellidoPaterno; ?> <?= $cliente->apellidoMaterno; ?></label>
            </div>
			<div class="cell large-auto text-center">
				<label>Domicilio</label>
				<label><?= $cliente->direccion; ?></label>
			</div>

			<div class="cell large-12 text-center">
				<h3>Referencias</h3>
				<label>Referencia1</label>
				<label>Referencia2</label>
			</div>

        </div>
        <!-- <div class="cell large-6">
            <label>Optometrista<label>
            <input type="text" />
        </div> -->
        <div class="cell large-6">
            <label>Monto total</label>
            <input type="number" placeholder="$0.00" />
        </div>

        <div class="cell large-6">
            <label>Descripcion del Lente</label>
            <textarea rows="4" cols="50" placeholder="Descripcion del lente a vender"></textarea>
        </div>

    </div>
</form>
