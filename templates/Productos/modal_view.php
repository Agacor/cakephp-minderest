<?php
$this->assign('modal_size', 'modal-lg');
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#tab_producto" class="nav-link active" data-toggle="tab">
                <?= __('Producto')?>
            </a>
        </li>
        <li class="nav-item">
            <a href="#tab_producto_productos_clientes"  class="nav-link" data-toggle="tab">
                <?= __('Productos Clientes')?>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <!-- Producto -->
        <div class="tab-pane active p-2" id="tab_producto">
           <?=$this->element('Productos/data_table')?>
        </div>

        <!-- Productos Relacionados -->
        <div class="tab-pane p-2" id="tab_producto_productos_clientes">
           
            <?php if(!empty($producto['ProductosClientes'])) : ?>
                <!-- Productos Clientes -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th><?=__('Nombre')?></th>
                                <th><?=__('Cliente')?></th>
                                <th><?=__('Fª Alta')?></th>
                                <th class="text-center">
                                    <?=__('Acciones')?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($producto['ProductosClientes'] as $productoCliente): ?>
                                <tr>
                                    <td><?=$productoCliente->nombre?></td>
                                    <td><?=$productoCliente->Cliente->display?></td>
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

            <?php else: ?>
                <div class="alert alert-info">
                    <?=__('Este producto no tiene ningún producto de cliente relacionado.')?>
                </div>
            <?php endif; ?>

        </div>
        
    </div>
</div>