<?php 
$this->assign('title', __('Editar Producto'));
?>

<?php $this->start('modal_form'); ?>
    <?= $this->Form->create($producto, [
        'id'=>'formModalEditarProducto', 'url' => "", 'type' => 'post', 'class'=>"needs-validation", 
        'autocomplete'=>'off', 'data-boxloader' => 'true',
    ]);?>
<?php $this->end(); ?>

<!-- MPN -->
<?=$this->Form->control('mpn', [
    'class' => 'form-control form-control-sm', 'required' => true,
    'label' => __('MPN'), 
    'placeholder' => __('Manufacturer Part Number'),
])?>
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



