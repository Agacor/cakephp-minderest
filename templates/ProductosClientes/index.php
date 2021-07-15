<?php 
    $this->set('headerLinks', [
        ['title' => __('Vincular Productos'), 'url' => '/clientes/modal-vincular-productos', 'options' => ['modal' => 'static']],
    ]) 
?>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th><?=__('Cliente')?></th>
                <th><?=__('Manufacturer P/N')?></th>
                <th><?=__('Nombre')?></th>
                <th><?=__('Fª Alta')?></th>
                <th class="text-center">
                    <?=__('Acciones')?>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productosClientes as $productoCliente): ?>

                <tr>
                    <td><?=$productoCliente->Cliente->display?></td>
                    <td><?=$productoCliente->Producto->mpn?></td>
                    <td><?=$productoCliente->nombre?></td>
                    <td><?=$productoCliente->created?></td>
                    <td class="text-center">
                        <?=$this->Html->link(__('eliminar'), "/productos-clientes/delete/$productoCliente->id", [
                            'confirm' => __('Seguro que desea Eliminar el Producto {0}', $productoCliente->display),
                        ])?>
                    </td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</div>