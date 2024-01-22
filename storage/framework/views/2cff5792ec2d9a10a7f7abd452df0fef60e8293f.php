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
                    Recettes
                </h2>
                <br>

            </div>
            <div class="body">
                <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="table-responsive">

                    <table id="tab" class="table table-bordered table-striped table-hover dataTable js-exportable">



                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Vacation</th>
                                <th>Voie</th>
                                <th>Percepteur</th>
                                <th>Montant coupon</th>
                                <th>Recette declarer</th>
                                <th>Recette Informatiser</th>
                                <th>Observation</th>
                                <th>Manquant</th>
                                <th>Surplus</th>
                                <th>Nombre passage</th>
                                <th>Nombre de violation</th>
                                <th>Nombre Exempte</th>

                                <th class="text-uppercase">Nombre de passage manuel</th>
                                <th class="text-uppercase">Montant de passage manuel</th>
                                <th>Options</th>


                            </tr>
                            </thead>

                            <tbody>
                                <?php $__currentLoopData = $recettes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recette): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if($loop->first): ?>
                                <?php
                                    $recet=$recettes->where('date_recettes', $recette->date_recettes);
                                    $dernier = $recet->last();
                                    $premier = $recet->first();
                                    $totCoupon = $recet->sum('montant_coupant');
                                    $totInformatisee = $recet->sum('montant_informatise');
                                    $totDeclaree = $recet->sum('montant_percepteur');


                                    $totManquant =   $recette->montant_ecart < 0  ? $recet->sum('montant_ecart') : 0;


                                $totSurplus = $recette->montant_ecart > 0  ? $recet->sum('montant_ecart') : 0;
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


                                    $totManquant =   $recette->montant_ecart < 0  ? $recet->sum('montant_ecart') : 0;


                                    $totSurplus = $recette->montant_ecart > 0  ? $recet->sum('montant_ecart') : 0;
                                 $totPassage = $recet->sum('nombre_vehicule');
                                    ///$totPassagep = $recet->sum('nombrepl');
                                    ///$totPassage = $recet->sum('nombrev');

                                    $totViolation = $recet->sum('nombre_violation');
                                    $totExempte = $recet->sum('nombre_exemptes');


                                    $totNombreManuel = $recet->sum('nombre_manuel');
                                    $totMontantManuel = $recet->sum('montant_manuel');
                                ?>
                            <?php endif; ?>

                                <tr>


                            <td  ><?php echo e($recette->date_recettes); ?></td>

                                    <td>

                                        <?php echo e($recette->vacation()->first()->type); ?>

                                    </td>
                                    <td><?php echo e($recette->voie()->first()->nom); ?></td>
                                    <td><?php echo e($recette->percepteur()->first()->nom ." " .$recette->percepteur()->first()->prenom); ?></td>
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
                                    <td>   <a href="<?php echo e(route('recette.show',['id'=>$recette->id])); ?>" class="btn btn-info" title="Modifier">Modifier <i class="fa fa-edit"></i></a>


                                        <?php if(Auth::user()->role == 'HOMINTEC' || Auth::user()->role == 'ADMIN' ): ?>
                                        <a href="" class="btn btn-danger" title="Supprimer" data-toggle="modal" data-target="<?php echo e("#actionModalremoveRecette".$recette->id); ?>">
                                            <i class="fa fa-1x fa-remove text-danger">Retirer</i>
                                        </a>&nbsp;&nbsp;
                                        <?php endif; ?>
                                        <?php echo $__env->make('dashboard.recettes.remove',['recette'=> $recette], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>
    $(document).ready(function(){

        var span = 1;
        var preTD= "";
        var preTDVal = '';

        $("#tab tr td:first-child").each(function () {


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

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/recettes/index.blade.php ENDPATH**/ ?>