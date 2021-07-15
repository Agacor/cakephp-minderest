<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon', 'favicon.ico'); ?>

    <?= $this->Html->css([
        '/plugins/jquery-ui-1.12.1/jquery-ui.min.css',
        'dashboard.css',
        'docs.css',
        'custom.css',
        //'/plugins/bootstrap-4.6.0/dist/css/bootstrap.min.css', 
        //'/plugins/tablesorter/2.30.1/dist/css/theme.bootstrap.min.css',
    ]) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <?=$this->Html->link(
            $this->Html->image('/img/minderest.logo.svg', [
                'alt' => __('Minderest'), 
                'class' => 'logo img-fluid',
            ]),
            '/', 
            ['escape' => false, 'class'=> 'navbar-brand col-md-3 col-lg-2 mr-0 px-3']
        )?>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?=$this->Form->input('search', [
            'id' => 'navbarSearchInput', 'class' => 'form-control form-control-dark w-100', 
            'placeholder' => __('Buscar...'), 'aria-label' => __('Buscar'),
            'value' => $this->getRequest()->getQuery('search'),
        ])?>
    </nav>
    <!--- Container -->
    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <?= $this->element('sidebar', [
                'sidebarMenu' => $sidebarMenu ?? '', 
                'sidebarSubMenu' => $sidebarSubMenu ?? '', 
                'sidebarSubMenu2' => $sidebarSubMenu2 ?? '',
            ]) ?>
            
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <!-- Content Header (Page header) -->
                <?= $this->element('content/header', [
                    'searchAction' => $searchAction ?? '#', 
                    'text' => isset($pageHeader) ? $pageHeader : 'Page Header', 
                    'small' => isset($pageDescription) ? $pageDescription: 'Page Description',
                    'headerLinks' => $headerLinks ?? [],
                ]) ?>
                
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
                
            </main>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" ntegrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

    <!-- Modal -->                
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"></div>
    
    <!-- Script Defer Load -->
    <?= $this->Html->script([
        //'/plugins/jquery.validate/1.15.0/jquery.validate.min.js',
        //'/plugins/jquery.validate/1.15.0/jquery.validate.additional-methods.js',
        '/plugins/jquery-ui-1.12.1/jquery-ui.min.js',
        'dashboard.js',
        'app.js?v=1',  // AppJS (Module)
    ]) ?>
    
    <script>
        AppJS.setBaseURL("<?=$this->Url->build('/')?>");
        AppJS.setCsrfToken("<?=$this->request->getAttribute('csrfToken')?>");
        
        // NavBar Search
        $('#navbarSearchInput').keyup(function(event) {
            if (event.which === 13)
            {
                event.preventDefault();
                window.location.href=AppJS.baseURL.slice(0, -1)+'<?=$this->getRequest()->getPath()?>?search='+this.value;
            }
        });
        
    </script>
    
    <?= $this->fetch('scriptBottom') ?>

</body>

</html>