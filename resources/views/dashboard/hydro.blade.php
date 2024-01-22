@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
        Hydrocarbure
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
                    Hydrocarbure
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
                                    <td>{{$hydro->site}}</td>
                                    <td>{{$hydro->date}}</td>

                                    <td>{{$hydro->cabine}}</td>
                                    <td>{{$hydro->percepteur}}</td>
                                    <td>{{$hydro->type}}</td>
                                    <td>{{$hydro->ptrac}}</td>
                                    <td>{{$hydro->destination}}</td>
                                    <td>{{$hydro->es}}</td>
                                    <th>{{$hydro->ptt}}</th>
                                    <th>{{$hydro->conducteur}}</th>


                                    <td>{{$hydro->provenance}}</td>
                                    <td>{{$hydro->plaque}}</td>


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

