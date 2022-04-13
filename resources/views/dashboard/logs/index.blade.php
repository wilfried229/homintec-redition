@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Percepteurs
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
                    Logs de vacations
                </h2>
                <br>

            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Percepteur</th>
                            <th>Site</th>
                            <th>Cabine</th>
                            <th>Ancien Percepteur</th>
                            <th>Statut</th>

                             </tr>
                          </thead>
                          <tbody>

                            @foreach ($logs as $log )

                            <tr>
                                <td>{{$log->date}}</td>
                                <td>{{$log->heure}}</td>
                                <td>{{$log->percepteur}}</td>
                                <td>{{$log->site}}</td>
                                <td>{{$log->cabine}}</td>
                                <td>{{$log->old_percepteur}}</td>
                                <td>{{$log->statut}}</td>
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
