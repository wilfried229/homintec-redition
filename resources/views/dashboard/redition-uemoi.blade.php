@extends('template-dashboard')



@section('header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Recettes ({{$site}})</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> </a>
  </div>
@endsection
@section('content')

<section class="content">
   <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">List des Recettes</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">

<table class="table table-bordered table-striped table-hover dataTable js-exportable">
    <thead>
        <tr>
            <th>Site</th>
            <th>Voie</th>
            <th>Percepteur</th>
            <th>Temps services</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Superviseur</th>
            <th>Controleur</th>
            <th>Administateur</th>
            <th>nbre_vehicule</th>
            <th>manquant</th>

            <th>suplus</th>
            <th>nbre_violation</th>
            <th>nbre_exempte</th>



            <th>Déclaration billetaire</th>
            <th>Déclaration ticket manuel</th>
            <th>penalitée rejetter</th>
            <th>penalié validée local</th>
            <th>penalité validée extanté</th>
            <th>Somme déclarée caisse</th>
            <th>Réesultat_compte</th>
            <th>Somme déclarer caisse</th>
            <th>Résultat Compte</th>
            <th>Somme gate</th>
            <th>Passage gate</th>
            <th>remarque</th>
            <th>nbre_passage</th>
            <th>montant_coupant</th>
            <th>somme_totale_informatise</th>
             <th>somme_informatise_sans_gate_24</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Site</th>
            <th>Voie</th>
            <th>Percepteur</th>
            <th>Temps services</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Superviseur</th>
            <th>Controleur</th>
            <th>Administateur</th>
            <th>nbre_vehicule</th>
            <th>manquant</th>

            <th>suplus</th>
            <th>nbre_violation</th>
            <th>nbre_exempte</th>



            <th>Déclaration billetaire</th>
            <th>Déclaration ticket manuel</th>
            <th>penalite_rejetter</th>
            <th>penalite_valider_local</th>
            <th>penalite_valider_ext</th>
            <th>somme_declarer_caisse</th>
            <th>resultat_compte</th>
            <th>Somme déclarer caisse</th>
            <th>Résultat Compte</th>
            <th>Somme gate</th>
            <th>Passage gate</th>
            <th>remarque</th>
            <th>nbre_passage</th>
            <th>montant_coupant</th>
            <th>somme_totale_informatise</th>
             <th>somme_informatise_sans_gate_24</th>
        </tr>
    </tfoot>
    <tbody>

        @foreach ($reditions as $redition)
        <tr>
        <td>{{$redition->site}}</td>
        <td>{{$redition->voie}}</td>
        <td>{{$redition->percepteur}}</td>
        <td>{{$redition->temps_de_presence}}</td>
        <td>{{$redition->debut_de_vacationt}}</td>
        <td>{{$redition->fin_de_vacation}}</td>
        <td>{{$redition->superviseur}}</td>
        <td>{{$redition->controleur}}</td>
        <td>{{$redition->administrateur}}</td>
        <td>{{$redition->nbre_vehicule}}</td>
        <td>{{$redition->manquant}}</td>
        <td>{{$redition->suplus}}</td>
        <td>{{$redition->nbre_violation}}</td>
        <td>{{$redition->nbre_exempte}}</td>
        <td>{{$redition->declaration_billetaire}}</td>
        <td>{{$redition->declaration_ticket_manuel}}</td>
        <td>{{$redition->penalite_rejetter}}</td>
        <td>{{$redition->penalite_valider_local}}</td>
        <td>{{$redition->penalite_valider_ext}}</td>
        <td>{{$redition->somme_declarer_caisse}}</td>
        <td>{{$redition->resultat_compte}}</td>
        <td>{{$redition->somme_gate}}</td>
        <td>{{$redition->passage_gate_24}}</td>
        <td>{{$redition->remarque}}</td>
        <td>{{$redition->remarque}}</td>
        <td>{{$redition->nbre_passage}}</td>
        <td>{{$redition->montant_coupant}}</td>
        <td>{{$redition->somme_totale_informatise}}</td>
        <td>{{$redition->somme_informatise_sans_gate_24}}</td>





        </tr>

        @endforeach
    </tbody>
</table>
        </div>

        </div>

        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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


@endsection

