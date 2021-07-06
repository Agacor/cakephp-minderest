<!-- Sidebar -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <!-- Sidebar Menu -->
        <?= $this->element('sidebar_menu', [
            'searchAction' => $searchAction ?? '#', 
            'sidebarMenu' => $sidebarMenu ?? '', 
            'sidebarSubMenu' => $sidebarSubMenu ?? '', 
            'sidebarSubMenu2' => $sidebarSubMenu2 ?? '',
        ]) ?>
    </div>
</nav>