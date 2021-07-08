<?php 
$this->assign('title', __('Editar Producto'));
?>

<?php $this->start('modal_form'); ?>
    <?= $this->Form->create($producto, [
        'id'=>'formModalEditarProducto', 'url' => "", 'type' => 'post', 'class'=>"needs-validation", 
        'autocomplete'=>'off', 'data-boxloader' => 'true',
    ]);?>
<?php $this->end(); ?>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <!-- MPN -->
        <?=$this->Form->control('mpn', [
            'class' => 'form-control form-control-sm', 'required' => true,
            'label' => __('MPN'), 
            'placeholder' => __('Manufacturer Part Number'),
        ])?>
    </div>
    <div class="col-xs-12 col-md-6">
        <!-- EAN 13 -->
        <?=$this->Form->control('ean13', [
            'class' => 'form-control form-control-sm',
            'label' => __('EAN 13'), 
        ])?>
    </div>
</div>

<!-- Nombre -->
<?=$this->Form->control('nombre', [
    'class' => 'form-control form-control-sm', 'required' => true,
    'label' => __('Nombre'), 
])?>
<!-- Descripción -->
<?=$this->Form->control('descripcion', [
    'type' => 'textarea', 'rows'=> 3,
    'class' => 'form-control form-control-sm', 
    'label' => __('Descripción'), 
])?>



