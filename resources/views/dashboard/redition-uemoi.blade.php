@extends('template-redition')

@section('header')
<div class="block-header">
    <h2>
        Recettes UEMOI
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
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Immatricule</th>
                                <th>Produit</th>
                                <th>provenance</th>
                                <th>client</th>
                                <th>classe</th>
                                <th>ess1</th>
                                <th>ess2</th>
                                <th>ess3</th>

                                <th>ess4</th>
                                <th>ess5</th>
                                <th>ess6</th>
                                <th>ess7</th>
                                <th>ess8</th>
                                <th>ess9</th>

                                <th>Gpe1</th>
                                <th>Gpe2</th>
                                <th>Gpe3</th>
                                <th>Gpe4</th>
                                <th>surchGpe1</th>
                                <th>surchGpe2</th>
                                <th>surchGpe3</th>
                                <th>surchGpe4</th>
                                <th>Poids Total</th>
                                <th>Surch total</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Site</th>

                                <th>Date</th>
                                <th>Heure</th>
                                <th>Immatricule</th>
                                <th>Produit</th>
                                <th>provenance</th>
                                <th>client</th>
                                <th>classe</th>
                                <th>ess1</th>
                                <th>ess2</th>
                                <th>ess3</th>

                                <th>ess4</th>
                                <th>ess5</th>
                                <th>ess6</th>
                                <th>ess7</th>
                                <th>ess8</th>
                                <th>ess9</th>

                                <th>Gpe1</th>
                                <th>Gpe2</th>
                                <th>Gpe3</th>
                                <th>Gpe4</th>
                                <th>Surcharge Gpe1</th>
                                <th>Surcharge Gpe2</th>
                                <th>Surcharge Gpe3</th>
                                <th>Surcharge Gpe4</th>
                                <th>Poids Total</th>
                                <th>Surcharge total</th>

                            </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($reditionsUemoi as $redition)
                                <tr>
                                <td>{{$redition->site}}</td>
                                <td>{{$redition->date}}</td>
                                <td>{{$redition->heure}}</td>


                                <td>{{$redition->immatricule}}</td>
                                <td>{{$redition->produit}}</td>
                                <td>{{$redition->provenance}}</td>
                                <td>{{$redition->client}}</td>
                                <td>{{$redition->classe}}</td>
                                <td>{{$redition->ess1}}</td>
                                <td>{{$redition->ess2}}</td>
                                <td>{{$redition->ess3}}</td>
                                <td>{{$redition->ess4}}</td>
                                <td>{{$redition->ess5}}</td>
                                <td>{{$redition->ess6}}</td>
                                <td>{{$redition->ess7}}</td>
                                <td>{{$redition->ess8}}</td>
                                <td>{{$redition->ess9}}</td>

                                <td>{{$redition->Gpe1}}</td>
                                <td>{{$redition->Gpe2}}</td>
                                <td>{{$redition->Gpe3}}</td>
                                <td>{{$redition->Gpe4}}</td>

                                <td>{{$redition->surchGpe1}}</td>
                                <td>{{$redition->surchGpe2}}</td>
                                <td>{{$redition->surchGpe3}}</td>
                                <td>{{$redition->surchGpe4}}</td>

                                <td>{{$redition->PdsTotal}}</td>
                                <td>{{$redition->surchtotal}}</td>

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

