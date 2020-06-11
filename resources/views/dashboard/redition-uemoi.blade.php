@extends('template-dashboard')



@section('header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Recettes UEMOI ({{$site}})</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> </a>
  </div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listes des recettes UEMOI</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Site</th>
                    <th>Immatricule</th>
                    <th>Produit</th>
                    <th>provenance</th>
                    <th>destination</th>
                    <th>societe</th>
                    <th>classe</th>
                    <th>es1</th>
                    <th>es2</th>
                    <th>es3</th>

                    <th>es4</th>
                    <th>es5</th>
                    <th>es6</th>
                    <th>es7</th>
                    <th>es8</th>
                    <th>es9</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Date</th>
                    <th>Site</th>
                    <th>Immatricule</th>
                    <th>Produit</th>
                    <th>provenance</th>
                    <th>destination</th>
                    <th>societe</th>
                    <th>classe</th>
                    <th>es1</th>
                    <th>es2</th>
                    <th>es3</th>

                    <th>es4</th>
                    <th>es5</th>
                    <th>es6</th>
                    <th>es7</th>
                    <th>es8</th>
                    <th>es9</th>

                </tr>
                </tfoot>
                <tbody>
                    @foreach ($reditionsUemoi as $redition)
                    <tr>
                    <td>{{$redition->date}}</td>
                    <td>{{$redition->site}}</td>
                    <td>{{$redition->immatricule}}</td>
                    <td>{{$redition->produit}}</td>
                    <td>{{$redition->provenance}}</td>
                    <td>{{$redition->destination}}</td>
                    <td>{{$redition->societe}}</td>
                    <td>{{$redition->classe}}</td>
                    <td>{{$redition->es1}}</td>
                    <td>{{$redition->es2}}</td>
                    <td>{{$redition->es3}}</td>
                    <td>{{$redition->es4}}</td>
                    <td>{{$redition->es5}}</td>
                    <td>{{$redition->es6}}</td>
                    <td>{{$redition->es7}}</td>
                    <td>{{$redition->es8}}</td>
                    <td>{{$redition->es9}}</td>
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

@endsection

