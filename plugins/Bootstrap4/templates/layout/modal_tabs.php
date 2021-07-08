<style type="text/css">
    .modal-dialog button.close {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1;
    }
    .modal-dialog .nav-tabs-custom {
        margin-bottom: 0px;
        box-shadow: none;
    }
    .modal-body {
        padding: 2px 2px;
        min-height: 260px;
    }
</style>

<div class="modal-dialog <?= $this->fetch('modal_size')?>" role="document">
    
    <div class="modal-content box">
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