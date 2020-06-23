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
                                <th>cabine</th>
                                <th>Percepteur</th>
                                <th>Date</th>
                                <th>type</th>
                                <th>ptrac</th>
                                <th>cmaes</th>
                                <th>es</th>
                                <th>ptt</th>
                                <th>over</th>
                                <th>caisse</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Site</th>
                                <th>cabine</th>
                                <th>Percepteur</th>
                                <th>Date</th>
                                <th>type</th>
                                <th>ptrac</th>
                                <th>cmaes</th>
                                <th>es</th>
                                <th>ptt</th>
                                <th>over</th>
                                <th>caisse</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($reditions2 as $redition)
                            <tr>
                            <td>{{$redition->site}}</td>
                            <td>{{$redition->cabine}}</td>
                            <td>{{$redition->percepteur}}</td>
                            <td>{{$redition->date}}</td>
                            <td>{{$redition->type}}</td>
                            <td>{{$redition->ptrac}}</td>
                            <td>{{$redition->cmaes}}</td>
                            <td>{{$redition->es}}</td>
                            <th>{{$redition->ptt}}</th>
                            <th>{{$redition->over}}</th>

                            <td>{{$redition->caisse}}</td>

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

