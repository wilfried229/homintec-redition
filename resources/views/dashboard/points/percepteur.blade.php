@extends('layouts.export')


@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('publics/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('publics/css/buttons.bootstrap4.min.css')}}">
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
                    Points Percepteurs /
                </h2>
                <br>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="listExport" class="table table-bordered ">

                        <thead>

                            <tr>
                                <th colspan="15"><h3 style="text-align: center">{{ $site->nom }}</h3></th>
                            </tr>
                            <tr>
                                <th>Pecepteur</th>
                                <th>Date</th>
                                <th>Heur de debut</th>
                                <th>Heur de fin</th>
                                <th>Horaire</th>


                            </tr>
                            </thead>

                            <tbody>

                               @php
                                    $arrSomme = 0;
                               @endphp

                                @foreach ($pointPercepteurs as $key => $percepteur)

                                @php
                                $start = strtotime($percepteur->heure_debut);
                                $end = strtotime($percepteur->heure_fin ); // Run query to get datetime value from db
                                $elapsed = $end - $start;
                                ///$total_time = array_sum($elapsed);
                                $arrSomme+= $elapsed;

                                @endphp
                                @if($loop->first)

                                @php
                                $percepteursNom = $pointPercepteurs->where('percepteurs_id',$percepteur->percepteurs_id);
                                $dernier = $percepteursNom->last();
                                $premier = $percepteursNom->first();

                                @endphp

                            @endif

                            @if($dernier->percepteurs_id != $percepteur->percepteurs_id)
                                @php
                                $percepteursNom = $pointPercepteurs->where('percepteurs_id',$percepteur->percepteurs_id);
                                $dernier = $percepteursNom->last();
                                $premier = $percepteursNom->first();
                                $arrSomme+= $elapsed;

                                @endphp
                            @endif

                            <tr>
                                @if($premier->id == $percepteur->id)
                                <td class="text-center" rowspan="{{ $percepteursNom->count() }}"> {{  $percepteur->percepteur_nom}}</td>

                            @else
                                <td class="d-none" style="display: none"></td>
                            @endif
                                <td class="text-center" >{{ $percepteur->date_recettes }}</td>
                                <td class="text-center" >{{ $percepteur->heure_debut }}</td>

                                <td class="text-center" >{{ $percepteur->heure_fin }}</td>

                                <td >{{ date("H:i", $elapsed) }} {{ $elapsed }}</td>
                                </tr>
                          {{--       @if($percepteur->id == $dernier->id)

                                @php

                                ///$total_time = array_sum($elapsed);
                                @endphp
                                <tr class="bg-light">

                                    <td colspan="" class="text-right">SOMME TOTAL</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ $arrSomme }}</td>

                                </tr>
                                    @endif --}}
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
