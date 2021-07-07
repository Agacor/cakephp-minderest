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
                <th>MPN</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th class="align-right">&sum; Clientes</th>
                <th>Fª Alta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productos as $producto): ?>

                <tr>
                    <td><?=$producto->id?></td>
                    <td><?=$producto->nif?></td>
                    <td><?=$producto->nombre?></td>
                    <td class="align-right"><?=$producto->total_clientes?></td>
                    <td><?=$producto->created?></td>
                    <td>
                        view | edit | delete
                    </td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</div>