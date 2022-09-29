<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Modifier un percepteur
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
                    Percepteur

                   <a href="<?php echo e(route('percepteur.index')); ?>" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">


                        <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <form action="<?php echo e(route('percepteur.update',['id' =>$percepteur->id])); ?>" method="post" class="form" >
                                    <?php echo csrf_field(); ?>

                                    <?php echo method_field('PUT'); ?>

                                    <div class="row">


                                        <div class="col">
                                            <label for="">Nom</label>
                                            <input type="text" value="<?php echo e($percepteur->nom); ?>"  name="nom" id="nom" class="form-control">

                                        </div>
                                        <div class="col">
                                            <label for="">Prénom</label>
                                            <input type="text" value="<?php echo e($percepteur->prenom); ?>"  name="prenom" id="prenom" class="form-control">

                                        </div>

                                     </div>

                                        <div class="row">

                                        <div class="col-md-12">
                                            <input type="submit" value="Modifier" class="btn btn-success">

                                        </div>
                                    </div>
                                </form>


                  </div>
                  <!-- /.row -->

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>
$("#is_surchages").change(function(value){

    if (this.checked) {
        $('#surcharge').show();
    } else {
        $('#surcharge').hide();
    }

})

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/percepteurs/update.blade.php ENDPATH**/ ?>