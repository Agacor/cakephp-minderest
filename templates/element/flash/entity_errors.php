<?php
$entity = $message;
$escape = (!isset($params['escape']) || $params['escape'] !== false);
$fallbackMessage = !empty($params['fallback']) ? $params['fallback'] : __('No se pudo efecturar la acción requerida.');
?>
<!-- Flash Entity Errors -->
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
    <?php if (!empty($entity->getErrors())): ?>
        <!-- Entity Errors -->
        <p><i class="fa fa-close"></i> <strong><?=__('Revise los siguientes datos:')?></strong></p>
        <?=$this->element('flash/entity_errors_recursive', [
            'escape'=>$escape,
            'errors'=> $entity->getErrors(), 
            'invalidFields' => $entity->getInvalid(),
        ])?>
    <?php else: ?>
        <!-- Fallback Message -->
        <p><i class="fa fa-warning"></i> <?=($escape) ? h($fallbackMessage) : $fallbackMessage?></p>
    <?php endif; ?>
        
</div>