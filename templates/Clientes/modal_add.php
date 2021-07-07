<?php 
$this->assign('title', __('Añadir Cliente'));
?>

<?php $this->start('modal_form'); ?>
    <?= $this->Form->create(null, [
        'id'=>'formModalAddCliente', 'url' => "", 'type' => 'post', 'class'=>"needs-validation", 
        'autocomplete'=>'off', 'data-boxloader' => 'true', 'data-ajax-submit' => true,
    ]);?>
<?php $this->end(); ?>


<div class="row">
    <div class="col-xs-12 col-md-4">
        <!-- Nif / Cif -->
        <div class="form-group">
            <label class="control-label"><?=__('DNI/CIF')?></label>
            <?=$this->form->input('nif', [
                'class' => 'form-control', 'required' => true,
            ])?>
        </div>
    </div>
    <div class="col-xs-12 col-md-8">
        <!-- Nombre -->
        <?=$this->Form->control('nombre', [
            'class' => 'form-control', 'required' => true,
            'label' => __('Nombre'), 
        ])?>
    </div>
</div>

<!-- Observaciones -->
<?=$this->Form->control('observaciones', [
    'type' => 'textarea', 'rows'=> 3,
    'class' => 'form-control', 
    'label' => __('Observaciones'), 
])?>



