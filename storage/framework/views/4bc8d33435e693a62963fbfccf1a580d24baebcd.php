<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
FICHE DE SUIVI DES DYSFONCTIONNEMEN DES PEAGES ET PESAGES

<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
        Dysfonctionnements
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
                    Dysfonctionnements / <?php echo e($site->nom); ?>

                </h2>
                <br>

                <a href="<?php echo e(route('dysfonctionnnemt.create')); ?>" class="btn btn-info">Ajouter</a>
            </div>
            <div class="body">
                <div class="table-responsive py-2">
                    <table id="listExport" class="table table-bordered ">
                        <thead>

                            <tr class="text-uppercase font-weight-bold">

                                <th colspan="15">
                                    <h3 style="text-align: center"> FICHE DE SUIVI DES DYSFONCTIONNEMEN DES PEAGES ET PESAGES </h3>
                                </th>


                            </tr>
                            <tr>
                                <th></th>
                                <th class="text-uppercase">Date</th>
                                <th class="text-uppercase">localisation</th>
                                <th class="text-uppercase">PANNES SIGNALÉES
                                    (Par les agents SIRAT)</th>
                                <th class="text-uppercase">PANNES CONSTATÉES
                                    (Par les agents HOMINTEC)</th>
                                <th class="text-uppercase">CAUSE DU DYSFONCIONNEMENT</th>
                                <th class="text-uppercase">TRAVAUX  RÉALISÉS </th>
                                <th class="text-uppercase">HEURE DE CONSTAT</th>
                                <th class="text-uppercase">HEURE DE DÉBUT D'INTERVENTION</th>
                                <th class="text-uppercase">HEURE DE FIN D'INTERVENTION</th>
                                <th class="text-uppercase">DUREE DE LA PANNE</th>
                                <th class="text-uppercase">RÉSULTAT OBTENU</th>
                                <th class="text-uppercase">BESOINS</th>
                                <th class="text-uppercase">PREUVE   (N° DE FICHE D'INTERVENTION, (image avant et après )</th>
                                <th class="text-uppercase">OBSERVATIONS</th>
                                <th class="text-uppercase">Options</th>

                            </tr>
                        </thead>


                       <tbody>

                        <?php $__currentLoopData = $categorieDysfonctionnemts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $dysfonctionnemts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                        <?php if($loop->first): ?>

                        <?php

                            $dysfonction=$dysfonctionnemts->where('date', $item->date);
                            $dernier = $dysfonction->last();
                            $premier = $dysfonction->first();
                        ?>
                    <?php endif; ?>

                    <?php if($dernier->date !== $item->date): ?>
                        <?php
                            $dysfonction=$dysfonctionnemts->where('date', $item->date);
                            $dernier = $dysfonction->last();
                            $premier = $dysfonction->first();

                        ?>
                    <?php endif; ?>

                        <?php if($categorie->id  == $item->categorie_dysfonctionnemt_id): ?>
                         <tr>

                        <?php if($premier->id == $item->id): ?>
                            <td class="text2-center" rowspan="<?php echo e($item->count()); ?>"><?php echo e($categorie->libelle); ?></td>
                        <?php else: ?>
                            <td class="d-none" style="display: none"></td>
                        <?php endif; ?>

                        <td ><?php echo e($item->date); ?></td>
                        <td ><?php echo e($item->localisation); ?></td>
                        <td ><?php echo e($item->panne_sirat); ?></td>
                        <td ><?php echo e($item->panne_homintec); ?></td>
                        <td ><?php echo e($item->cause); ?></td>
                        <td ><?php echo e($item->travaux_realiser); ?> </td>
                        <td ><?php echo e($item->heure_constat); ?></td>
                        <td ><?php echo e($item->heure_debut_inter); ?></td>
                        <td ><?php echo e($item->heure_fin_inter); ?></td>
                        <td ><?php echo e($item->duree_panne); ?></td>
                        <td ><?php echo e($item->resultat_obtenu); ?></td>
                        <td ><?php echo e($item->besoin); ?></td>
                        <td ><?php echo e($item->preuvre); ?></td>
                        <td ><?php echo e($item->observation); ?></td>
                        <td >

                            <a href="<?php echo e(route('dysfonctionnnemt.edit',['dysfonctionnnemt'=>$item->id])); ?>" class="" title="Modifier">

                                <i class="fa fa-edit"></i>
                            </a>
                        </td>

                         </tr>

                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.export', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/dysfonctionnements/index.blade.php ENDPATH**/ ?>