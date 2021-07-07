<ul class="nav flex-column">
    <!-- Clientes-->
    <li class="nav-item">
        <?=$this->html->link('<span data-feather="users"></span>'.__('Clientes'), '/clientes', [
            'escape' => false,
            'class' => ($sidebarMenu==='Clientes') ? 'nav-link active' : 'nav-link',
        ])?>
    </li>
    <!-- Productos-->
    <li class="nav-item">
        <?=$this->html->link('<span data-feather="shopping-cart"></span>'.__('Productos'), '/productos', [
            'escape' => false,
            'class' => ($sidebarMenu==='Productos') ? 'nav-link active' : 'nav-link',
        ])?>
    </li>
    <!-- Fabricantes-->
    <!-- <li class="nav-item">
        <?=$this->html->link('<span data-feather="shopping-cart"></span>'.__('Fabricantes'), '/fabricantes', [
            'disabled' => true,
            'escape' => false,
            'class' => ($sidebarMenu==='Fabricantes') ? 'nav-link active disabled' : 'nav-link disabled',
        ])?>
    </li> -->
</ul>