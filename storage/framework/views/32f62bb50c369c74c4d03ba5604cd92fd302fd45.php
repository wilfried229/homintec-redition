<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
            Ajouter une recette
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
                   Recette / site de <?php echo e($site->nom); ?> / <?php echo e($voies->nom ?? ''); ?>


                   <a href="<?php echo e(route('recette.index')); ?>" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">

                        <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                <form id="store-recette" action="<?php echo e(route('recette.store')); ?>" method="post" class="form" >
                                    <?php echo csrf_field(); ?>

                                    <div class="row">


                                        <input type="hidden" name="voies_id" value="<?php echo e($voies->id ?? ''); ?>">


                                        <input type="hidden" id="voies"  value="<?php echo e($voies->nom ?? ''); ?>">


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label for=""> Vacation</label>

                                            <select name="vacations_id" id="vacations_id" class="form-control" required>

                                                <option value=""  selected>----------------- Selectionnez---------------</option>

                                                <?php $__currentLoopData = $vacations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vacation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <option value="<?php echo e($vacation->id); ?>"><?php echo e($vacation->type); ?></option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Date recette</label>
                                            <input type="date" name="date_recettes" id="date_recettes" class="form-control" required>

                                        </div>


                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Heure debut</label>
                                            <input type="time" name="heure_debut" id="heure_debut" class="form-control" required>

                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Heure fin</label>

                                            <input type="time" name="heure_fin" id="heure_fin" class="form-control" required>

                                        </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Percepteur</label>


                                            <select name="percepteurs_id" id="percepteurs_id"  class="form-control selectpicker" data-show-subtext="true" data-live-search="true" style="height: 50px;widht:50px" required>

                                                <option  value="" selected> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;    &nbsp; -------- Selectionnez--------</option>

                                                <?php $__currentLoopData = $percepteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $percepteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($percepteur->id); ?>">   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;    &nbsp;                 <?php echo e($percepteur->nom); ?></option>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Nombre de vehicule</label>
                                            <input onwheel="return false;" type="number" name="nombre_vehicule" id="nombre_vehicule" class="form-control" required>

                                        </div>

                                    </div>

                                    <div class="row">


                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Nombre de violation</label>
                                            <input onwheel="return false;" type="number" name="nombre_violation" id="nombre_violation" class="form-control" required>
                                        </div>



                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Nombre de exempte</label>
                                            <input  onwheel="return false;" type="number" name="nombre_exemptes" id="nombre_exemptes" class="form-control" required>
                                        </div>


                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Montant coupant</label>

                                            <input onwheel="return false;" type="hidden" name="tarif" id="tarif" value="<?php echo e($site->tarif); ?>" class="form-control">

                                            <input onwheel="return false;"  type="number" name="montant_coupant" id="montant_coupant" class="form-control" required>

                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">




                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Montant informatise</label>
                                            <input onwheel="return false;"  type="number" name="montant_informatise" id="montant_informatise" class="form-control" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Montant Percepteur</label>
                                            <input onwheel="return false;" type="number" name="montant_percepteur" id="montant_percepteur" class="form-control" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Ecart</label>
                                            <input disabled type="number" id="ecart" class="form-control">

                                            <input onwheel="return false;" type="hidden" name="montant_ecart" id="montant_ecart" class="form-control" required>

                                        </div>

                                    </div>



                                    <div class="row" >
                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Nombre de passage manuel </label>
                                            <input  onwheel="return false;" type="number" name="nombre_manuel"  id="nombre_manuel" class="form-control" >
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Montant Manuel</label>
                                            <input  onwheel="return false;" type="number" name="montant_manuel"    id="montant_manuel" class="form-control" >
                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for="">Observation</label>
                                            <textarea name="observation" id="observation" cols="30" rows="10" class="form-control" required></textarea>

                                        </div>



                                    </div>





                                    <div class="row">

                                        <div class="col-md-12">

                                            <a href="javascript:void(0);"
                                            onclick="if (confirm('Avez vous bien remplir les  données ?'))
                                                {document.getElementById('store-recette').submit();} else {return true;}"
                                            class="btn btn-sm btn-success">Enregistrer
                                             <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </form>


                  </div>
                  <!-- /.row -->

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>

$("#montant_informatise").keyup(function() {


/*
    if ($('#montant_informatise').val() > $('#montant_coupant').val() ) {
        var ecart  = $('#montant_percepteur').val()-  $('#montant_informatise').val();
    }else{


    }
 */

    var ecart  = $('#montant_percepteur').val()-  $('#montant_coupant').val();

    $('#ecart').val(ecart);
    $('#montant_ecart').val(ecart);


console.log(ecart);
  });

  $("#montant_percepteur").keyup(function() {



   /* if ($('#montant_informatise').val() > $('#montant_coupant').val() ) {
        var ecart  = $('#montant_percepteur').val()-  $('#montant_informatise').val();
    }else{

        var ecart  = $('#montant_percepteur').val()-  $('#montant_coupant').val();

    }
 */

    var ecart  = $('#montant_percepteur').val()-  $('#montant_coupant').val();

$('#ecart').val(ecart);


$('#montant_ecart').val(ecart);
console.log(ecart);
});


$("#nombre_vehic").keyup(function() {

    myArray = new Array("PL11","PL12","PL13","PL21","PL22","PL23","PL11","PL21","PL1","PL2","PL51","PL61","PL31","PL41","PL71","PL81","PL");
if( $.inArray($("#voies").val(), myArray) != -1 ) {
    $("#montant_coupant").prop("type", "number");
    $("#coupant").prop("type", "hidden");
}else{
    $("#montant_coupant").prop("type", "hidden");
    $("#coupant").prop("type", "number");

    var montant_coupant = $('#nombre_vehicule').val() * $('#tarif').val();
    $('#montant_coupant').val(montant_coupant);
    $('#coupant').val(montant_coupant);
}



});

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/recettes/create-except.blade.php ENDPATH**/ ?>