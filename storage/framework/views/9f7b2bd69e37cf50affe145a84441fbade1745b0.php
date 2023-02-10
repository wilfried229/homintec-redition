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

                <?php if($cabines  != null): ?>
                <a  onclick="document.getElementById('form_telecharger_facture').submit()"  class="btn btn-info">

                    <i title="Imprimer" style="cursor: pointer" class="fa fa-download text-secondary"></i>
                    Imprimer
                 </a>
                 <form hidden target="_blank" action="<?php echo e(route("statistique.print",['date_debut'=>$dateDebut,'date_fin'=>$dateFin,'cabines'=>$cabines->cabine,'percepteur'=>$percepteurs])); ?>" method="get" id="form_telecharger_facture">
                    <?php echo csrf_field(); ?>
                </form>
                <?php endif; ?>

            </div>
            <div class="body">


                <?php if($cabines  == null): ?>

                <?php else: ?>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="">Percepteur : <?php echo e($percepteurs); ?></label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Cabine  <?php echo e($cabines->cabine); ?></label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Date de Debut : <?php echo e($dateDebut); ?></label>

                    </div>
                    <div class="col-lg-4">
                        <label for="">Date de fin : <?php echo e($dateFin); ?></label>
                    </div>
                </div>
                <?php endif; ?>



                <?php if($cabines  == null): ?>

                <div>
                    Pas de données pour cette Vacation.
                </div>
               <?php else: ?>
               <div class="row">

                <div class="col-lg-12">
                <h1>Nombre de vehicules par categorie</h1>

                </div>
            </div>

            <div class="row">

                <div class="col-lg-3">
                    <label for=""> TRYCICLE : <?php echo e($dataStatistiques['TRYCICLE']); ?></label>
                </div>

                <div class="col-lg-3">
                    <label for=""> VEHICULE LEGER : <?php echo e($dataStatistiques['VEHICULE LEGER']); ?></label>
                </div>

                <div class="col-lg-3">
                    <label for=""> AUTOBUS : <?php echo e($dataStatistiques['AUTOBUS']); ?></label>
                </div>

                <div class="col-lg-3">
                    <label for=""> POIDS LOURD  Essieu 2 : <?php echo e($dataStatistiques['POIDS LOURD 2']); ?></label>
                </div>

                <div class="col-lg-3">
                    <label for=""> POIDS LOURD Essieu 3 : <?php echo e($dataStatistiques['POIDS LOURD 3']); ?></label>
                </div>

                <div class="col-lg-3">
                    <label for=""> POIDS LOURD Essieu 4 : <?php echo e($dataStatistiques['POIDS LOURD 4']); ?></label>
                </div>

                <div class="col-lg-3">
                    <label for=""> POIDS LOURD Essieu  5 : <?php echo e($dataStatistiques['POIDS LOURD 5']); ?></label>
                </div>
                <div class="col-lg-3">
                    <label for=""> POIDS LOURD Essieu  6 : <?php echo e($dataStatistiques['POIDS LOURD 6']); ?></label>
                </div>
                <div class="col-lg-3">
                    <label for=""> POIDS LOURD  Essieu 7 : <?php echo e($dataStatistiques['POIDS LOURD 7']); ?></label>
                </div>

                <div class="col-lg-3">
                    <label for=""> POIDS LOURD Essieu 8 : <?php echo e($dataStatistiques['POIDS LOURD 8']); ?></label>
                </div>
                <div class="col-lg-3">
                    <label for=""> POIDS LOURD Essieu 9 : <?php echo e($dataStatistiques['POIDS LOURD 9']); ?></label>
                </div>

                <div class="col-lg-3">
                    <label for=""> POIDS LOURD Essieu 10 : <?php echo e($dataStatistiques['POIDS LOURD 10']); ?></label>
                </div>
            </div>
               <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/validation/get-search-statistique.blade.php ENDPATH**/ ?>