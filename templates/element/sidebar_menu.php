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

    <!-- Vincular Productos-->
    <li class="nav-item">
        <?=$this->Html->modalLink(__('Vincular Productos'), '/clientes/modal-vincular-productos', [
            'class' => 'nav-link',
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