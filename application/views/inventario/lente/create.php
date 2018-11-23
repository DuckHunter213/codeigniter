<form class="cell">

    <div class="grid-x grid-margin-x">
        <div class="cell large-6">
            <label>Optometrista Responsable<label>
            <select>
            <? if(empty($optometristas)) { ?>
                <option>No hay optometristas registrados</option>
            <? } else { ?>
                <option>Selecciona un optometrista...</option>
                <? foreach ($optometristas->result() as $optometrista){ ?>
                    <option value=<?= $optometrista->PersonaID ?> ><?=$optometrista->nombre?> <?=$optometrista->apellidoPaterno?> <?=$optometrista->apellidoPaterno?></option>
                <? } ?>
            <? } ?>
            </select>
        </div>
        <div class="cell large-3">
            <label>Graduacion Izquierda<label>
            <input type="text" />
        </div>
        <div class="cell large-3">
            <label>Graduacion Derecha<label>
            <input type="text" />
        </div>
        <div class="cell large-6">
            <label>Material</label>
            <input type="text" />
        </div>

    </div>
</form>