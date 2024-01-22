<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Percepteurs
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
                    Percepteurs
                </h2>
                <br>
                <a href="<?php echo e(route('percepteur.create')); ?>" class="btn btn-info ">Ajouter</a>

            </div>
            <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                            <th>Nom et Prénom</th>
                            <th align="center" width="10%">Options</th>

                             </tr>
                          </thead>
                          <tbody>

                            <?php $__currentLoopData = $percepteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percepteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                            <tr>

                                <td><?php echo e($percepteur->nom); ?> <?php echo e($percepteur->prenom); ?></td>

                                <td>

                                    <a href="<?php echo e(route('percepteur.edit',['id'=>$percepteur->id])); ?>" class="btn btn-info"> <i class="fa fa-edit">Modifier</i></a>
                                </td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/percepteurs/index.blade.php ENDPATH**/ ?>