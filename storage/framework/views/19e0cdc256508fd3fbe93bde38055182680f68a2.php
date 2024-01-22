<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Ajouter un utilisateur
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
                   Utilisateurs

                   <a href="<?php echo e(route('users.index')); ?>" style="float: right;" class="btn btn-info">Retour</a>

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

                                <form action="<?php echo e(route('users.store')); ?>" method="post" class="form" >
                                    <?php echo csrf_field(); ?>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-4">
                                            <label for="">Nom</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for=""> Email</label>

                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-4">
                                            <label for="">Role</label>

                                            <select name="role" id="role" class="form-control">
                                                <option value="ADMIN">ADMIN</option>
                                                <option value="SIRB">SIRB</option>
                                                <option value="HOMINTEC">HOMINTEC</option>
                                                <option value="SUPERVISEUR">SUPERVISEUR</option>
                                            </select>
                                        </div>

                                        <div hidden id="site" class="col-lg-12 col-md-4">
                                            <label for="">Site</label>

                                            <select name="site_id" id="site_id" class="form-control">
                                               <?php $__currentLoopData = $sites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                               <option value="<?php echo e($site->id); ?>"><?php echo e($site->nom); ?></option>

                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="">Mot de passe</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>


                                        <div class="col-md-12">
                                            <label for="">Confirmer le mot de passe</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                        </div>
                                    </div>
                                    <br>



                                    <div class="row">

                                        <div class="col-md-12">
                                            <input type="submit" value="Ajouter" class="btn btn-success">

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
$("#role").change(function(value){

console.log('okkkk');
if (this.value == "SUPERVISEUR") {
    $('#site').show();
} else {
    $('#site').hide();
}

})

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/users/add.blade.php ENDPATH**/ ?>