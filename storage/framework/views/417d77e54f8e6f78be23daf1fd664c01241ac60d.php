<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Utilisateur
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
                    Cash-Flows
                </h2>
                <br>
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-info ">Ajouter</a>

            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                            <th align="center" width="10%">Options</th>
                            <th>Nom Utilisateur</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Site</th>

                            <th>Date de création</th>

                             </tr>
                          </thead>
                          <tbody>

                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <a href="<?php echo e(route('users.edit',$user->id)); ?>" class="btn btn-info">Modifier </a>


                                    <a  onclick="event.preventDefault(); document.getElementById('retirer-user-form-<?php echo e($user->id); ?>').submit(); return false;"   class="btn btn-danger">Retirer </a>


                                    <form id="retirer-user-form-<?php echo e($user->id); ?>" action="<?php echo e(route('users.destroy',$user->id)); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo method_field('DELETE'); ?>
                                    </form>
                                </td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <th><?php echo e($user->role); ?></th>
                                <th><?php echo e($user->site()->first()->nom ?? ""); ?></th>

                                <th><?php echo e($user->created_at); ?></th>

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

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/users/liste.blade.php ENDPATH**/ ?>