<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
    <div class="block-header">
        <h2>
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
                        <?php echo e($searchComptagePercepteur->percepteur); ?>


                    </h2>

                </div>
                <div class="body">
                    <div class="row">

                        <div class="col-lg-12">
                            <label for="">Site</label>
                            <input type="text" disabled class="form-control btn-danger" value=" <?php echo e($searchComptagePercepteur->site); ?>  ">

                        </div>

                        <div class="col-lg-6">
                            <label for="">Voie</label>

                            <input type="text" disabled class="form-control" value="<?php echo e($searchComptagePercepteur->cabine); ?>">

                        </div>



                        <div class="col-lg-6">
                            <label for="">Date de fin de Vacation</label>
                            <input type="text" disabled class="form-control" value="<?php echo e($searchComptagePercepteur->date); ?>">

                        </div>

                        <div class="col-lg-6">
                            <label for="">Recette Totale En caissé</label>
                            <input type="text" disabled class="form-control btn-success" value="<?php echo e($searchComptagePercepteur->prix); ?>">



                        </div>


                        <div class="col-lg-6">

                            <label for="">Nombres de Vehicule</label>

                            <input type="text" disabled class="form-control" value="<?php echo e($searchComptagePercepteur->nbre_vehicule); ?>">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/comptages/getComptagePercepteur.blade.php ENDPATH**/ ?>