@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Recettes
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
                    Recettes
                </h2>
                <br>
                <a href="{{route('recette.create')}}" class="btn btn-info ">Ajouter</a>

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
                                <th>Vacation</th>
                                <th>Montant coupon</th>
                                <th>Recette declarer</th>
                                <th>Recette Informatiser</th>
                                <th>Observation</th>
                                <th>Manquant</th>
                                <th>Surplus</th>
                                <th>Nombre passage</th>
                                <th>Nombre de violation</th>
                                <th>Nombre Exempte</th>
                                <th>Options</th>


                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($recettes as $recette)
                                <tr>
                                    <td>{{$recette->site()->first()->nom}}</td>
                                    <td>{{$recette->date_recettes}}</td>
                                    <td>{{$recette->voie()->first()->nom}}</td>
                                    <td>{{$recette->percepteur()->first()->nom ." " .$recette->percepteur()->first()->prenom}}</td>
                                    <td>
                                        {{$recette->vacation()->first()->type}}
                                    </td>
                                    <td>{{ number_format((float)$recette->montant_coupant, 0, '.', '.') }}</td>
                                    <td>{{ number_format((float)$recette->montant_percepteur , 0, '.', '.') }}</td>
                                    <td>{{ number_format((float)$recette->montant_informatise , 0, '.', '.')}} </td>
                                    <td>{{$recette->observation}}</td>
                                    <td>{{$recette->montant_ecart < 0  ? -$recette->montant_ecart : 0 }}</td>
                                    <td>{{$recette->montant_ecart > 0  ? $recette->montant_ecart : 0}}</td>
                                    <td>{{$recette->nombre_vehicule}} </td>
                                    <td>{{$recette->nombre_violation}}</td>
                                    <td>{{$recette->nombre_exemptes}} </td>
                                    <td>   <a href="{{route('recette.show',['id'=>$recette->id])}}" class="btn btn-info" title="Modifier">Modifier <i class="fa fa-edit"></i></a>

                                        <a href="" class="btn btn-danger" title="Supprimer" data-toggle="modal" data-target="{{"#actionModalremoveRecette".$recette->id}}">
                                            <i class="fa fa-1x fa-remove text-danger">Retirer</i>
                                        </a>&nbsp;&nbsp;
                                    </td>

                                    @include('dashboard.recettes.remove',['recette'=> $recette])
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
