@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
        Cash-Flows
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
                    Cash-Flows
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Site</th>
                                <th>Date</th>
                                <th>Voie</th>
                                <th>Percepteur</th>
                                <th>Debut de vacation</th>
                                <th>Fin de vacation</th>
                                <th>superviseur</th>
                                <th>controleur</th>
                                <th>Montant coupon</th>
                                <th>Recette declarer</th>
                                <th>Recette Informatiser</th>
                                <th>Observation</th>
                                <th>Manquant</th>
                                <th>Surplus</th>
                                <th>Nombre passage</th>
                                <th>Nombre de violation</th>
                                <th>Nombre Exempte</th>
                                <th>Nombre de Gate</th>
                                <th>Recette Gate</th>
                                <th>Recette de ticket</th>
                                <th>Nombre de ticket</th>
                                <th>Somme penalite</th>
                                <th>Poids penalite</th>
                                <th>Penalite annulee</th>

                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($cashFlows as $cash)
                                <tr>
                                    <td>{{$cash->site}}</td>
                                    <td>{{$cash->date}}</td>
                                    <td>{{$cash->voie}}</td>
                                    <td>{{$cash->percepteur}}</td>
                                    <td>{{$cash->debut}}</td>
                                    <td>{{$cash->fin}}</td>
                                    <td>{{$cash->superviseur}}</td>
                                    <td>{{$cash->controleur}}</td>
                                    <td>{{$cash->recette_informatise}}</td>
                                    <td>{{$cash->recette_declaree}}</td>
                                    <td>{{$cash->recette_informatise}} </td>
                                    <td>{{$cash->observation}}</td>
                                    <td>{{$cash->manquant}}</td>
                                    <td>{{$cash->surplus}}</td>
                                    <td>{{$cash->nbre_passage}} </td>
                                    <td>{{$cash->violation}}</td>
                                    <td>{{$cash->nbre_exempte}} </td>
                                    <td>{{$cash->nbre_gate}}</td>
                                    <td>{{$cash->recette_gate}} </td>
                                    <td>{{$cash->recette_ticket}}</td>
                                    <td>{{$cash->nbre_ticket}}</td>
                                    <td>{{$cash->somme_penalite}} </td>
                                    <td>{{$cash->poids_penalite}} </td>
                                    <td>{{$cash->penalite_annulee}}</td>

                                </tr>

                                @endforeach
                            </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')


@endsection

