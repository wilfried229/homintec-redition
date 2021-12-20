@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Modification une surcharge
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
                    surcharge

                   <a href="{{route('surcharge-manuel.index')}}" style="float: right;" class="btn btn-info">Retour</a>

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
                            {{ Session::get('success')}}
                          </div>
                                @endif

                                @if (Session::has('error'))

                                <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    {{ Session::get('error')}}
                                  </div>
                                        @endif

                                <form action="{{route('surcharge-manuel.update',['surcharge_manuel'=>$surcharge->id])}}" method="post" class="form" >
                                    @csrf

                                    @method('PUT')




                                    <div  id="surcharge"  >


                                        <div    class="row">

                                            <div class="col-lg-6 col-md-6">
                                                <label for="">Date de passage</label>
                                                <input type="date" name="date_passage" value="{{$surcharge->date_passage ?? ""}}" id="date_passage" class="form-control" required>
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <label for="">Heure de passage</label>
                                                <input type="time" name="heure_passage"  value="{{$surcharge->heure_passage  ?? ""}}" id="heure_passage" class="form-control" required>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label for="">Immatriculation</label>
                                                <input type="text" name="immatriculation" value="{{$surcharge->immatriculation  ?? ""}}" id="immatriculation" class="form-control" required>
                                            </div>


                                            <div class="col-lg-4 col-md-4">
                                                <label for="">Nombre d'essieu</label>
                                                <input type="number" name="essieu" value="{{$surcharge->essieu  ?? ""}}" id="essieu" class="form-control" required>
                                            </div>


                                            <div class="col-lg-4 col-md-4">
                                                <label for="">Type de surcharge</label>

                                                <select name="type_surcharge" id="type_surcharge" class="form-control" required>
                                                    <option value="LOCAL"  @if ($surcharge->type_surcharge=="LOCAL")
                                                        selected
                                                    @endif>LOCAL</option>
                                                    <option value="INTERNATIONAL"  @if ($surcharge->type_surcharge=="INTERNATIONAL")
                                                        selected
                                                    @endif>INTERNATIONAL</option>

                                                </select>
                                            </div>




                                        </div>

                                            <div class="row">

                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids Rouland</label>
                                                    <input type="number" name="poids_roulant" value="{{$surcharge->poids_roulant  ?? ""}}" id="poids_roulant" class="form-control" required>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids autorise</label>
                                                    <input type="number" name="poid_autorise" value="{{$surcharge->poid_autorise  ?? ""}}" id="poid_autorise" class="form-control" required>
                                                </div>


                                                <div class="col-lg-4 col-md-4">
                                                    <label for="">Poids excedent</label>
                                                    <input type="number" name="excedent" value="{{$surcharge->excedent  ?? ""}}" id="excedent" class="form-control" required>
                                                </div>

                                            </div>

                                            <div class="row">

                                            <div class="col-lg-6 col-md-6">
                                                    <label for="">Montant à payer</label>
                                                    <input type="number" name="montant_apayer" value="{{$surcharge->montant_apayer  ?? ""}}" id="montant_apayer" class="form-control" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <label for="">Montant payé</label>
                                                    <input type="number" name="montant_payer" value="{{$surcharge->montant_payer  ?? ""}}" id="montant_payer" class="form-control" required>
                                                </div>


                                                <div class="col-lg-12 col-md-12">
                                                    <label for="">observation</label>

                                                <textarea name="observation_surcharges" value="" id="observation_surcharges" cols="30" rows="10" class="form-control" >{{$recette->observation_surcharges  ?? ""}}</textarea>

                                                </div>

                                            </div>

                                        </div>



                                        <div class="row">

                                        <div class="col-md-12">
                                            <input type="submit" value="Modifier" class="btn btn-success">

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


var date_passage = $('#date_passage').val();


    if (date_passage  !="" ) {
        $('#surcharge').show();
    }

    $("#is_surcharges").change(function(value){

    if (this.checked) {
        $('#surcharge').show();
    } else {
        $('#surcharge').hide();
    }

})

</script>

@endsection
