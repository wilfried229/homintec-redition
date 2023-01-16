@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
        Statistiques vacation
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
                    Statistiques vacation
                </h2>

            </div>
            <div class="body">

                <div class="row">
                    <div class="col-lg-4">
                        <label for="">Percepteur : {{ $percepteurs }}</label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Cabine  {{ $cabines }}</label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Date de Debut : {{ $dateDebut }}</label>

                    </div>
                    <div class="col-lg-4">
                        <label for="">Date de fin : {{ $dateFin }}</label>
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-12">
                    <h1>Nombre de vehicules par categorie</h1>

                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-3">
                        <label for=""> TRYCICLE : {{ $dataStatistiques['TRYCICLE'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> VEHICULE LEGER : {{ $dataStatistiques['VEHICULE LEGER'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> AUTOBUS : {{ $dataStatistiques['AUTOBUS'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD  Essieu 2 : {{ $dataStatistiques['POIDS LOURD 2'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 3 : {{ $dataStatistiques['POIDS LOURD 3'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 4 : {{ $dataStatistiques['POIDS LOURD 4'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu  5 : {{ $dataStatistiques['POIDS LOURD 5'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu  6 : {{ $dataStatistiques['POIDS LOURD 6'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD  Essieu 7 : {{ $dataStatistiques['POIDS LOURD 7'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 8 : {{ $dataStatistiques['POIDS LOURD 8'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 9 : {{ $dataStatistiques['POIDS LOURD 9'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 10 : {{ $dataStatistiques['POIDS LOURD 10'] }}</label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


@section('js')


@endsection
