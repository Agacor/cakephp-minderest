<?php 
$this->assign('title', __('PHP Minderest'));
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

    
    <h2><?=__('AjaxController')?></h2>

    <p>Para facilitar las llamadas AJAX, he creado un controlador específico para realizar las distintas llamadas. Estas llamadas aceptan el parametro ?search para filtrar los resultados.<p>
        
    <ul>
        <li>
            <?=$this->Html->link('/ajax/autocomplete-clientes', '/ajax/autocomplete-clientes')?>
        </li>
        <li>
            <?=$this->Html->link('/ajax/autocomplete-productos', '/ajax/autocomplete-productos')?>
        </li>
        <li>
            <?=$this->Html->link('/ajax/autocomplete-productos-clientes', '/ajax/autocomplete-productos-clientes')?>
        </li>
        <!-- <li>
            <?=$this->Html->link('/ajax/search-related-products/{id}', '/ajax/search-related-products/1')?>
        </li> -->
    </ul>

    <h2><?=__('Theme')?></h2>
    <p>Para el diseño de las vistas, he creado un <a href="https://book.cakephp.org/4/en/views/themes.html" target="_blank">Theme de CakePHP4</a> adaptando una plantilla de ejemplo de Bootstrap 4.6.</p>

    <div class="highlight">
        <pre class="chroma mt-0"><code class="language-text" data-lang="text">
cakephp-minderest/
└── plugins/
    └── Bootstrap4
        ├── src
        │   ├── ...
        ├── templates
        │   ├── element
        │   │   ├── content
        │   │   │   └── header.php
        │   │   └── flash
        │   │       ├── error.php
        │   │       └── success.php
        │   └── layout
        │       ├── default.php
        │       ├── modal_form.php
        │       ├── modal_tabs.php
        │       └── modal.php
        └── webroot
            ├── css
            │   ├── custom.css
            │   └── dashboard.css
            ├── js
            │   ├── app.js
            │   └── dashboard.js
            └── plugins
                ├── ...</code></pre>
    </div>

    <h2><?=__('Pasos Posteriores')?></h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel dapibus massa. Nam velit metus, commodo non orci at, vehicula tristique turpis. Nulla facilisi. Nunc vitae eros risus. Phasellus vestibulum nisi purus, a efficitur sem pellentesque vel. Nunc gravida, tellus vel dictum pharetra, dolor nulla suscipit risus, non pharetra mi urna iaculis metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu ex aliquam, mollis lacus a, semper urna. Phasellus vehicula molestie metus, vitae pharetra ex varius a. Suspendisse tincidunt orci sed tempor tristique. Fusce ut molestie lacus. Praesent ipsum elit, dapibus sollicitudin lobortis eu, suscipit id felis.</p>

    <h2><?=__('Tecnologías usadas')?></h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel dapibus massa. Nam velit metus, commodo non orci at, vehicula tristique turpis. Nulla facilisi. Nunc vitae eros risus. Phasellus vestibulum nisi purus, a efficitur sem pellentesque vel. Nunc gravida, tellus vel dictum pharetra, dolor nulla suscipit risus, non pharetra mi urna iaculis metus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec eu ex aliquam, mollis lacus a, semper urna. Phasellus vehicula molestie metus, vitae pharetra ex varius a. Suspendisse tincidunt orci sed tempor tristique. Fusce ut molestie lacus. Praesent ipsum elit, dapibus sollicitudin lobortis eu, suscipit id felis.</p>

</div>