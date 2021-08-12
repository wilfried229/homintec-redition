@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
        Recettes  2
        <small>({{$site}}) <a href="https://datatables.net/" target="_blank"> </a></small>
    </h2>
</div>
@endsection
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Recettes ({{$site}})
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Site</th>
                                <th>Date</th>

                                <th>cabine</th>
                                <th>Percepteur</th>
                                <th>type</th>
                                <th>ptrac</th>
                                <th>destination</th>
                                <th>es</th>
                                <th>ptt</th>
                                <th>conducteur</th>
                                <th>provenance</th>
                                <th>Plaque</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Site</th>
                                <th>Date</th>

                                <th>cabine</th>
                                <th>Percepteur</th>
                                <th>type</th>
                                <th>ptrac</th>
                                <th>destination</th>
                                <th>es</th>
                                <th>ptt</th>
                                <th>conducteur</th>
                                <th>provenance</th>
                                <th>Plaque</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($hydros as $hydro)
                                <tr>
                                    <td>{{$hydo->site}}</td>
                                    <td>{{$hydo->date}}</td>

                                    <td>{{$hydo->cabine}}</td>
                                    <td>{{$hydo->percepteur}}</td>
                                    <td>{{$hydo->type}}</td>
                                    <td>{{$hydo->ptrac}}</td>
                                    <td>{{$hydo->destination}}</td>
                                    <td>{{$hydo->es}}</td>
                                    <th>{{$hydo->ptt}}</th>
                                    <th>{{$hydo->conducteur}}</th>


                                    <td>{{$hydo->provenance}}</td>
                                    <td>{{$hydo->plaque}}</td>


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

