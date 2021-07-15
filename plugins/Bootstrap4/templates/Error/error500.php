<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->set('pageHeader', __('ERROR 500'));

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error500.php');

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
<?php if ($error instanceof Error) : ?>
    <strong>Error in: </strong>
    <?= sprintf('%s, line %s', str_replace(ROOT, 'ROOT', $error->getFile()), $error->getLine()) ?>
<?php endif; ?>
<?php
    echo $this->element('auto_table_warning');

    $this->end();
endif;
?>

<!-- Container -->
<div class="container">
    <h1 class="mt-5"><?= __('Ha ocurrido un error interno') ?></h2>
    <p class="error">
        <strong><?= __d('cake', 'Error 500') ?>: </strong>
        <?= h($message) ?>
    </p>
</div>
