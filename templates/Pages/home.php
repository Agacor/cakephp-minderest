<?php 
$this->assign('title', __('Minderest'));
$this->set('pageHeader', __('PHP Minderest'));
?>

<div class="container">
    <h2><?=__('Diagrama EER')?></h2>

    <?=$this->Html->image('/img/eer-minderest.png', [
        'alt' => __('Diagrama EER'), 
        'class' => 'img-fluid',
    ])?>

    <p>En el supuesto Minderest tiene una tabla de <b>productos</b> y otra de <b>clientes</b>.</p>

    <p>Los productos de Minderest se pueden relacionar con muchos clientes a traves de la tabla <b>productos_clientes</b>.</p>
    
    <p>Los clientes no se pueden relacionar más de una vez con el mismo producto.</p>
    
    <p>Los clientes pueden definir (o sobreescribir) los atributos de un producto (nombre, precio, codigo, etc...) en la tabla productos_clientes.</p>

    <p>Puede considerarse un índice <b>FULLTEXT</b> en la columna nombre (e incluso descripción) de los productos (y productos_clientes) para facilitar búsquedas basadas en un índice de relevancia (MATCH(nombre, descripcion, ...) AGAINST('searchString')...).</p>
    
    <p>Cuando se dé de alta un nuevo registro de <b>productos_clientes</b> que no esté registrado en la tabla <b>productos</b> de Minderest, se ceará automáticamente un registro con los datos del cliente en la tabla <b>productos</b> (Minderest puede posteriormente modificar los datos de sus productos, respetándose los datos que introdujo el cliente). En la aplicación los productos se crearán siempre a través de un cliente.</p>


    <h2><?=__('Pasos Posteriores')?></h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel dapibus massa. Nam velit metus, commodo non orci at, vehicula tristique turpis. Nulla facilisi. Nunc vitae eros risus. Phasellus vestibulum nisi purus, a efficitur sem pellentesque vel. Nunc gravida, tellus vel dictum pharetra, dolor nulla suscipit risus, non pharetra mi urna iaculis metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu ex aliquam, mollis lacus a, semper urna. Phasellus vehicula molestie metus, vitae pharetra ex varius a. Suspendisse tincidunt orci sed tempor tristique. Fusce ut molestie lacus. Praesent ipsum elit, dapibus sollicitudin lobortis eu, suscipit id felis.</p>

    <h2><?=__('Tecnologías usadas')?></h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel dapibus massa. Nam velit metus, commodo non orci at, vehicula tristique turpis. Nulla facilisi. Nunc vitae eros risus. Phasellus vestibulum nisi purus, a efficitur sem pellentesque vel. Nunc gravida, tellus vel dictum pharetra, dolor nulla suscipit risus, non pharetra mi urna iaculis metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu ex aliquam, mollis lacus a, semper urna. Phasellus vehicula molestie metus, vitae pharetra ex varius a. Suspendisse tincidunt orci sed tempor tristique. Fusce ut molestie lacus. Praesent ipsum elit, dapibus sollicitudin lobortis eu, suscipit id felis.</p>

</div>