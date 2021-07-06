<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?=$pageHeader ?? ''?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <?php foreach($headerLinks as $headerLink): 
                $headerLink['options'] = array_merge(['class' => 'btn btn-sm btn-outline-secondary'], $headerLink['options']);
                ?>
                <?php if(!empty($headerLink['options']['modal'])): 
                    $headerLink['options']['data-modal'] = $this->Url->build($headerLink['url']);
                    $headerLink['options']['data-backdrop'] = $headerLink['options']['modal'];
                    unset($headerLink['options']['modal']);
                    ?>
                    <?=$this->Html->tag('a', $headerLink['title'], $headerLink['options'])?>
                <?php else: ?>
                    <?=$this->Html->link($headerLink['title'], $headerLink['url'], $headerLink['options'])?>
                <?php endif;?>

            <?php endforeach; ?>
        </div>
    </div>
</div>