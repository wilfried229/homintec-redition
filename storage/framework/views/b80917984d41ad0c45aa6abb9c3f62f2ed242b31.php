<?php if(session()->has('message')): ?>
    <div class="alert alert-<?php echo e(session()->get('alert-type')); ?> alert-dismissible" role="alert" id="alert-message">
        <?php echo e(session()->get('message')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>
<?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/partials/flash.blade.php ENDPATH**/ ?>