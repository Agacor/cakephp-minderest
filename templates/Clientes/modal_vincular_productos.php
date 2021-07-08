<?php 
$this->assign('title', __('Vincular Productos Cliente'));
$this->assign('modal_size', 'modal-lg');
?>

<?php $this->start('modal_form'); ?>
    <?= $this->Form->create(null, [
        'id'=>'formModalVinvularProductosClientes', 'url' => "", 'type' => 'post', 'class'=>"needs-validation", 
        'autocomplete'=>'off', 'data-boxloader' => 'true', //'data-ajax-submit' => true,
    ]);?>
<?php $this->end(); ?>

<script>
<?php $this->append('modalCallback'); ?>

    //var conditions = {cliente_id: $('#selectClienteId').val()};
    var cacheAutocompleteProductos = {};

    // Clientes Handler
    $('#selectClienteId').on('change', function(){
        // Reset Productos
        cacheAutocompleteProductos = {};
        $("#autocompleteProductos").val('');
        $("#autocompleteProductosId").val('');
        $("#nombreProductoCliente").val('').prop('disabled', true);
        // Toggle Disabled
        $("#autocompleteProductos").prop('disabled', (!$(this).val()));
        $("#autocompleteProductos").attr('placeholder', '<?=__('Busque un producto')?>');
    });

    // Autocomplete Productos
    $("#autocompleteProductos").autocomplete({
        minLength: 3,
        source: function( request, response ) {
            var term = request.term;
            var search = {
                search:term,
                cliente_id: $('#selectClienteId').val()
            };
            if (term in cacheAutocompleteProductos) {
                response(cacheAutocompleteProductos[term]);
                return;
            }
            $.getJSON('<?=$this->Url->build('/ajax/autocomplete-productos/')?>', search, function(data, status, xhr) {
                cacheAutocompleteProductos[term] = data;
                response(data);
            });
        },
        select: function(event , ui){
            if (ui.item){
                console.log(ui.item);
                $("#autocompleteProductosId").val(ui.item.id);
                $("#nombreProductoCliente").val(ui.item.nombre).prop('disabled', false);
            }
        },
        change: function(event, ui){
            if (!ui.item){
                $("#autocompleteProductos").val('');
                $("#autocompleteProductosId").val('');
                $("#nombreProductoCliente").val('').prop('disabled', true);
            }
        }
    }); 

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

<!-- Nombre Producto Cliente -->
<?=$this->Form->control('nombre', [
    'id' => 'nombreProductoCliente',
    'class' => 'form-control form-control-sm', 'required' => true, 'disabled' => true,
    'label' => __('Nombre'),
    'placeholder' => __('Seleccione Producto'),
])?>