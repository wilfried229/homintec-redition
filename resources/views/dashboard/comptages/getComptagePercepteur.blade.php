@extends('template-redition')

@section('css')
@endsection


@section('header')
    <div class="block-header">
        <h2>
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
                        {{ $searchComptagePercepteur->percepteur }}

                    </h2>

                </div>
                <div class="body">
                    <div class="row">

                        <div class="col-lg-12">
                            <label for="">Site</label>
                            <input type="text" disabled class="form-control btn-danger" value=" {{ $searchComptagePercepteur->site }}  ">

                        </div>

                        <div class="col-lg-6">
                            <label for="">Voie</label>

                            <input type="text" disabled class="form-control" value="{{ $searchComptagePercepteur->cabine }}">

                        </div>



                        <div class="col-lg-6">
                            <label for="">Date de fin de Vacation</label>
                            <input type="text" disabled class="form-control" value="{{ $searchComptagePercepteur->date }}">

                        </div>

                        <div class="col-lg-6">
                            <label for="">Recette Totale En caissé</label>
                            <input type="text" disabled class="form-control btn-success" value="{{ $searchComptagePercepteur->prix }}">



                        </div>


                        <div class="col-lg-6">

                            <label for="">Nombres de Vehicule</label>

                            <input type="text" disabled class="form-control" value="{{ $searchComptagePercepteur->nbre_vehicule }}">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
@endsection
