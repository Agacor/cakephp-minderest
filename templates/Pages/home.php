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

    <p><?=__('En el supuesto Minderest tiene una tabla de <b>productos</b> y otra de <b>clientes</b>.')?></p>

    <p><?=__('Los productos de Minderest se pueden relacionar con muchos clientes a traves de la tabla <b>productos_clientes</b>.')?></p>
    
    <p><?=__('Los clientes no se pueden relacionar más de una vez con el mismo producto.')?></p>
    
    <p><?=__('Los clientes pueden definir (o sobreescribir) los atributos de un producto (nombre, precio, codigo, etc...) en la tabla productos_clientes.')?></p>

    <p><?=__("Puede considerarse un índice <b>FULLTEXT</b> en la columna nombre (e incluso descripción) de los productos (y productos_clientes) para facilitar búsquedas basadas en un índice de relevancia (MATCH(nombre, descripcion, ...) AGAINST('searchString')...).")?></p>
    
    
    <h2><?=__('AjaxController')?></h2>

    <p><?=__('Para facilitar las llamadas AJAX, he creado un controlador específico para realizar las distintas llamadas. Estas llamadas aceptan el parametro ?search para filtrar los resultados.')?><p>
        
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
    <p><?=__('Para el diseño de las vistas, he creado un <a href="https://book.cakephp.org/4/en/views/themes.html" target="_blank">Theme de CakePHP4</a> adaptando una plantilla de ejemplo de Bootstrap 4.6.')?></p>

    <div class="highlight">
        <pre class="chroma mt-0"><code class="language-text" data-lang="text">cakephp-minderest/
└── plugins/
    └── Bootstrap4
        ├── resources/
        │   └── locales
        │       ├── cake.pot
        │       └── default.pot
        ├── src
        │   ├── ...
        ├── templates
        │   ├── element
        │   │   ├── content
        │   │   │   └── header.php
        │   │   └── flash
        │   │       ├── error.php
        │   │       └── success.php
        │   ├── Error
        │   │   ├── error400.php
        │   │   ├── error500.php
        │   │   ├── modal400.php
        │   │   └── modal500.php
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

    <h2><?=__('MVC')?></h2>

    <p><?=__('La aplicación ha sido construida usando la última versión de CakePHP 4. Los archivos más destacados del proyecto se pueden encontrar en:')?></p>

    <div class="highlight">
        <pre class="chroma mt-0"><code class="language-text" data-lang="text">cakephp-minderest/
├── config/
│   ├── Migrations
│   │   └── 20210708014912_Initial.php
│   ├── Seeds
│   │   ├── ClientesSeed.php
│   │   ├── DatabaseSeed.php
│   │   └── ProductosSeed.php
│   ├── app_local.php
│   ├── app.php
│   ├── bootstrap.php
│   └── routes.php
├── ...
├── resources/
│   └── locales
│       ├── cake.pot
│       └── default.pot
├── src/
│   ├── ...
│   ├── Controller
│   │   ├── AjaxController.php
│   │   ├── AppController.php
│   │   ├── ClientesController.php
│   │   ├── ErrorController.php
│   │   ├── PagesController.php
│   │   ├── ProductosClientesController.php
│   │   └── ProductosController.php
│   ├── Model
│   │   ├── ...
│   │   ├── Entity
│   │   │   ├── Cliente.php
│   │   │   ├── Producto.php
│   │   │   └── ProductoCliente.php
│   │   └── Table
│   │       ├── AppTable.php
│   │       ├── ClientesTable.php
│   │       ├── ProductosClientesTable.php
│   │       └── ProductosTable.php
│   ├── View
│   │   ├── ...
│   │   ├── Helper
│   │   │   └── MyHtmlHelper.php
│   │   ├── AjaxView.php
│   │   └── AppView.php
│   └── Application.php
│
├── templates
├── ...
│   ├── Clientes
│   │   ├── index.php
│   │   ├── modal_add.php
│   │   ├── modal_view.php
│   │   └── modal_vincular_productos.php
│   ├── element
│   │   ├── Clientes
│   │   │   └── data_table.php
│   │   ├── flash
│   │   │   ├── ...
│   │   ├── Productos
│   │   │   └── data_table.php
│   │   └── sidebar_menu.php
│   ├── Pages
│   │   └── home.php
│   ├── Productos
│   │   ├── index.php
│   │   ├── modal_add.php
│   │   ├── modal_edit.php
│   │   └── modal_view.php
│   └── ProductosClientes
│       └── index.php
└── webroot
    ├── ...
    ├── img
    │   ├── eer-minderest.png
    │   ├── logo_Minderest_ront.svg
    │   └── minderest.logo.svg
    ├── ...</code></pre>
    </div>

    <h2><?=__('Siguientes Pasos')?></h2>

    <p><?=__('La aplicación puede ser fácilmente internacionalizada y localizada. Cakephp dispone de una utilidad en la consola para generar todos los archivos de traducción (*.pot files) definidos a partir de las funciones <a href="https://www.php.net/manual/es/book.gettext.php" target="_blank">gettext</a> de PHP.')?></p>

    <div class="highlight">
        <pre class="chroma mt-0"><code class="language-text" data-lang="text">cakephp-minderest> bin/cake i18n extract
cakephp-minderest> bin/cake i18n extract --plugin Bootstrap4</code></pre>
    </div>

    <p><?=__('Los archivos generados se pueden consultar en /resources/locales/ y /plugins/Bootstrap4/resources/locales/ respectivamente.')?></p>

</div>