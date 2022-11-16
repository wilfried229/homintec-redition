    

    <?php $__env->startSection('css'); ?>

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('header'); ?>
    <div class="block-header">
        <h2>
           Comptage
            <small><a href="" target="_blank"> </a></small>
        </h2>
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                       Comptage par vacation
                    </h2>

                </div>
                <div class="body">
                    <form action="<?php echo e(route('search.comptage.vacation.action')); ?>" method="get" class="form">

                        <?php echo csrf_field(); ?>


                            <div class="row">

                                <div class="col-lg-6">
                                    <label for="">Percepteur</label>
                                    <select name="percepteur" id="percepteur" data-msg="Veuillez choisir le percepteur" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" style="height: 50px;widht:50px" required>
                                        <?php $__currentLoopData = $percepteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->percepteur); ?>"><?php echo e($item->percepteur); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for=""> Fin de vacation</label>
                                    <input type="datetime-local" name="date_fin"  class="form-control"  style="height: 50px">
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <input type="submit" value="Validez" lang="fr" class="btn btn-block btn-info">
                                </div>

                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('js'); ?>


    <?php $__env->stopSection(); ?>


<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/comptages/search-by-vacation.blade.php ENDPATH**/ ?>