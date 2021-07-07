<?php 
    $this->set('headerLinks', [
        ['title' => __('Añadir Cliente'), 'url' => '/clientes/modal-add', 'options' => ['modal' => 'static']],
        ['title' => __('Vincular Productos'), 'url' => '/clientes/modal-vincular-productos', 'options' => ['modal' => 'static']],
    ]) 
?>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nif</th>
                <th>Nombre</th>
                <th class="align-right">&sum; Productos</th>
                <th>Fª Alta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clientes as $cliente): ?>

                <tr>
                    <td><?=$cliente->id?></td>
                    <td><?=$cliente->nif?></td>
                    <td><?=$cliente->nombre?></td>
                    <td class="align-right"><?=$cliente->total_productos?></td>
                    <td><?=$cliente->created?></td>
                    <td>
                        view | edit | delete
                    </td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>
</div>