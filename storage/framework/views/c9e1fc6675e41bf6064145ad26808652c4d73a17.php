<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Ajouter une voie
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
                   Voie

                   <a href="<?php echo e(route('recette.index')); ?>" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">

                        <?php if(Session::has('success')): ?>

                            <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    <?php echo e(Session::get('success') ? Session::get('success') : Session::get('error')); ?>

                                  </div>



                                <?php endif; ?>

                                <form action="<?php echo e(route('voie.store')); ?>" method="post" class="form" >
                                    <?php echo csrf_field(); ?>

                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Nom</label>
                                            <input type="text" name="nom" id="nom" class="form-control">

                                        </div>



                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Sens</label>
                                            <input type="text" name="sens" id="sens" class="form-control">
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Site</label>
                                            <select name="site_id" id="site_id" class="form-control">
                                                <?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($site->id); ?>"><?php echo e($site->nom); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>


                                     </div>





                                        <div class="row">

                                        <div class="col-md-12">
                                            <input type="submit" value="Enregistrer" class="btn btn-success">

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

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/voies/create.blade.php ENDPATH**/ ?>