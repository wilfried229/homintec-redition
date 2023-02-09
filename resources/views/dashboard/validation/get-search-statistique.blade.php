@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
        Statistiques vacation
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
                    Statistiques vacation
                </h2>



                 <a  onclick="document.getElementById('form_telecharger_facture').submit()"  class="btn btn-info">

                    <i title="Imprimer" style="cursor: pointer" class="fa fa-download text-secondary"></i>
                    Imprimer
                 </a>
                <form hidden target="_blank" action="{{route("statistique.print",['date_debut'=>$dateDebut,'date_fin'=>$dateFin,'cabines'=>$cabine,'percepteur'=>$percepteurs])}}" method="get" id="form_telecharger_facture">
                    @csrf
                </form>
            </div>
            <div class="body">

                <div class="row">
                    <div class="col-lg-4">
                        <label for="">Percepteur : {{ $percepteurs }}</label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Cabine {{ $cabine  }}</label>
                    </div>
                    <div class="col-lg-4">
                        <label for="">Date de Debut : {{ $dateDebut }}</label>

                    </div>
                    <div class="col-lg-4">
                        <label for="">Date de fin : {{ $dateFin }}</label>
                    </div>
                </div>


                <div class="row">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <th colspan="">Nombre de vehicules par categorie</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $c )
                                <tr>
                                    <td colspan="">

                                        @if ($c =="TRYCICLE")
                                        {{ $c }} : <label for=""> {{ $dataSta->where('ptrac','=',$c)->count()}}</label>
                                        @endif
                                        @if ($c =="VEHICULE LEGER")
                                        {{ $c }} : <label for=""> {{ $dataSta->where('ptrac','=',$c)->count()}}</label>

                                        @endif

                                        @if ($c =="POIDS LOURD 2")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',2)->count()}}</label>
                                        @endif
                                        @if ($c =="POIDS LOURD 3")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',3)->count()}}</label>
                                        @endif
                                        @if ($c =="POIDS LOURD 4")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',4)->count()}}</label>
                                        @endif

                                        @if ($c =="POIDS LOURD 5")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',5)->count()}}</label>
                                        @endif

                                        @if ($c =="POIDS LOURD 6")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',6)->count()}}</label>
                                        @endif

                                        @if ($c =="POIDS LOURD 7")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',7)->count()}}</label>
                                        @endif

                                        @if ($c =="POIDS LOURD 8")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',8)->count()}}</label>
                                        @endif
                                        @if ($c =="POIDS LOURD 9")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',9)->count()}}</label>
                                        @endif
                                        @if ($c =="POIDS LOURD 10")
                                        {{ $c }} : <label for=""> {{
                                            $dataSta->where('ptrac','=',$c)->where('es',10)->count()}}</label>
                                        @endif
                                    </td>


                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>

                {{--

                    <div class="row">


                    <div class="col-lg-3">
                        <label for=""> TRYCICLE : {{ $dataStatistiques['TRYCICLE'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> VEHICULE LEGER : {{ $dataStatistiques['VEHICULE LEGER'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> AUTOBUS : {{ $dataStatistiques['AUTOBUS'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 2 : {{ $dataStatistiques['POIDS LOURD 2'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 3 : {{ $dataStatistiques['POIDS LOURD 3'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 4 : {{ $dataStatistiques['POIDS LOURD 4'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 5 : {{ $dataStatistiques['POIDS LOURD 5'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 6 : {{ $dataStatistiques['POIDS LOURD 6'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 7 : {{ $dataStatistiques['POIDS LOURD 7'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 8 : {{ $dataStatistiques['POIDS LOURD 8'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 9 : {{ $dataStatistiques['POIDS LOURD 9'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 10 : {{ $dataStatistiques['POIDS LOURD 10'] }}</label>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
@endsection


@section('js')


@endsection
