@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
        Ajouter une categorie de  dysfonctionnement
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
                    categorie  dysfonctionnement

                    <a href="{{route('recette.index')}}" style="float: right;" class="btn btn-info">Retour</a>

                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">

                        @include('partials.flash')



                        <form id="store-recette" action="{{route('categorie-dysfonctionnnemt.store')}}" method="post" class="form">
                            @csrf
                            @method('POST')

                            @include('dashboard.categorieDysfonctionnements.formulaire',['categorieDysfonctionnemts'=>$categorieDysfonctionnemts])
                            <br>
                        </form>


                    </div>
                    <!-- /.row -->

                </div>
            </div>
        </div>
    </div>
    @endsection

