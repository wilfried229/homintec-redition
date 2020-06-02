@extends('template')


@section('content')

<section class="content">
   <div class="container-fluid">
       <div class="block-header">
           <h2>Surcharges</h2>
       </div>

       <!-- Widgets -->
       <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                  Listes des Surcharges ({{$site}})
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
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


@endsection

