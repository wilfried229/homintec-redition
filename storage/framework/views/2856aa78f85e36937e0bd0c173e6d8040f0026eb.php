 <?php $__env->startSection('content'); ?>
 <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Voie</h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            <?php $__currentLoopData = $voies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div   class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a href="<?php echo e(route('recette.create',$voie->id)); ?>">

                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <h2>Voie</h2>
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="content">
                            <div class="text text-bold text-center text-lg"></div>
                            <h2><?php echo e($voie->nom); ?></h2>
                        </div>
                    </div>
                </a>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <!-- #END# Widgets -->
    </div>
</section>
 <?php $__env->stopSection(); ?>


<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/recettes/create-index.blade.php ENDPATH**/ ?>