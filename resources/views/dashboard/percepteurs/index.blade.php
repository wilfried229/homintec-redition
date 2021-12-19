@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Percepteurs
        <small><a href="" target="_blank"> </a></small>
    </h2>
</div>
@endsection


@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Percepteurs
                </h2>
                <br>
                <a href="{{route('percepteur.create')}}" class="btn btn-info ">Ajouter</a>

            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                            <th align="center" width="10%">Options</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                             </tr>
                          </thead>
                          <tbody>

                            @foreach ($percepteurs as $percepteur )


                            <tr>

                                <td>

                                    <a href="" class="btn btn-info"> <i class="fa fa-edit">Modifier</i></a>
                                </td>
                                <td>{{$percepteur->nom}}</td>
                                <td>{{$percepteur->prenom}}</td>

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
