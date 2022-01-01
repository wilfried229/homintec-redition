@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Ajouter une recette
        <small><a href="" target="_blank"> </a></small>
    </h2>
</div>
@endsection


@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                   Recette / site de {{$site->nom}} / {{$voies->nom ?? ''}}

                   <a href="{{route('recette.index')}}" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">

                        @include('partials.flash')


                                <form id="store-recette" action="{{route('recette.store')}}" method="post" class="form" >
                                    @csrf

                                    <div class="row">


                                        <input type="hidden" name="voies_id" value="{{$voies->id ?? ''}}">



                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label for=""> Vacation</label>

                                            <select name="vacation_id" id="vacation_id" class="form-control" required>

                                                <option  selected>----------------- Selectionnez---------------</option>

                                                @foreach ($vacations as $vacation )

                                                <option value="{{$vacation->id}}">{{$vacation->type}}</option>

                                                @endforeach
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

                                            <select name="percepteur_id" id="precepteur_id"  class="form-control" required>

                                                <option  selected>-------- Selectionnez--------</option>

                                                @foreach ($percepteurs as $percepteur )
                                                <option value="{{$percepteur->id}}">{{$percepteur->nom}}</option>

                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Nombre de vehicule</label>
                                            <input type="number" name="nombre_vehicule" id="nombre_vehicule" class="form-control" required>

                                        </div>

                                    </div>

                                    <div class="row">


                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Nombre de violation</label>
                                            <input type="number" name="nombre_violation" id="nombre_violation" class="form-control" required>
                                        </div>



                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Nombre de exempte</label>
                                            <input type="number" name="nombre_exemptes" id="nombre_exemptes" class="form-control" required>
                                        </div>


                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Montant coupant</label>

                                            <input type="hidden" name="tarif" id="tarif" value="{{$site->tarif}}" class="form-control">


                                            <input  type="hidden" name="montant_coupant" id="montant_coupant" class="form-control" required>

                                            <input disabled type="number" id="coupant" class="form-control" required>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">




                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Montant informatise</label>
                                            <input type="number" name="montant_informatise" id="montant_informatise" class="form-control" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Montant Percepteur</label>
                                            <input type="number" name="montant_percepteur" id="montant_percepteur" class="form-control" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Ecart</label>
                                            <input disabled type="number" id="ecart" class="form-control">

                                            <input  type="hidden" name="montant_ecart" id="montant_ecart" class="form-control" required>

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
                                                {document.getElementById('store-recette').submit();} else {return false;}"
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
@endsection


@section('js')

<script>
$("#is_surchages").change(function(value){

    if (this.checked) {
        $('#surcharge').show();
    } else {
        $('#surcharge').hide();
    }




});

$("#montant_informatise").keyup(function() {

    var ecart  = $('#montant_informatise').val() - $('#montant_percepteur').val();
    $('#ecart').val(ecart);
    $('#montant_ecart').val(ecart);


console.log(ecart);
  });

  $("#montant_percepteur").keyup(function() {

var ecart  = $('#montant_informatise').val() - $('#montant_percepteur').val();
$('#ecart').val(ecart);

$('#montant_ecart').val(ecart);
console.log(ecart);
});


$("#nombre_vehicule").keyup(function() {

var montant_coupant = $('#nombre_vehicule').val() * $('#tarif').val();
$('#montant_coupant').val(montant_coupant);
$('#coupant').val(montant_coupant);


});



$("#voies_id").change(function(value){
    myArray = new Array("PL11","PL12","PL13","PL21","PL22","PL23","PL11","PL21","PL1","PL2","PL51","PL61","PL31","PL41","PL71","PL81","PL");
if( $.inArray($("#voies_id option:selected").text(), myArray) != -1 ) {
    $("#montant_coupant").prop("type", "number");
    $("#coupant").prop("type", "hidden");
}else{
    $("#montant_coupant").prop("type", "hidden");
    $("#coupant").prop("type", "number");
}
});



//$('#montant_ecart').ke;

</script>

@endsection
