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
                
            </div>
            <div class="body">
                <div class="table-responsive">

                    <table id="tab" class="table table-bordered table-striped table-hover dataTable js-exportable">



                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Vacation</th>
                                <th>Voie</th>
                                <th>Percepteur</th>
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

                                @if($loop->first)
                                @php
                                    $recet=$recettes->where('date_recettes', $recette->date_recettes);
                                    $dernier = $recet->last();
                                    $premier = $recet->first();
                                    $totCoupon = $recet->sum('montant_coupant');
                                    $totInformatisee = $recet->sum('montant_informatise');
                                    $totDeclaree = $recet->sum('montant_percepteur');


                                    $totManquant =   $recette->montant_ecart < 0  ? $recet->sum('montant_ecart') : 0;


                                $totSurplus = $recette->montant_ecart > 0  ? $recet->sum('montant_ecart') : 0;
                                 $totPassage = $recet->sum('nombre_vehicule');
                                    //$totManquant = $recet->sum('manquant');
                                   // $totSurplus = $recet->sum('surplus');
                                    ///$totPassagev = $recet->sum('nombrevl');
                                    ///$totPassagep = $recet->sum('nombrepl');
                                    ///$totPassage = $recet->sum('nombrev');
                                    $totViolation = $recet->sum('nombre_violation');
                                    $totExempte = $recet->sum('nombre_exemptes');
                                @endphp
                            @endif

                            @if($dernier->date_recettes !== $recette->date_recettes)
                                @php
                                    $recet=$recettes->where('date_recettes', $recette->date_recettes);
                                    $dernier = $recet->last();
                                    $premier = $recet->first();
                                    $totCoupon = $recet->sum('montant_coupant');
                                    $totInformatisee = $recet->sum('montant_informatise');
                                    $totDeclaree = $recet->sum('montant_percepteur');


                                    $totManquant =   $recette->montant_ecart < 0  ? $recet->sum('montant_ecart') : 0;


                                    $totSurplus = $recette->montant_ecart > 0  ? $recet->sum('montant_ecart') : 0;
                                 $totPassage = $recet->sum('nombre_vehicule');
                                    ///$totPassagep = $recet->sum('nombrepl');
                                    ///$totPassage = $recet->sum('nombrev');

                                    $totViolation = $recet->sum('nombre_violation');
                                    $totExempte = $recet->sum('nombre_exemptes');
                                @endphp
                            @endif

                                <tr>


                            <td  >{{ $recette->date_recettes }}</td>

                                    <td>

                                        {{$recette->vacation()->first()->type}}
                                    </td>
                                    <td>{{$recette->voie()->first()->nom}}</td>
                                    <td>{{$recette->percepteur()->first()->nom ." " .$recette->percepteur()->first()->prenom}}</td>
                                    <td>{{ $recette->montant_coupant}}</td>
                                    <td>{{$recette->montant_percepteur }}</td>
                                    <td>{{ $recette->montant_informatise}} </td>
                                    <td>{{$recette->observation}}</td>
                                    <td>{{$recette->montant_ecart < 0  ? -$recette->montant_ecart : 0 }}</td>
                                    <td>{{$recette->montant_ecart > 0  ? $recette->montant_ecart : 0}}</td>
                                    <td>{{$recette->nombre_vehicule}} </td>
                                    <td>{{$recette->nombre_violation}}</td>
                                    <td>{{$recette->nombre_exemptes}} </td>
                                    <td>   <a href="{{route('recette.show',['id'=>$recette->id])}}" class="btn btn-info" title="Modifier">Modifier <i class="fa fa-edit"></i></a>


                                        @if (Auth::user()->role == 'HOMONTEC' || Auth::user()->role == 'ADMIN' )
                                        <a href="" class="btn btn-danger" title="Supprimer" data-toggle="modal" data-target="{{"#actionModalremoveRecette".$recette->id}}">
                                            <i class="fa fa-1x fa-remove text-danger">Retirer</i>
                                        </a>&nbsp;&nbsp;
                                        @endif
                                        @include('dashboard.recettes.remove',['recette'=> $recette])

                                    </td>

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

<script>
    $(document).ready(function(){

        var span = 1;
        var preTD= "";
        var preTDVal = '';

        $("#tab tr td:first-child").each(function () {


           var  $this = $(this)
            if ($this.text()==preTDVal) {
                span ++;

                if (preTD!= "") {
                    preTD.attr("rowspan",span);
                    $this.remove();

                }


            } else {

                preTD = $this;
                preTDVal = $this.text();
                span = 1;
            }
        })


    })

    </script>


@endsection
