<div class="modal-dialog <?= $this->fetch('modal_size') ?>" role="document">
    <div class="modal-content box">
        <!-- Modal Header -->
        <div class="modal-header">
            <h5 id="modal-title" class="modal-title"><?=$this->fetch('title') ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- ModalForm -->
        <?= $this->fetch('modal_form') ?>

        <!-- Modal Body -->
        <div class="modal-body">
            <?= $this->fetch('content') ?>
        </div>
        <!-- Modal Footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><?= __('Cerrar') ?></button>
            <button type="reset" class="btn btn-secondary"><?= __('Restablecer') ?></button>
            <button type="submit" class="btn btn-primary"><?= __('Enviar') ?></button>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>

<!-- ModalCSS -->
<?= $this->fetch('modalCSS') ?>
<!-- ModalScripts -->
<?= $this->fetch('modalScripts') ?>

<!-- ModalCallback -->
<?php if ($this->fetch('modalCallback')) : ?>
    <script>
        function modalCallback() {
            <?= $this->fetch('modalCallback'); ?>
        }
    </script>
<?php endif; ?>