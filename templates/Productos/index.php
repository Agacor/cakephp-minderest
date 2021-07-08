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
                        <?=$this->Html->modalLink(__('ver'), "/productos/modal-view/$producto->id")?> | 
                        <?=$this->Html->modalLink(__('editar'), "/productos/modal-edit/$producto->id")?> | 
                        <?=$this->Html->link(__('eliminar'), "/productos/delete/$producto->id", [
                            'confirm' => __('Seguro que desea Eliminar el Producto {0}', $producto->display),
                        ])?>
                    </td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</div>