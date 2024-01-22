@extends('template-dashboard')

@section('header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surcharges ({{$site}})</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> </a>
  </div>
@endsection
@section('content')
<section class="content">
   <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">List des Surchages</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>

                    <tr>
                        <th>Site</th>
                        <th>Voie</th>
                        <th>Percepteur</th>
                        <th>immatriculation</th>
                        <th>poid_rouland</th>
                        <th>surcharge</th>
                        <th>montant_surcharge</th>
                        <th>date_recette</th>
                        <th>heure_recette</th>
                        <th>essieu</th>
                        <th>poids_roulant</th>
                        <th>poid_autorise</th>
                        <th>excedent</th>
                        <th>montant_apayer</th>
                        <th>Somme gate</th>
                        <th>montant_payer</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <tr>
                            <th>Site</th>
                            <th>Voie</th>
                            <th>Percepteur</th>
                            <th>immatriculation</th>
                            <th>poid_rouland</th>
                            <th>surcharge</th>
                            <th>montant_surcharge</th>
                            <th>date_recette</th>
                            <th>heure_recette</th>
                            <th>essieu</th>
                            <th>poids_roulant</th>
                            <th>poid_autorise</th>
                            <th>excedent</th>
                            <th>montant_apayer</th>
                            <th>Somme gate</th>
                            <th>montant_payer</th>
                    </tr>
                </tfoot>
                <tbody>

                    @foreach ($surcharges as $s)
                    <tr>
                    <td>{{$s->site}}</td>
                    <td>{{$s->voie}}</td>
                    <td>{{$s->percepteur}}</td>
                    <td>{{$s->immatriculation}}</td>
                    <td>{{$s->poid_rouland}}</td>
                    <td>{{$s->surcharge}}</td>
                    <td>{{$s->date_recette}}</td>
                    <td>{{$s->heure_recette}}</td>
                    <td>{{$s->essieu}}</td>
                    <td>{{$s->poids_roulant}}</td>
                    <td>{{$s->poid_autorise}}</td>
                    <td>{{$s->excedent}}</td>
                    <td>{{$s->montant_apayer}}</td>
                    <td>{{$s->Somme_gate}}</td>
                    <td>{{$s->montant_payer}}</td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>

        </div>

      
      </div>

    </div>

    </div>
       <!-- #END# CPU Usage -->

   </div>
</section>
@endsection


@section('js')

<script src="{{asset('Admin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('Admin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('Admin2/js/demo/datatables-demo.js')}}"></script>
@endsection

