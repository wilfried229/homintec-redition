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
                                <th>Fin de vacation</th>
                                <th>superviseur</th>
                                <th>controleur</th>
                                <th>Somme declarer</th>
                                <th>Ticket</th>
                                <th>Penalite</th>
                                <th>Nombre de Gate</th>
                                <th>Somme de Gate</th>
                                <th>Somme informatiser de Gate</th>
                                <th>Vehicule</th>

                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($cashFlows as $cash)
                                <tr>
                                    <td>{{$cash->site}}</td>
                                    <td>{{$cash->date}}</td>
                                    <td>{{$cash->voie}}</td>
                                    <td>{{$cash->percepteur}}</td>
                                    <td>{{$cash->fin}}</td>
                                    <td>{{$cash->superviseur}}</td>
                                    <td>{{$cash->controleur}}</td>
                                    <th>{{$cash->somedeclaree}}</th>
                                    <th>{{$cash->ticket}}</th>
                                    <td>{{$cash->penalite}}</td>
                                    <td>{{$cash->gate24}}</td>
                                    <td>{{$cash->somegate}}</td>
                                    <td>{{$cash->sominformatique}}</td>
                                    <td>{{$cash->vehicule}}</td>

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

