<?php 
$this->assign('title', __('Vincular Productos Cliente'));
$this->assign('modal_size', 'modal-lg');
?>

<?php $this->start('modal_form'); ?>
    <?= $this->Form->create(null, [
        'id'=>'formModalVinvularProductosClientes', 'url' => "", 'type' => 'post', 'class'=>"needs-validation", 
        'autocomplete'=>'off', 'data-boxloader' => 'true', 'data-ajax-submit' => true,
    ]);?>
<?php $this->end(); ?>

<script>
<?php $this->append('modalCallback'); ?>

    // Clientes Handler
    $('#selectClienteId').on('change', function(){
        // Reset Productos
        $("#autocompleteProductos").val('');
        $("#autocompleteProductosId").val('');
        // Toggle Disabled
        $("#autocompleteProductos").prop('disabled', (!$(this).val()));
        $("#autocompleteProductos").attr('placeholder', '<?=__('Busque un producto')?>');
    });

    // var productos;
    // var conditions = {cliente_id: $('#selectClienteId').val()};
    // $.getJSON('<?=$this->Url->build("/ajax/autocomplete-productos")?>', conditions, function(data){
    //     productos = data.autocomplete; 
    //     $("#autocompleteProductos").autocomplete({
    //         source: productos,
    //         change: function (event, ui) {
    //             if(!ui.item){
    //                 $(this).val('');
    //                 $("#autocompleteProductosId").val('');
    //             } else {
    //                 $("#autocompleteProductosId").val(ui.item.id);
    //             }
    //         }
    //     });
    // });

<?php $this->end(); ?>

</script>

<div class="row">
    <div class="col-xs-12 col-md-4">
        <!-- Cliente -->
        <?=$this->Form->control('cliente_id', [
            'id' => 'selectClienteId',
            'type' => 'select', 'options' => $clientes,
            'class' => 'form-control form-control-sm', 'required' => true, 'readonly' => !empty($cliente),
            'label' => __('Cliente'),
            'empty' => __('Seleccione Cliente'),
            'value' => $cliente->id ?? '',
        ])?>
    </div>
    <div class="col-xs-12 col-md-8">
        <!-- Producto -->
        <?=$this->Form->hidden('producto_id', ['id' => 'autocompleteProductosId'])?>
        <?=$this->Form->control('producto', [
            'id' => 'autocompleteProductos',
            'class' => 'form-control form-control-sm', 'required' => true,
            'label' => __('Producto'), 'disabled' => empty($cliente),
            'placeholder' => empty($cliente) ? __('Seleccione Cliente') : __('Busque un producto'),
        ])?>
    </div>
</div>