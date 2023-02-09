<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("title"); ?>
    Statistique Vacation
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <div>
        <!-- client aside -->
        <div style="float:left">

        </div>
        <!-- entreprise aside -->

    </div>

    <div class="row">
        <div class="col-lg-4">
            <span style="" for="">Percepteur : <?php echo e($percepteurs); ?></span>
        </div>
        <div class="col-lg-4">
            <span for="">Cabine <?php echo e($cabines->cabine ?? "-"); ?></span>
        </div>
        <div class="col-lg-4">
            <span for="">Date de Debut : <?php echo e($dateDebut); ?></span>

        </div>
        <div class="col-lg-4">
            <span for="">Date de fin : <?php echo e($dateFin); ?></span>
        </div>
    </div>

    <br>
    <br>

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
                        <label for=""> POIDS LOURD Essieu 2 : <?php echo e($dataStatistiques['POIDS LOURD 2']); ?></label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 3 : <?php echo e($dataStatistiques['POIDS LOURD 3']); ?></label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 4 : <?php echo e($dataStatistiques['POIDS LOURD 4']); ?></label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 5 : <?php echo e($dataStatistiques['POIDS LOURD 5']); ?></label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 6 : <?php echo e($dataStatistiques['POIDS LOURD 6']); ?></label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 7 : <?php echo e($dataStatistiques['POIDS LOURD 7']); ?></label>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make("pdf.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/pdf/statistique.blade.php ENDPATH**/ ?>