<?php 
    $depth = !empty($depth) ? $depth : 0;
    $invalidFields = !empty($invalidFields) ? $invalidFields : [];
?>
<?php foreach($errors as $error_key => $error_values): ?>

    <?php if (count($error_values) == count($error_values, COUNT_RECURSIVE)): ?>

        <!-- Unidimensional -->
        <?php foreach($error_values as $error_type => $error_message): ?>

            <?php 
                $msg = "$error_key: $error_message"; 
                if (isset($invalidFields[$error_key])){
                    $msg.= " ($invalidFields[$error_key])"; 
                }
            ?>
            <p><i class="fa fa-warning ml-<?=$depth?>"></i> <?=($escape) ? h($msg) : $msg?></p>

        <?php endforeach;?>

    <?php else: ?>
            
        <!-- MultiDimensional -->
        <?php if (is_string($error_key)): $depth++;?>
            <p><u class="ml-<?=$depth?>"><strong><?=$error_key?>:</strong></u></p>
        <?php endif; ?>
            
        <?=$this->element('Flash/entity_errors_recursive', [
            'depth' => $depth, 
            'errors' => $error_values, 'escape' => $escape, 
            'invalidFields' => !empty($invalidFields[$error_key]) ? $invalidFields[$error_key] : [],
        ])?>
            
    <?php endif; ?>

<?php endforeach;?>