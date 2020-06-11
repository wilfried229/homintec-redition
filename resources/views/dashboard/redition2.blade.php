@extends('template-dashboard')

@section('css')
@endsection


@section('header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Recettes ({{$site}})</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> </a>
  </div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listes des recettes</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
@endsection


@section('js')
  <!-- Page level plugins -->

@endsection

