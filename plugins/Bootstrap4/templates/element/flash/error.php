<?php
$messages = is_array($message) ? $message : [$message];
$escape = (!isset($params['escape']) || $params['escape'] !== false);
?>
<!-- Flash Error -->
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php foreach($messages as $message): ?>
        <p><i class="fa fa-warning"></i> <?=($escape) ? h($message) : $message?></p>
    <?php endforeach;?>
</div>