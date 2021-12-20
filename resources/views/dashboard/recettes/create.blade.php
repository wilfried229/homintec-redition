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
                   Recettes / site de {{$site->nom}}

                   <a href="{{route('recette.index')}}" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">

                        @if (Session::has('success'))

                            <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    {{ Session::get('success') ? Session::get('success') : Session::get('error') }}
                                  </div>



                                @endif

                                <form action="{{route('recette.store')}}" method="post" class="form" >
                                    @csrf

                                    <div class="row">


                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Voie</label>

                                            <select name="voies_id" id="voies_id" class="form-control" required>

                                                @foreach ($voies as $voie )
                                                <option value="{{$voie->id}}">{{$voie->nom}}</option>

                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <label for=""> Vacation</label>

                                            <select name="vacation_id" id="vacation_id" class="form-control" required>
                                                @foreach ($vacations as $vacation )
                                                <option value="{{$vacation->id}}">{{$vacation->type}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">


                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Date recette</label>
                                            <input type="date" name="date_recettes" id="date_recettes" class="form-control" required>

                                        </div>


                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Heure debut</label>
                                            <input type="time" name="heure_debut" id="heure_debut" class="form-control" required>

                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Heure fin</label>

                                            <input type="time" name="heure_fin" id="heure_fin" class="form-control" required>

                                        </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Percepteur</label>

                                            <select name="percepteur_id" id="precepteur_id"  class="form-control" required>

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
                                            <input type="number" name="montant_coupant" id="montant_coupant" class="form-control" required>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">


                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Montant Percepteur</label>
                                            <input type="number" name="montant_percepteur" id="montant_percepteur" class="form-control" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Ecart</label>
                                            <input type="number" name="montant_ecart" id="montant_ecart" class="form-control" required>
                                        </div>

                                        <div class="col-lg-4 col-md-4">
                                            <label for="">Montant informatise</label>
                                            <input type="number" name="montant_informatise" id="montant_informatise" class="form-control" required>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for="">Observation</label>
                                            <textarea name="observation" id="observation" cols="30" rows="10" class="form-control" required></textarea>

                                        </div>


                                        <div class="col-md-12">
                                            <label for="">Surcharges ?</label>


                                            <div class="switch">
                                                <label><input type="checkbox" id="is_surchages" name ="is_surchages"><span class="lever"></span></label>
                                            </div>
                                        </div>
                                    </div>


                                    <div  id="surcharge" hidden >


                                        <div    class="row">

                                            <div class="col-lg-6 col-md-6">
                                                <label for="">Date de passage</label>
                                                <input type="date" name="date_passage" id="date_passage" class="form-control" >
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <label for="">Heure de passage</label>
                                                <input type="time" name="heure_passage" id="heure_passage" class="form-control" >
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label for="">Immatriculation</label>
                                                <input type="text" name="immatriculation" id="immatriculation" class="form-control">
                                            </div>


                                            <div class="col-lg-4 col-md-4">
                                                <label for="">Nombre d'essieu</label>
                                                <input type="number" name="essieu" id="essieu" class="form-control" >
                                            </div>


                                            <div class="col-lg-4 col-md-4">
                                                <label for="">Type de surcharge</label>

                                                <select name="type_surcharge" id="type_surcharge"  class="form-control" >
                                                    <option value="LOCAL">LOCAL</option>
                                                    <option value="INTERNATIONAL">INTERNATIONAL</option>

                                                </select>
                                            </div>




                                        </div>

                                            <div class="row">

                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids Rouland</label>
                                                    <input type="number" name="poids_roulant" id="poids_roulant" class="form-control" >
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids autorise</label>
                                                    <input type="number" name="poid_autorise" id="poid_autorise" class="form-control" >
                                                </div>


                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids excedent</label>
                                                    <input type="number" name="excedent" id="excedent" class="form-control" >
                                                </div>

                                            </div>

                                            <div class="row">

                                            <div class="col-lg-6 col-md-6">
                                                    <label for="">Montant à payer</label>
                                                    <input type="number" name="montant_apayer" id="montant_apayer" class="form-control" >
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <label for="">Montant payé</label>
                                                    <input type="number" name="montant_payer" id="montant_payer" class="form-control" >
                                                </div>


                                                <div class="col-lg-12 col-md-12">
                                                    <label for="">observation</label>

                                                <textarea name="observation_surchages" id="observation_surchages" cols="30" rows="10" class="form-control" ></textarea>

                                                </div>

                                            </div>

                                        </div>


                                    <div class="row">

                                        <div class="col-md-12">
                                            <input type="submit" value="Enregistrer" class="btn btn-success">

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

})

</script>

@endsection
