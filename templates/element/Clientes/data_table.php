<div class="table-responsive">
    <table class="table table-striped table-sm">
        <tr>
            <th><?=__('Fª Alta')?></th>
            <td><?=$cliente->created->nice()?></td>
            <th><?=__('Fª Última Modificación')?></th>
            <td><?=$cliente->modified->nice()?></td>
        </tr>
    </table>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <tr>
            <th><?=__('NIF/CIF')?></th>
            <td><?=$cliente->nif?></td>
        </tr>
        <tr>
            <th><?=__('Nombre')?></th>
            <td><?=$cliente->nombre?></td>
        </tr>
        <?php if(!empty($cliente->observaciones)): ?>
            <tr>
                <th colspan="2"><?=__('Observaciones')?></th>
            </tr>
            <tr>
                <td colspan="2"><?=nl2br($cliente->observaciones)?></td>
            </tr>
        <?php endif;?>
    </table>
</div>
