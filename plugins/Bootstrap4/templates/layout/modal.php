<div class="modal-dialog <?= $this->fetch('modal_size')?>" role="document">
    <div class="modal-content box">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modal-title"><?= $this->fetch('title') ?></h4>
        </div>
        <div class="modal-body">
            <?= $this->fetch('content') ?>
        </div>
        <div class="modal-footer">
            <?= $this->fetch('modal_footer') ?>
            <span class="pull-left"><b>Minderest S.L. &copy; <?=date('Y')?></b></span>
        </div>
        
    </div>
</div>

<!-- ModalCSS -->
<?= $this->fetch('modalCSS') ?>
<!-- ModalScripts -->
<?= $this->fetch('modalScripts') ?>

<!-- ModalCallback -->
<?php if ($this->fetch('modalCallback')): ?>
    <script>
        function modalCallback(){
            <?= $this->fetch('modalCallback'); ?>
        }
    </script>
<?php endif;?>