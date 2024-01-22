<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
        Ajouter une categorie de  dysfonctionnement
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
                    categorie  dysfonctionnement

                    <a href="<?php echo e(route('recette.index')); ?>" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">

                        <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                        <form id="store-recette" action="<?php echo e(route('categorie-dysfonctionnnemt.store')); ?>" method="post" class="form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>

                            <?php echo $__env->make('dashboard.categorieDysfonctionnements.formulaire',['categorieDysfonctionnemts'=>$categorieDysfonctionnemts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <br>
                        </form>


                    </div>
                    <!-- /.row -->

                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/categorieDysfonctionnements/create.blade.php ENDPATH**/ ?>