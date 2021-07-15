<!-- MENÚ PRINCIPAL -->
<h6 class="sidebar-heading d-flex px-3 mt-1 mb-1 text-muted">
    <span><?=__('Menú Princial')?></span>
</h6>
<ul class="nav flex-column">
    <!-- Clientes-->
    <li class="nav-item">
        <?=$this->Html->link(__('Clientes'), '/clientes', [
            'class' => ($sidebarMenu==='Clientes') ? 'nav-link active' : 'nav-link',
        ])?>
    </li>
    <!-- Productos-->
    <li class="nav-item">
        <?=$this->Html->link(__('Productos'), '/productos', [
            'class' => ($sidebarMenu==='Productos') ? 'nav-link active' : 'nav-link',
        ])?>
    </li>
    <!-- Productos Clientes-->
    <li class="nav-item">
        <?=$this->Html->link(__('Productos Clientes'), '/productos-clientes', [
            'class' => ($sidebarMenu==='ProductosClientes') ? 'nav-link active' : 'nav-link',
        ])?>
    </li>
    <!-- Fabricantes-->
    <!-- <li class="nav-item">
        <?=$this->Html->link(__('Fabricantes'), '/fabricantes', [
            'disabled' => true,
            'class' => ($sidebarMenu==='Fabricantes') ? 'nav-link active disabled' : 'nav-link disabled',
        ])?>
    </li> -->
</ul>

<!-- ACCIONES -->
<h6 class="sidebar-heading d-flex px-3 mt-4 mb-1 text-muted">
    <span><?=__('Acciones')?></span>
</h6>
<ul class="nav flex-column">
    <!-- Añadir Productos-->
    <li class="nav-item">
        <?=$this->Html->modalLink(__('Añadir Productos'), '/productos/modal-add', [
            'class' => 'nav-link',
        ])?>
    </li>
    <!-- Vincular Productos-->
    <li class="nav-item">
        <?=$this->Html->modalLink(__('Vincular Productos'), '/clientes/modal-vincular-productos', [
            'class' => 'nav-link',
        ])?>
    </li>
</ul>