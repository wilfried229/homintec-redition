<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Recettes
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
                    Recettes / <?php echo e($site->nom); ?>

                </h2>
                <br>

            </div>
            <div class="body">
                <div class="table-responsive py-2">
                    <table id="listExport" class="table table-bordered ">
                        <thead>

                            <tr class="text-uppercase font-weight-bold">

                                <th colspan="15"><h3 style="text-align: center"><?php echo e($site->nom); ?></h3></th>


                            </tr>
                            <tr>
                                <th class="text-uppercase">Date</th>
                                <th class="text-uppercase">Vacation</th>

                                <th class="text-uppercase">Voie</th>
                                <th class="text-uppercase">Percepteur</th>
                                <th class="text-uppercase">Montant coupon</th>
                                <th class="text-uppercase">Recette declarer</th>
                                <th class="text-uppercase">Recette Informatiser</th>
                                <th class="text-uppercase">Observation</th>
                                <th class="text-uppercase">Manquant</th>
                                <th class="text-uppercase">Surplus</th>
                                <th class="text-uppercase">Nombre passage</th>
                                <th class="text-uppercase">Nombre de violation</th>
                                <th class="text-uppercase">Nombre Exempte</th>
                                <th class="text-uppercase">Nombre de passage manuel</th>
                                <th class="text-uppercase">Montant de passage manuel</th>

                                <th class="text-uppercase">Options</th>


                            </tr>
                            </thead>

                            <tbody>



                                <?php $__currentLoopData = $recettes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $recette): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                <?php if($loop->first): ?>
                                <?php
                                    $recet=$recettes->where('date_recettes', $recette->date_recettes);
                                    $dernier = $recet->last();
                                    $premier = $recet->first();
                                    $totCoupon = $recet->sum('montant_coupant');
                                    $totInformatisee = $recet->sum('montant_informatise');
                                    $totDeclaree = $recet->sum('montant_percepteur');


                                    $totManquant =   $recet->first()->montant_ecart < 0  ? $recet->sum('montant_ecart') : 0;


                                $totSurplus = $recet->first()->montant_ecart > 0  ? $recet->sum('montant_ecart') : 0;
                                 $totPassage = $recet->sum('nombre_vehicule');
                                    //$totManquant = $recet->sum('manquant');
                                   // $totSurplus = $recet->sum('surplus');
                                    ///$totPassagev = $recet->sum('nombrevl');
                                    ///$totPassagep = $recet->sum('nombrepl');
                                    ///$totPassage = $recet->sum('nombrev');
                                    $totViolation = $recet->sum('nombre_violation');
                                    $totExempte = $recet->sum('nombre_exemptes');


                                    $totNombreManuel = $recet->sum('nombre_manuel');
                                    $totMontantManuel = $recet->sum('montant_manuel');
                                ?>
                            <?php endif; ?>

                            <?php if($dernier->date_recettes !== $recette->date_recettes): ?>
                                <?php
                                    $recet=$recettes->where('date_recettes', $recette->date_recettes);
                                    $dernier = $recet->last();
                                    $premier = $recet->first();
                                    $totCoupon = $recet->sum('montant_coupant');
                                    $totInformatisee = $recet->sum('montant_informatise');
                                    $totDeclaree = $recet->sum('montant_percepteur');


                                    $totManquant =   $recet->first()->montant_ecart < 0  ? $recet->sum('montant_ecart') : 0;
                                    $totSurplus = $recet->first()->montant_ecart > 0  ? $recet->sum('montant_ecart') : 0;
                                    $totPassage = $recet->sum('nombre_vehicule');

                                    $totViolation = $recet->sum('nombre_violation');
                                    $totExempte = $recet->sum('nombre_exemptes');
                                    $totNombreManuel = $recet->sum('nombre_manuel');
                                    $totMontantManuel = $recet->sum('montant_manuel');

                                ?>
                            <?php endif; ?>
                            <tr>


                                <?php if($premier->id == $recette->id): ?>
                                <td class="text-center" rowspan="<?php echo e($recet->count()); ?>"><?php echo e($recette->date_recettes); ?></td>
                            <?php else: ?>
                                <td class="d-none" style="display: none"></td>
                            <?php endif; ?>
                                    <td><?php echo e($recette->type); ?></td>
                                    <td><?php echo e($recette->voie); ?></td>
                                    <td><?php echo e($recette->percepteur_nom ." " .$recette->percepteur_prenom); ?></td>
                                    <td><?php echo e($recette->montant_coupant); ?></td>
                                    <td><?php echo e($recette->montant_percepteur); ?></td>
                                    <td><?php echo e($recette->montant_informatise); ?> </td>
                                    <td><?php echo e($recette->observation); ?></td>
                                    <td><?php echo e($recette->montant_ecart < 0  ? -$recette->montant_ecart : 0); ?></td>
                                    <td><?php echo e($recette->montant_ecart > 0  ? $recette->montant_ecart : 0); ?></td>
                                    <td><?php echo e($recette->nombre_vehicule); ?> </td>
                                    <td><?php echo e($recette->nombre_violation); ?></td>
                                    <td><?php echo e($recette->nombre_exemptes); ?> </td>

                                    <td><?php echo e($recette->nombre_manuel); ?> </td>
                                    <td><?php echo e($recette->montant_manuel); ?> </td>


                                    <td>

                                        <a href="<?php echo e(route('recette.show',['id'=>$recette->id])); ?>" class="btn btn-info" title="Modifier"> Modifier<i class="fa fa-edit"></i></a>
                                        <?php if(Auth::user()->role == 'HOMINTEC' || Auth::user()->role == 'ADMIN' ): ?>
                                        <a  onclick="event.preventDefault(); document.getElementById('retirer-a-form-<?php echo e($recette->id); ?>').submit(); return false;"   class="btn btn-danger">Retirer </a>
                                        &nbsp;&nbsp;

                                        <form id="retirer-a-form-<?php echo e($recette->id); ?>" action="<?php echo e(route('recette.destroy',['id'=>$recette->id])); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                        </form>

                                        <?php endif; ?>

                                    </td>


                                </tr>

                                <?php if($recette->id == $dernier->id): ?>

                                <tr class="bg-light">


                                    <td style="display: none"></td>
                                    <td style="display: none"> </td>
                                    <td style="display: none"></td>
                                    <td colspan="4" class="text-right">SOMME TOTAL</td>
                                    <td><?php echo e($totCoupon); ?></td>
                                    <td><?php echo e($totDeclaree); ?></td>
                                    <td><?php echo e($totInformatisee); ?></td>
                                    <td></td>
                                    <td><?php echo e(-$totManquant); ?> </td>
                                    <td><?php echo e($totSurplus); ?></td>
                                    <td><?php echo e($totPassage); ?></td>
                                    <td><?php echo e($totViolation); ?></td>
                                    <td><?php echo e($totExempte); ?> </td>
                                    <td> <?php echo e($totNombreManuel); ?></td>
                                    <td><?php echo e($totMontantManuel); ?> </td>
                                    <td> </td>


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

<?php echo $__env->make('layouts.export', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/recettes/get-month.blade.php ENDPATH**/ ?>