 <?php $__env->startSection('content'); ?>
 <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>État des recettes journalières</h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            <?php $__currentLoopData = $cashFLows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="info-box bg-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">money</i>
                    </div>
                    <div class="content">
                        <div class="text text-bold text-center">Recettes <?php echo e($cash['site']); ?></div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"> <?php echo e(number_format((float)$cash['cashFlow'], 0, '.', '.')); ?></div>
                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <!-- #END# Widgets -->
    </div>
</section>
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/index.blade.php ENDPATH**/ ?>