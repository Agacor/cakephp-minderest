<?php 
$this->assign('title', __('Minderest'));
$this->set('pageHeader', __('Inicio'));
$this->set('sidebarMenu', 'Inicio');
?>

<div class="container">
    <h1><?=__('Diagrama EER')?></h1>

    <?=$this->Html->image('/img/eer-minderest.png', [
        'alt' => __('Diagrama EER'), 
        'class' => 'img-fluid',
    ])?>

    <p>En el supuesto Minderest tiene una tabla de productos y otra de clientes.</p>

    <p>Los productos de Minderest se pueden relacionar con muchos clientes a traves de la tabla productos_clientes.</p>
    
    <p>Los clientes no se pueden relacionar más de una vez con el mismo producto.</p>
    
    <p>Los clientes pueden definir (o sobreescribir) los atributos de un producto (nombre, precio, codigo, etc...) en la tabla productos_clientes.</p>

    <p>Puede considerarse un índice fulltext en la columna nombre (e incluso descripción) de los productos (y productos_clientes) para facilitar búsquedas basadas en un índice de relevancia (MATCH(nombre, descripcion, ...) AGAINST('searchString')...).</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel dapibus massa. Nam velit metus, commodo non orci at, vehicula tristique turpis. Nulla facilisi. Nunc vitae eros risus. Phasellus vestibulum nisi purus, a efficitur sem pellentesque vel. Nunc gravida, tellus vel dictum pharetra, dolor nulla suscipit risus, non pharetra mi urna iaculis metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu ex aliquam, mollis lacus a, semper urna. Phasellus vehicula molestie metus, vitae pharetra ex varius a. Suspendisse tincidunt orci sed tempor tristique. Fusce ut molestie lacus. Praesent ipsum elit, dapibus sollicitudin lobortis eu, suscipit id felis.</p>

</div>