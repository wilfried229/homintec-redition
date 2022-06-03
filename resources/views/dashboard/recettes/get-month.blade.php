@extends('layouts.export')

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
                    Recettes / {{$site->nom}}
                </h2>
                <br>

            </div>
            <div class="body">
                <div class="table-responsive py-2">
                    <table id="listExport" class="table table-bordered ">
                        <thead>

                            <tr class="text-uppercase font-weight-bold">

                                <th colspan="15"><h3 style="text-align: center">{{$site->nom}}</h3></th>


                            </tr>
                            <tr>
                                <th class="text-uppercase">Date</th>
                                <th class="text-uppercase">Vacation</th>

                                <th class="text-uppercase">Voie</th>
                                <th class="text-uppercase">Percepteur</th>
                                <th class="text-uppercase">Montant coupon</th>
                                <th class="text-uppercase">Recette declarer</th>
                                <th class="text-uppercase">Recette Informatiser</th>
                                <th class="text-uppercase">Observation</th>
                                <th class="text-uppercase">Manquant</th>
                                <th class="text-uppercase">Surplus</th>
                                <th class="text-uppercase">Nombre passage</th>
                                <th class="text-uppercase">Nombre de violation</th>
                                <th class="text-uppercase">Nombre Exempte</th>
                                <th class="text-uppercase">Nombre de passage manuel</th>
                                <th class="text-uppercase">Montant de passage manuel</th>

                                <th class="text-uppercase">Options</th>


                            </tr>
                            </thead>

                            <tbody>



                                @foreach ($recettes as $key => $recette)



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


                                    $totNombreManuel = $recet->sum('nombre_manuel');
                                    $totMontantManuel = $recet->sum('montant_manuel');
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
                                    $totNombreManuel = $recet->sum('nombre_manuel');
                                    $totMontantManuel = $recet->sum('montant_manuel');

                                @endphp
                            @endif
                            <tr>


                                @if($premier->id == $recette->id)
                                <td class="text-center" rowspan="{{$recet->count()}}">{{ $recette->date_recettes }}</td>
                            @else
                                <td class="d-none" style="display: none"></td>
                            @endif
                                    <td>{{$recette->type}}</td>
                                    <td>{{$recette->voie}}</td>
                                    <td>{{$recette->percepteur_nom ." " .$recette->percepteur_prenom}}</td>
                                    <td>{{ $recette->montant_coupant}}</td>
                                    <td>{{$recette->montant_percepteur }}</td>
                                    <td>{{ $recette->montant_informatise}} </td>
                                    <td>{{$recette->observation}}</td>
                                    <td>{{$recette->montant_ecart < 0  ? -$recette->montant_ecart : 0 }}</td>
                                    <td>{{$recette->montant_ecart > 0  ? $recette->montant_ecart : 0}}</td>
                                    <td>{{$recette->nombre_vehicule}} </td>
                                    <td>{{$recette->nombre_violation}}</td>
                                    <td>{{$recette->nombre_exemptes}} </td>

                                    <td>{{$recette->nombre_manuel}} </td>
                                    <td>{{$recette->montant_manuel}} </td>


                                    <td>

                                        <a href="{{route('recette.show',['id'=>$recette->id])}}" class="btn btn-info" title="Modifier"> Modifier<i class="fa fa-edit"></i></a>
                                        @if (Auth::user()->role == 'HOMINTEC' || Auth::user()->role == 'ADMIN' )
                                        <a  onclick="event.preventDefault(); document.getElementById('retirer-a-form-{{$recette->id}}').submit(); return false;"   class="btn btn-danger">Retirer </a>
                                        &nbsp;&nbsp;

                                        <form id="retirer-a-form-{{$recette->id}}" action="{{route('recette.destroy',['id'=>$recette->id])}}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        @endif

                                    </td>


                                </tr>

                                @if($recette->id == $dernier->id)

                                <tr class="bg-light">


                                    <td style="display: none"></td>
                                    <td style="display: none"> </td>
                                    <td style="display: none"></td>
                                    <td colspan="4" class="text-right">SOMME TOTAL</td>
                                    <td>{{$totCoupon}}</td>
                                    <td>{{$totDeclaree}}</td>
                                    <td>{{$totInformatisee}}</td>
                                    <td></td>
                                    <td>{{-$totManquant}} </td>
                                    <td>{{$totSurplus}}</td>
                                    <td>{{$totPassage}}</td>
                                    <td>{{$totViolation}}</td>
                                    <td>{{$totExempte}} </td>
                                    <td> {{$totNombreManuel}}</td>
                                    <td>{{$totMontantManuel}} </td>
                                    <td> </td>


                                    </tr>

                                    @endif
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

    $("#listExpor tr td:first-child").each(function () {


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
