<?php 
    $this->set('headerLinks', [
        ['title' => __('Añadir Producto'), 'url' => '/productos/modal-add', 'options' => ['modal' => 'static']],
    ]) 
?>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th><?=__('MPN')?></th>
                <th><?=__('Nombre')?></th>
                <th><?=__('Descripción')?></th>
                <th class="text-right">&sum; <?=__('Productos Clientes')?></th>
                <th><?=__('Fª Alta')?></th>
                <th class="text-center">
                    <?=__('Acciones')?>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto): ?>

                <tr>
                    <td><?=$producto->id?></td>
                    <td><?=$producto->mpn?></td>
                    <td><?=$producto->nombre?></td>
                    <td><?=$producto->descripcion?></td>
                    <td class="text-right"><?=$producto->total_clientes ?: '0'?></td>
                    <td><?=$producto->created?></td>
                    <td class="text-center">
                        <?=__('ver')?> | <?=__('editar')?> | <?=__('eliminar')?>
                    </td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</div>