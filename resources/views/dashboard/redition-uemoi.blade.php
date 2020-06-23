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
</div>
@endsection


@section('js')

@endsection

