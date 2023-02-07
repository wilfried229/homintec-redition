@extends('layouts.export')

@section('css')

@endsection

@section('title')
FICHE DE SUIVI DES DYSFONCTIONNEMEN DES PEAGES ET PESAGES

@endsection

@section('header')
<div class="block-header">
    <h2>
        Dysfonctionnements
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
                    Dysfonctionnements / {{$site->nom}}
                </h2>
                <br>

                <a href="{{ route('dysfonctionnnemt.create') }}" class="btn btn-info">Ajouter</a>
            </div>
            <div class="body">
                <div class="table-responsive py-2">
                    <table id="listExport" class="table table-bordered ">
                        <thead>

                            <tr class="text-uppercase font-weight-bold">

                                <th colspan="15">
                                    <h3 style="text-align: center"> FICHE DE SUIVI DES DYSFONCTIONNEMEN DES PEAGES ET PESAGES </h3>
                                </th>


                            </tr>
                            <tr>
                                <th></th>
                                <th class="text-uppercase">Date</th>
                                <th class="text-uppercase">localisation</th>
                                <th class="text-uppercase">PANNES SIGNALÉES
                                    (Par les agents SIRAT)</th>
                                <th class="text-uppercase">PANNES CONSTATÉES
                                    (Par les agents HOMINTEC)</th>
                                <th class="text-uppercase">CAUSE DU DYSFONCIONNEMENT</th>
                                <th class="text-uppercase">TRAVAUX  RÉALISÉS </th>
                                <th class="text-uppercase">HEURE DE CONSTAT</th>
                                <th class="text-uppercase">HEURE DE DÉBUT D'INTERVENTION</th>
                                <th class="text-uppercase">HEURE DE FIN D'INTERVENTION</th>
                                <th class="text-uppercase">DUREE DE LA PANNE</th>
                                <th class="text-uppercase">RÉSULTAT OBTENU</th>
                                <th class="text-uppercase">BESOINS</th>
                                <th class="text-uppercase">PREUVE   (N° DE FICHE D'INTERVENTION, (image avant et après )</th>
                                <th class="text-uppercase">OBSERVATIONS</th>
                                <th class="text-uppercase">Options</th>

                            </tr>
                        </thead>


                       <tbody>

                        @foreach ($categorieDysfonctionnemts as $categorie)
                        @foreach ($dysfonctionnemts as $item)



                        @if($loop->first)

                        @php

                            $dysfonction=$dysfonctionnemts->where('date', $item->date);
                            $dernier = $dysfonction->last();
                            $premier = $dysfonction->first();
                        @endphp
                    @endif

                    @if($dernier->date !== $item->date)
                        @php
                            $dysfonction=$dysfonctionnemts->where('date', $item->date);
                            $dernier = $dysfonction->last();
                            $premier = $dysfonction->first();

                        @endphp
                    @endif

                        @if ($categorie->id  == $item->categorie_dysfonctionnemt_id)
                         <tr>

                        @if($premier->id == $item->id)
                            <td class="text2-center" rowspan="{{$item->count()}}">{{ $categorie->libelle }}</td>
                        @else
                            <td class="d-none" style="display: none"></td>
                        @endif

                        <td >{{ $item->date }}</td>
                        <td >{{ $item->localisation }}</td>
                        <td >{{ $item->panne_sirat }}</td>
                        <td >{{ $item->panne_homintec }}</td>
                        <td >{{ $item->cause }}</td>
                        <td >{{ $item->travaux_realiser }} </td>
                        <td >{{ $item->heure_constat }}</td>
                        <td >{{ $item->heure_debut_inter }}</td>
                        <td >{{ $item->heure_fin_inter}}</td>
                        <td >{{ $item->duree_panne}}</td>
                        <td >{{ $item->resultat_obtenu }}</td>
                        <td >{{ $item->besoin }}</td>
                        <td >{{ $item->preuvre }}</td>
                        <td >{{ $item->observation }}</td>
                        <td >

                            <a href="{{ route('dysfonctionnnemt.edit',['dysfonctionnnemt'=>$item->id]) }}" class="" title="Modifier">

                                <i class="fa fa-edit"></i>
                            </a>
                        </td>

                         </tr>

                        @endif
                        @endforeach
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
