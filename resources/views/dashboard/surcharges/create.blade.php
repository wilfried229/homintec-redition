@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Ajouter une Surcharge
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
                    Surcharge {{ $type? "annulé": "" }} /{{$site->nom}}

                   <a href="{{route('surcharge-manuel.index')}}" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">


                                @include('partials.flash')
                                <form id="store-surcharge" action="{{route('surcharge-manuel.store')}}" method="post" class="form" >
                                    @csrf

                                    <div>

                                        <div class="row">


                                            <input type="hidden" name="sites_id" value="{{$site->id}}">
                                            <input type="hidden" name="voies_id" value="{{$voie}}">
                                            <input type="hidden" name="type" value='{{$type? "ANNULE": "NORMAL"}}'>



                                            <div class="col-lg-6 col-md-6">
                                                <label for="">Date de passage</label>
                                                <input type="date" name="date_passage" id="date_passage" class="form-control" >
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <label for="">Heure de passage</label>
                                                <input type="time" name="heure_passage" id="heure_passage" class="form-control" >
                                            </div>
                                            <div class="col-lg-6 col-md-6 ">
                                                <label for="">Immatriculation</label>
                                                <input type="text" name="immatriculation" id="immatriculation" class="form-control">
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <label for="">Nombre d'essieu</label>
                                                <input onwheel="return false;" type="number" name="essieu" id="essieu" class="form-control" >
                                            </div>


                                        </div>

                                            <div class="row">

                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids Rouland</label>
                                                    <input onwheel="return false;" type="number" name="poids_roulant" id="poids_roulant" class="form-control" >
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids autorise</label>
                                                    <input onwheel="return false;" type="number" name="poid_autorise" id="poid_autorise" class="form-control"  required>
                                                </div>


                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids excedent</label>
                                                    <input disabled   id="excedent" class="form-control" >

                                                    <input  onwheel="return false;" type="hidden" name="excedent" id="poid_excedent" class="form-control" required>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Type de surcharge</label>

                                                    <select name="type_surcharge" id="type_surcharge"  class="form-control" >
                                                        <option>-----------------------------------------</option>

                                                        <option value="LOCAL">LOCAL</option>
                                                        <option value="INTERNATIONAL">INTERNATIONAL</option>

                                                    </select>
                                                </div>
                                            <div class="col-lg-4 col-md-4">
                                                    <label for="montant_apayer">Montant à payer</label>
                                                    <input onwheel="return false;" type="hidden" name="montant_apayer" id="apayer" class="form-control"  >

                                                    <input disabled type="number"  id="montant_apayer" class="form-control"  required>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Montant payé</label>
                                                    <input onwheel="return false;" type="number" name="montant_payer" id="montant_payer" class="form-control"  required>
                                                </div>


                                                <div class="col-lg-12 col-md-12">
                                                    <label for="">observation</label>

                                                <textarea name="observation" id="observation_surchages" cols="30" rows="10" class="form-control" required ></textarea>

                                                </div>

                                            </div>

                                        </div>


                                    <div class="row">

                                        <div class="col-md-12">
                                            <a href="javascript:void(0);"
                                            onclick="if (confirm('Avez vous bien remplir les  données ?'))
                                                {document.getElementById('store-surcharge').submit();} else {return false;}"
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

    var poid_roulant = $('#poids_roulant');
    var poid_autoriser = $('#poid_autorise');
    var poid_exedent = $('#poid_excedent');
    var exedenthide = $('#excedent');
    var type_surcharge = $('#type_surcharge');
    var montant_apayer = $('#montant_apayer');
    var exedent ;
    var montant_apaye;

$(type_surcharge).change(function(value){

    if ($(type_surcharge).val() == "LOCAL") {
        montant_apaye   =  exedent * 20000;
        $(montant_apayer).val(montant_apaye);

        $("#apayer").val(montant_apaye);


    } else {
         montant_apaye =  exedent * 60000;
        $("#apayer").val(montant_apaye);

        $(montant_apayer).val(montant_apaye);
    }
});

$(poid_roulant).keyup(function() {
     exedent  = $(poid_roulant).val() - $(poid_autoriser).val();
    $(poid_exedent).val(exedent);
    $(exedenthide).val(exedent);
  });

$(poid_autoriser).keyup(function() {
    exedent  = $(poid_roulant).val() - $(poid_autoriser).val();
    $(poid_exedent).val(exedent);
    $(exedenthide).val(exedent);
});

//$('#montant_ecart').ke;

</script>

@endsection
