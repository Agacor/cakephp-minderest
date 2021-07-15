<?php
$this->assign('modal_size', 'modal-lg');
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#tab_cliente" class="nav-link active" data-toggle="tab">
                <?= __('Cliente')?>
            </a>
        </li>
        <li class="nav-item">
            <a href="#tab_cliente_productos"  class="nav-link" data-toggle="tab">
                <?= __('Productos Propios')?>
            </a>
        </li>
        <li class="nav-item">
            <a href="#tab_cliente_productos_competencia"  class="nav-link" data-toggle="tab">
                <?= __('Productos Competencia')?>
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <!-- Producto -->
        <div class="tab-pane active p-2" id="tab_cliente">
           <?=$this->element('Clientes/data_table')?>
        </div>

        <!-- Productos Propios -->
        <div class="tab-pane p-2" id="tab_cliente_productos">
           
            <?php if(!empty($cliente['ProductosPropios'])) : ?>
                <!-- Productos Propios -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th><?=__('MPN')?></th>
                                <th><?=__('Nombre')?></th>    
                                <th><?=__('Fª Alta')?></th>
                                <th class="text-center">
                                    <?=__('Acciones')?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cliente['ProductosPropios'] as $productoCliente): ?>
                                <tr>
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

            <?php else: ?>
                <div class="alert alert-info">
                    <?=__('Este cliente no tiene ningún producto.')?>
                </div>
            <?php endif; ?>

        </div>

        <!-- Productos Competencia -->
        <div class="tab-pane p-2" id="tab_cliente_productos_competencia">
           
            <?php if (!empty($productosCompetencia)) : ?>
                <!-- Productos Competencia -->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th><?=__('MPN')?></th>
                                <th><?=__('Nombre')?></th>    
                                <th><?=__('Cliente')?></th>    
                                <th><?=__('Fª Alta')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($productosCompetencia as $productoCompetencia): ?>
                                <tr>
                                    <td><?=$productoCompetencia->Producto->mpn?></td>
                                    <td><?=$productoCompetencia->nombre?></td>
                                    <td><?=$productoCompetencia->Cliente->display?></td>
                                    <td><?=$productoCompetencia->created?></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>

            <?php else: ?>
                <div class="alert alert-info">
                    <?=__('Este cliente no tiene ningún producto compartido con los demás clientes.')?>
                </div>
            <?php endif; ?>

        </div>
        
    </div>
</div>