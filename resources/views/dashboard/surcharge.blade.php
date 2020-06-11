@extends('template-dashboard')

@section('header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surcharges ({{$site}})</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> </a>
  </div>
@endsection


@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listes des surcharges</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Site</th>
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
                    <th>caisse</th>
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
@endsection


@section('js')

@endsection

