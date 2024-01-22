<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
        Recettes
        <small>(<?php echo e($site); ?>) <a href="#" target="_blank"> </a></small>
    </h2>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Recettes (<?php echo e($site); ?>)
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                            <th>Site</th>
                                    <th>Voie</th>
                                    <th>Percepteur</th>
                                    <th>Temps services</th>
                                    <th>Date de début</th>
                                    <th>Date de fin</th>
                                    <th>Superviseur</th>
                                    <th>Controleur</th>
                                    <th>Administateur</th>
                                    <th>nbre_vehicule</th>
                                    <th>manquant</th>

                                    <th>suplus</th>
                                    <th>nbre_violation</th>
                                    <th>nbre_exempte</th>



                                    <th>Déclaration billetaire</th>
                                    <th>Déclaration ticket manuel</th>
                                    <th>penalitée rejetter</th>
                                    <th>penalié validée local</th>
                                    <th>penalité validée extanté</th>
                                    <th>Somme déclarée caisse</th>
                                    <th>Réesultat_compte</th>
                                    <th>Somme déclarer caisse</th>
                                    <th>Résultat Compte</th>
                                    <th>Somme gate</th>
                                    <th>Passage gate</th>
                                    <th>remarque</th>
                                    <th>nbre_passage</th>
                                    <th>montant_coupant</th>
                                    <th>somme_totale_informatise</th>
                                    <th>somme_informatise_sans_gate_24</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Site</th>
                                <th>Voie</th>
                                <th>Percepteur</th>
                                <th>Temps services</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Superviseur</th>
                                <th>Controleur</th>
                                <th>Administateur</th>
                                <th>nbre_vehicule</th>
                                <th>manquant</th>

                                <th>suplus</th>
                                <th>nbre_violation</th>
                                <th>nbre_exempte</th>



                                <th>Déclaration billetaire</th>
                                <th>Déclaration ticket manuel</th>
                                <th>penalitée rejetter</th>
                                <th>penalié validée local</th>
                                <th>penalité validée extanté</th>
                                <th>Somme déclarée caisse</th>
                                <th>Réesultat_compte</th>
                                <th>Somme déclarer caisse</th>
                                <th>Résultat Compte</th>
                                <th>Somme gate</th>
                                <th>Passage gate</th>
                                <th>remarque</th>
                                <th>nbre_passage</th>
                                <th>montant_coupant</th>
                                <th>somme_totale_informatise</th>
                                 <th>somme_informatise_sans_gate_24</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                <?php $__currentLoopData = $reditions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $redition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                <td><?php echo e($redition->site); ?></td>
                                <td><?php echo e($redition->voie); ?></td>
                                <td><?php echo e($redition->percepteur); ?></td>
                                <td><?php echo e($redition->temps_de_presence); ?></td>
                                <td><?php echo e($redition->debut_de_vacationt); ?></td>
                                <td><?php echo e($redition->fin_de_vacation); ?></td>
                                <td><?php echo e($redition->superviseur); ?></td>
                                <td><?php echo e($redition->controleur); ?></td>
                                <td><?php echo e($redition->administrateur); ?></td>
                                <td><?php echo e($redition->nbre_vehicule); ?></td>
                                <td><?php echo e($redition->manquant); ?></td>
                                <td><?php echo e($redition->suplus); ?></td>
                                <td><?php echo e($redition->nbre_violation); ?></td>
                                <td><?php echo e($redition->nbre_exempte); ?></td>
                                <td><?php echo e($redition->declaration_billetaire); ?></td>
                                <td><?php echo e($redition->declaration_ticket_manuel); ?></td>
                                <td><?php echo e($redition->penalite_rejetter); ?></td>
                                <td><?php echo e($redition->penalite_valider_local); ?></td>
                                <td><?php echo e($redition->penalite_valider_ext); ?></td>
                                <td><?php echo e($redition->somme_declarer_caisse); ?></td>
                                <td><?php echo e($redition->resultat_compte); ?></td>
                                <td><?php echo e($redition->somme_gate); ?></td>
                                <td><?php echo e($redition->passage_gate_24); ?></td>
                                <td><?php echo e($redition->remarque); ?></td>
                                <td><?php echo e($redition->remarque); ?></td>
                                <td><?php echo e($redition->nbre_passage); ?></td>
                                <td><?php echo e($redition->montant_coupant); ?></td>
                                <td><?php echo e($redition->somme_totale_informatise); ?></td>
                                <td><?php echo e($redition->somme_informatise_sans_gate_24); ?></td>





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


<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/homintec-redition/resources/views/dashboard/redition.blade.php ENDPATH**/ ?>