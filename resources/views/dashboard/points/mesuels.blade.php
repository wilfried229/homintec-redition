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
                    Points Mensuel /
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
                                <th>DATE</th>
                                <th>SOMME MONTANT COUPONS</th>
                            </tr>
                            </thead>

                            <tbody>

                                @php
                                $sommeTotales = 0;

                                @endphp
                                @foreach ($mensuels as $key => $mensuel)

                                @php
                                    $sommeTotales+=$mensuel['sommeMontantCoupons']
                                @endphp
                                <tr>
                                 <td class="text-center" >{{ $mensuel['date_recettes'] }}</td>
                                <td class="text-center" >{{ number_format((float)$mensuel['sommeMontantCoupons'] , 0, ' ', ' ') }}</td>
                                </tr>

                                @endforeach

                                <tr>
                                    <th class="text-center" >TOTAL</th>
                                   <th class="text-center" >{{ number_format((float)$sommeTotales , 0, ' ', ' ') }}</th>
                             </tr>

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
