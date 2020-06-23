@extends('template-redition')




@section('header')
<div class="block-header">
    <h2>
        Recettes
        <small>({{$site}}) <a href="#" target="_blank"> </a></small>
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
        </div>
    </div>
</div>
@endsection


@section('js')
 
@endsection

