<?php 
    $this->set('headerLinks', [
        //['title' => __('Añadir Cliente'), 'url' => '/clientes/modal-add', 'options' => ['modal' => 'static']],
        ['title' => __('Vincular Productos'), 'url' => '/clientes/modal-vincular-productos', 'options' => ['modal' => 'static']],
    ]) 
?>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th><?=__('DNI/CIF')?></th>
                <th><?=__('Nombre')?></th>
                <th class="text-right">&sum; <?=__('Productos')?></th>
                <th class="text-center">
                    <?=__('Acciones')?>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente): ?>

                <tr>
                    <td><?=$cliente->id?></td>
                    <td><?=$cliente->nif?></td>
                    <td><?=$cliente->nombre?></td>
                    <td class="text-right"><?=$cliente->ProductosPropios[0]->total ?? '0'?></td>
                    <td class="text-center">
                        <?=$this->Html->modalLink(__('ver'), "/clientes/modal-view/$cliente->id")?> | 
                        <?=$this->Html->modalLink(__('vincular productos'), "/clientes/modal-vincular-productos/$cliente->id")?>
                    </td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</div>