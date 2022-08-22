<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
       Validation
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
                    Validation
                </h2>

                <form action="<?php echo e(route('validation.percpeteur.action')); ?>" method="get" class="form">

                    <?php echo csrf_field(); ?>

                        <div class="row">

                            <div class="col-lg-6">
                                <label for="">Percepteur</label>
                                <select name="percepteur" id="percepteur" data-msg="Veuillez choisir le percepteur" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" style="height: 50px;widht:50px" required>
                                    <?php $__currentLoopData = $percepteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->nom); ?>"><?php echo e($item->nom); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Voies</label>
                                <select name="cabine" id="cabine" class="form-control">
                                    <?php $__currentLoopData = $voies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->nom); ?>"><?php echo e($item->nom); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for=""> Date de début</label>
                                <input type="datetime-local" name="date_debut"  class="form-control"  style="height: 50px">
                            </div>
                            <div class="col-lg-6">
                                <label for=""> Date de fin</label>
                                <input type="datetime-local" name="date_fin"  class="form-control"  style="height: 50px">
                            </div>
                            <div class="col-lg-12">
                                <br>
                                <input type="submit" value="Validez" lang="fr" class="btn btn-block btn-info">
                            </div>

                        </div>
                    </form>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <h1><?php echo e($sum); ?> XFOD</h1>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Site</th>
                                <th>Date</th>
								<th>Heure</th>
                                <th>cabine</th>
                                <th>Percepteur</th>
                                <th>type</th>
                                <th>ptrac</th>
                                <th>cmaes</th>
                                <th>es</th>
                                <th>ptt</th>
                                <th>over</th>
                                <th>Prix</th>
                                <th>caisse</th>
                                <th>Plaque</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Site</th>
                                <th>Date</th>
								<th>Heure</th>
                                <th>cabine</th>
                                <th>Percepteur</th>
                                <th>type</th>
                                <th>ptrac</th>
                                <th>cmaes</th>
                                <th>es</th>
                                <th>ptt</th>
                                <th>over</th>
                                <th>Prix</th>
                                <th>caisse</th>
                                <th>Plaque</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $__currentLoopData = $reditions2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $redition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($redition->site); ?></td>
                            <td><?php echo e($redition->date); ?></td>
							<td><?php echo e($redition->heure); ?></td>
                            <td><?php echo e($redition->cabine); ?></td>
                            <td><?php echo e($redition->percepteur); ?></td>
                            <td><?php echo e($redition->type); ?></td>
                            <td><?php echo e($redition->ptrac); ?></td>
                            <td><?php echo e($redition->cmaes); ?></td>
                            <td><?php echo e($redition->es); ?></td>
                            <th><?php echo e($redition->ptt); ?></th>
                            <th><?php echo e($redition->over); ?></th>
                            <th><?php echo e($redition->prix); ?></th>
                            <td><?php echo e($redition->caisse); ?></td>
                            <td><?php echo e($redition->plaque); ?></td>

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


<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/redition2.blade.php ENDPATH**/ ?>