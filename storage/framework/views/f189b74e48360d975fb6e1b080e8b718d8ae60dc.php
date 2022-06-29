    

    <?php $__env->startSection('css'); ?>

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('header'); ?>
    <div class="block-header">
        <h2>
           Recette
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
                       Recette
                    </h2>

                </div>
                <div class="body">
                    <form action="<?php echo e(route('recette.getByMonth.action')); ?>" method="get" class="form">

                        <?php echo csrf_field(); ?>

                            <div class="row">


                            <?php if(in_array(Auth::user()->role,["ADMIN",'SIRB']) ): ?>

                                <div class="col-lg-12">
                                    <label for="">Sites</label>

                                    <select name="site_id" id="site_id" class="form-control"  >
                                    <option disabled selected> Selectionnez un Site</option>
                                    <?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($s->id); ?>"> <?php echo e($s->nom); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                </div>
                                <?php endif; ?>


                                <div class="col-lg-6">
                                    <label for=""> Date de début</label>
                                    <input type="date" name="date_debut"  class="form-control"  style="height: 50px">
                                </div>
                                <div class="col-lg-6">
                                    <label for=""> Date de fin</label>
                                    <input type="date" name="date_fin"  class="form-control"  style="height: 50px">
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


<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/recettes/modal-month.blade.php ENDPATH**/ ?>