@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Modifier un percepteur
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
                    Percepteur

                   <a href="{{route('percepteur.index')}}" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">


                        @include('partials.flash')

                                <form action="{{route('percepteur.update',['id' =>$percepteur->id])}}" method="post" class="form" >
                                    @csrf

                                    @method('PUT')

                                    <div class="row">


                                        <div class="col">
                                            <label for="">Nom</label>
                                            <input type="text" value="{{$percepteur->nom}}"  name="nom" id="nom" class="form-control">

                                        </div>
                                        <div class="col">
                                            <label for="">Prénom</label>
                                            <input type="text" value="{{$percepteur->prenom}}"  name="prenom" id="prenom" class="form-control">

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
$("#is_surchages").change(function(value){

    if (this.checked) {
        $('#surcharge').show();
    } else {
        $('#surcharge').hide();
    }

})

</script>

@endsection
