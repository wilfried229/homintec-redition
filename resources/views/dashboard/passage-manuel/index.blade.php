@extends('layouts.export')

@section('css')

@endsection

@section('title')
POINT DES PASSAGES EN MODE MANUEL

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
                    POINT DES PASSAGES EN MODE MANUEL / {{$site->nom}}
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
                                    <h3 style="text-align: center"> FICHE DE POINT DES PASSAGES EN MODE MANUEL</h3>
                                </th>


                            </tr>
                            <tr>
                                <th></th>
                                <th class="text-uppercase">Date</th>
                                <th class="text-uppercase">Voie</th>
                                <th class="text-uppercase">Vacation</th>
                                <th class="text-uppercase">Percepteur</th>
                                <th class="text-uppercase">Point trafic informatisé avant démarrage du mode manuel </th>
                                <th class="text-uppercase">Solde recette informatisée avant démarrage du mode manuel</th>
                                <th class="text-uppercase">Heure de DEBUT</th>
                                <th class="text-uppercase">Heure de FIN</th>
                                <th class="text-uppercase">Trafic compté manuellement</th>
                                <th class="text-uppercase">Equivalent recette en FCFA  </th>
                                <th class="text-uppercase">Trafic Informatisé </th>
                                <th class="text-uppercase">Recette Informatisée </th>
                                <th class="text-uppercase">Trafic (Informatisé + manuel)</th>
                                <th class="text-uppercase">Recette (Informatisé + manuel)</th>
                                <th class="text-uppercase">OBSERVATIONS</th>
                                <th class="text-uppercase">ANNEXES</th>
                                <th class="text-uppercase">Options</th>

                            </tr>
                        </thead>


                       <tbody>

                        @foreach ($passageManuels  as  $item)

                        <tr>
                            <td >{{ $item->date }}</td>
                            <td >{{ $item->voie()->first()->nom }}</td>
                            <td >{{ $item->vacation()->first()->nom }}</td>
                            <td >{{ $item->percepteur()->first()->nom }}</td>
                            <td >{{ $item->trafic_mode_avant_manuel }}</td>
                            <td >{{ $item->recette_mode_avant_manuel }} </td>
                            <td >{{ $item->heure_fin }}</td>
                            <td >{{ $item->heure_debut }}</td>
                            <td >{{ $item->trafic_compte_nanuel }}</td>
                            <td >{{ $item->equip_recette }}</td>
                            <td >{{ $item->trafic_mode_apres_manuel}}</td>
                            <td >{{ $item->recette_mode_apres_manuel}}</td>

                            <td >{{($item->trafic_mode_avant_manuel) +($item->trafic_compte_nanuel+$item->trafic_mode_apres_manuel)}}</td>
                            <td >{{( $item->recette_mode_avant_manuel)+($item->equip_recette +$item->recette_mode_apres_manuel)}}</td>
                            <td >{{ $item->observation }}</td>
                            <td >{{ $item->annexes }}</td>
                            <td >

                                <a href="{{ route('passage-manuel.edit',['dysfonctionnnemt'=>$item->id]) }}" class="" title="Modifier">

                                    <i class="fa fa-edit"></i>
                                </a>
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
