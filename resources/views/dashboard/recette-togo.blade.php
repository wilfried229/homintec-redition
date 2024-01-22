@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
        Recettes  2
        <small>({{$site}}) <a href="https://datatables.net/" target="_blank"> </a></small>
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
                                <th>voie</th>
                                <th>sens</th>
                                <th>Caissier</th>
                                <th>Prix</th>
                                <th>categorie</th>
                                <th>essieu</th>
                             
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Site</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>voie</th>
                                <th>sens</th>
                                <th>Caissier</th>
                                <th>Prix</th>
                                <th>categorie</th>
                                <th>essieu</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($recetteTogo as $r)
                                <tr>
                                    <td>{{$r->site}}</td>
                                    <td>{{$r->date}}</td>
                                    <td>{{$r->heure}}</td>
                                    <td>{{$r->voie}}</td>
                                    <td>{{$r->Caissier}}</td>
                                    <td>{{$r->prix}}</td>
                                    <td>{{$r->categorie}}</td>
                                    <td>{{$r->essier}}</td>
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

