<?php $__env->startSection('css'); ?>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('publics/css/dataTables.bootstrap4.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('publics/css/buttons.bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Recettes <?php echo e($site->nom); ?>

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
                    Points Percepteurs /
                </h2>
                <br>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="listExport" class="table table-bordered ">

                        <thead>

                            <tr>
                                <th colspan="15"><h3 style="text-align: center"><?php echo e($site->nom); ?></h3></th>
                            </tr>
                            <tr>
                                <th>Pecepteur</th>
                                <th class="text-uppercase">Date</th>
                                <th class="text-uppercase">Vacation</th>
                                <th class="text-uppercase">Voie</th>
                                <th class="text-uppercase">Montant coupon</th>
                                <th class="text-uppercase">Recette declarer</th>
                                <th class="text-uppercase">Recette Informatiser</th>
                                <th class="text-uppercase">Manquant</th>
                                <th class="text-uppercase">Surplus</th>
                                <th class="text-uppercase">Observation</th>



                            </tr>
                            </thead>

                            <tbody>

                               <?php
                                    $arrSomme = 0;
                               ?>

                                <?php $__currentLoopData = $recettesPercepteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $percepteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php
                               //// $start = strtotime($percepteur->heure_debut);
                                ///$end = strtotime($percepteur->heure_fin ); // Run query to get datetime value from db
                                ///$elapsed = $end - $start;
                                ///$total_time = array_sum($elapsed);
                                //$arrSomme+= $elapsed;

                                ?>
                                <?php if($loop->first): ?>

                                <?php
                                $percepteursNom = $recettesPercepteurs->where('percepteurs_id',$percepteur->percepteurs_id);
                                $dernier = $percepteursNom->last();
                                $premier = $percepteursNom->first();

                                $totCoupon = $percepteursNom->sum('montant_coupant');
                                    $totInformatisee = $percepteursNom->sum('montant_informatise');
                                    $totDeclaree = $percepteursNom->sum('montant_percepteur');



                                    $totManquant = $percepteursNom->where('montant_ecart','<=',0)->sum('montant_ecart') ;


                                    $totSurplus =  $percepteursNom->where('montant_ecart','>=',0)->sum('montant_ecart') ;


                                 $totPassage = $percepteursNom->sum('nombre_vehicule');
                                ?>

                            <?php endif; ?>

                            <?php if($dernier->percepteurs_id != $percepteur->percepteurs_id): ?>
                                <?php
                                $percepteursNom = $recettesPercepteurs->where('percepteurs_id',$percepteur->percepteurs_id);
                                $dernier = $percepteursNom->last();
                                $premier = $percepteursNom->first();


                                $totCoupon = $percepteursNom->sum('montant_coupant');
                                    $totInformatisee = $percepteursNom->sum('montant_informatise');
                                    $totDeclaree = $percepteursNom->sum('montant_percepteur');


                                    $totManquant = $percepteursNom->where('montant_ecart','<=',0)->sum('montant_ecart') ;


                                    $totSurplus =  $percepteursNom->where('montant_ecart','>=',0)->sum('montant_ecart') ;

                                $totPassage = $percepteursNom->sum('nombre_vehicule');
                                    //$totManquant = $recet->sum('manquant');
                                   // $totSurplus = $recet->sum('surplus');
                                    ///$totPassagev = $recet->sum('nombrevl');
                                    ///$totPassagep = $recet->sum('nombrepl');
                                    ///$totPassage = $recet->sum('nombrev');
                                    $totViolation = $percepteursNom->sum('nombre_violation');
                                    $totExempte = $percepteursNom->sum('nombre_exemptes');
                                ?>
                            <?php endif; ?>

                            <tr>
                                <?php if($premier->id == $percepteur->id): ?>
                                <td class="text-center" rowspan="<?php echo e($percepteursNom->count()); ?>"> <?php echo e($percepteur->percepteur_nom); ?></td>

                            <?php else: ?>
                                <td class="d-none" style="display: none"></td>
                            <?php endif; ?>
                            <td class="text-center"><?php echo e($percepteur->date_recettes); ?></td>

                                <td class="text-center" ><?php echo e($percepteur->type); ?></td>
                                <td class="text-center"><?php echo e($percepteur->voie); ?></td>
                                <td class="text-center"><?php echo e($percepteur->montant_coupant); ?> </td>
                                <td class="text-center"><?php echo e($percepteur->montant_percepteur); ?> </td>
                                <td class="text-center"><?php echo e($percepteur->montant_informatise); ?> </td>
                                <td><?php echo e($percepteur->montant_ecart < 0  ? -$percepteur->montant_ecart : 0); ?></td>
                                <td><?php echo e($percepteur->montant_ecart > 0  ? $percepteur->montant_ecart : 0); ?></td>
                                <td class="text-center"><?php echo e($percepteur->observation); ?></td>

                                </tr>

                                    <?php if($percepteur->id == $dernier->id): ?>
                                    <tr class="bg-light">
                                        <td style="display: none"></td>
                                        <td style="display: none"> </td>
                                        <td style="display: none"></td>
                                        <td colspan="4" class="text-right">SOMME TOTAL</td>
                                        <td><?php echo e($totCoupon); ?></td>
                                        <td><?php echo e($totDeclaree); ?></td>
                                        <td><?php echo e($totInformatisee); ?></td>
                                        <td><?php echo e(-$totManquant); ?> </td>
                                        <td><?php echo e($totSurplus); ?></td>
                                        <td> </td>
                                        <td></td>

                                        </tr>

                                        <?php endif; ?>
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

<script>
    $(document).ready(function(){

        var span = 1;
        var preTD= "";
        var preTDVal = '';

        $("#listExpor tr td:first-child").each(function () {


           var  $this = $(this)
            if ($this.text()==preTDVal) {
                span ++;

                if (preTD!= "") {
                    preTD.attr("rowspan",span);
                    $this.remove();

                }


            } else {

                preTD = $this;
                preTDVal = $this.text();
                span = 1;
            }
        })


    })

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.export', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/recettes/percepteur.blade.php ENDPATH**/ ?>