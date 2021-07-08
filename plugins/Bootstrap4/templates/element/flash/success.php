<?php
$class = isset($class) ? h($class) : "";
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- Flash Success -->
<div class="alert alert-success alert-dismissible <?=$class?>" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <i class="fa fa-check"></i> <?= $message ?>
</div>