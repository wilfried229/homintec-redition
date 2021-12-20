@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            surcharges
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
                    surcharges / {{$site->nom}} / {{$date}}
                </h2>
                <br>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Site</th>
                                <th>Date de passage</th>
                                <th>Heure de passage</th>
                                <th>Vacation</th>

                                <th>Immatriculation</th>
                                <th>Nombre Essieu</th>
                                <th>Type surcharge</th>
                                <th>Poids roulant</th>
                                <th>Poids autorisé</th>
                                <th>Poids excédent</th>
                                <th>Montnant à payer</th>
                                <th>Montant payé</th>
                                <th>Observations</th>
                                <th>Options</th>


                            </tr>
                            </thead>

                            <tbody>
                                @foreach ($surcharges as $surcharge)
                                <tr>
                                    <td>{{$surcharge->site()->first()->nom ?? ""}}</td>
                                    <td>{{$surcharge->date_passage}}</td>
                                    <td>{{$surcharge->heure_passage}}</td>
                                    <td>{{$surcharge->recette()->first()->vacation()->first()->type}}</td>
                                    <td>
                                        {{ $surcharge->immatriculation}}
                                    </td>
                                    <td>{{$surcharge->essieu }}</td>
                                    <td>{{$surcharge->type_surcharge  }}</td>
                                    <td>{{$surcharge->poids_roulant }} </td>
                                    <td>{{$surcharge->poid_autorise}}</td>
                                    <td>{{$surcharge->excedent}}</td>
                                    <td>{{$surcharge->montant_apayer}}</td>
                                    <td>{{$surcharge->montant_payer}} </td>
                                    <td>{{$surcharge->observation}}</td>
                                    <td>
                                    <a href="{{route('surcharge-manuel.edit',['surcharge_manuel'=>$surcharge ])}}" class="btn btn-info" title="Modifier"> <i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-danger" title="Supprimer" data-toggle="modal" data-target="{{"#actionModalremoveSucharges".$surcharge->id}}">
                                        <i class="fa fa-1x fa-remove text-danger"></i>
                                    </a>&nbsp;&nbsp;
                                </td>

                                @include('dashboard.surcharges.remove',['surcharge'=> $surcharge])

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
