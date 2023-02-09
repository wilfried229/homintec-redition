<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
        Statistiques vacation
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
                    Statistiques vacation
                </h2>



                 <a  onclick="document.getElementById('form_telecharger_facture').submit()"  class="btn btn-info">

                    <i title="Imprimer" style="cursor: pointer" class="fa fa-download text-secondary"></i>
                    Imprimer
                 </a>
                <form hidden target="_blank" action="<?php echo e(route("statistique.print",['date_debut'=>$dateDebut,'date_fin'=>$dateFin,'cabines'=>$cabine,'percepteur'=>$percepteurs])); ?>" method="get" id="form_telecharger_facture">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
            <div class="body">

                <div class="row">
                    <div class="col-lg-4">
                        <label for="">Percepteur : <?php echo e($percepteurs); ?></label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Cabine <?php echo e($cabine); ?></label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Date de Debut : <?php echo e($dateDebut); ?></label>

                    </div>
                    <div class="col-lg-4">
                        <label for="">Date de fin : <?php echo e($dateFin); ?></label>
                    </div>
                </div>


                <div class="row">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <th colspan="">Nombre de vehicules par categorie</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td colspan="">

                                        <?php if($c =="TRYCICLE"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->count()); ?></label>
                                        <?php endif; ?>
                                        <?php if($c =="VEHICULE LEGER"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->count()); ?></label>

                                        <?php endif; ?>

                                        <?php if($c =="POIDS LOURD 2"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',2)->count()); ?></label>
                                        <?php endif; ?>
                                        <?php if($c =="POIDS LOURD 3"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',3)->count()); ?></label>
                                        <?php endif; ?>
                                        <?php if($c =="POIDS LOURD 4"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',4)->count()); ?></label>
                                        <?php endif; ?>

                                        <?php if($c =="POIDS LOURD 5"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',5)->count()); ?></label>
                                        <?php endif; ?>

                                        <?php if($c =="POIDS LOURD 6"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',6)->count()); ?></label>
                                        <?php endif; ?>

                                        <?php if($c =="POIDS LOURD 7"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',7)->count()); ?></label>
                                        <?php endif; ?>

                                        <?php if($c =="POIDS LOURD 8"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',8)->count()); ?></label>
                                        <?php endif; ?>
                                        <?php if($c =="POIDS LOURD 9"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',9)->count()); ?></label>
                                        <?php endif; ?>
                                        <?php if($c =="POIDS LOURD 10"): ?>
                                        <?php echo e($c); ?> : <label for=""> <?php echo e($dataSta->where('ptrac','=',$c)->where('es',10)->count()); ?></label>
                                        <?php endif; ?>
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
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/validation/get-search-statistique.blade.php ENDPATH**/ ?>