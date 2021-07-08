<div class="table-responsive">
    <table class="table table-striped table-sm">
        <tr>
            <th><?=__('Manufacturer P/N')?></th>
            <td><?=$producto->mpn?></td>
        </tr>
        <tr>
            <th><?=__('Nombre')?></th>
            <td><?=$producto->nombre?></td>
        </tr>
        <?php if(!empty($producto->descripcion)): ?>
            <tr>
                <th colspan="2"><?=__('Descripción')?></th>
            </tr>
            <tr>
                <td colspan="2"><?=nl2br($producto->descripcion)?></td>
            </tr>
        <?php endif;?>
    </table>
</div>
