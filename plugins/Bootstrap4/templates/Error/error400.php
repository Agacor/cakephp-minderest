<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->set('pageHeader', __('ERROR 404'));

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.php');

    $this->start('file');
    ?>

    <?php if (!empty($error->queryString)) : ?>
        <p class="notice">
            <strong>SQL Query: </strong>
            <?= h($error->queryString) ?>
        </p>
    <?php endif; ?>
    <?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
    <?php endif; ?>
    <?= $this->element('auto_table_warning') ?>
    <?php 
    $this->end();
endif;
?>
<!-- Container --> 
<div class="container">
    <h1 class="mt-5"><?= h($message) ?></h2>
    <p class="error">
        <strong><?= __d('cake', 'Error 400') ?>: </strong>
        <?= __d('cake', 'La url indicada {0} no se encontró en el servidor.', "<strong>'{$url}'</strong>") ?>
    </p>
</div>