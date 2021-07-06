<ul class="nav flex-column">
    <li class="nav-item">
        <?=$this->html->link('<span data-feather="home"></span>'.__('Inicio'), '/', [
            'escape' => false,
            'class' => ($sidebarMenu==='Inicio') ? 'nav-link active' : 'nav-link',
        ])?>
    </li>
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
</ul>