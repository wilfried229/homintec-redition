<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('header'); ?>
<div class="block-header">
    <h2>
        Ajouter un dysfonctionnement
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
                    Dysfonctionnement

                    <a href="<?php echo e(route('dysfonctionnnemt.index')); ?>" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">

                        <?php echo $__env->make('partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                        <form id="store-recette" action="<?php echo e(route('dysfonctionnnemt.store')); ?>" method="post" class="form">
                            <?php echo csrf_field(); ?>

                           <?php echo $__env->make('dashboard.dysfonctionnements.formulaire',['categorieDysfonctionnemts'=>$categorieDysfonctionnemts,'dysfonctionnement'=>$dysfonctionnnemt], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <br>
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
        $('#submit').click(function(e){
    myArray = [ 'montant_coupant',
        'montant_percepteur'
        ,'date_recettes'
        ,'heure_debut'
        ,'heure_fin'
        ,'nombre_vehicule'
        ,'nombre_violation',
        'nombre_exemptes',
        'montant_ecart',
        'montant_informatise',
        'observation',
        'percepteurs_id',
        'vacations_id',
    ]
        e.preventDefault();
    /////alert(myArray);
    myArray.forEach(element => {
        if (!$('#'+element).val()) {
            return $('#'+element).attr('data-msg');
        }
    });

    return false;


})


$("#montant_informatise").keyup(function() {

  /*   if ($('#montant_informatise').val() > $('#montant_coupant').val() ) {
        var ecart  = $('#montant_percepteur').val()-  $('#montant_informatise').val();
    }else{

        var ecart  = $('#montant_percepteur').val()-  $('#montant_coupant').val();

    } */

    var ecart  = $('#montant_percepteur').val()-  $('#montant_coupant').val();



    $('#ecart').val(ecart);
    $('#montant_ecart').val(ecart);


console.log(ecart);
  });

  $("#montant_percepteur").keyup(function() {

/*

   if ($('#montant_informatise').val() > $('#montant_coupant').val() ) {
        var ecart  = $('#montant_percepteur').val()-  $('#montant_informatise').val();
    }else{

        var ecart  = $('#montant_percepteur').val()-  $('#montant_coupant').val();

    } */

    var ecart  = $('#montant_percepteur').val()-  $('#montant_coupant').val();


$('#ecart').val(ecart);

$('#montant_ecart').val(ecart);
console.log(ecart);
});


$("#nombre_vehicule").keyup(function() {

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


    </script>


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('template-redition', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/dashboard/dysfonctionnements/create.blade.php ENDPATH**/ ?>