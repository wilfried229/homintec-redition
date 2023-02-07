@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Sites
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
                    Sites
                </h2>
                <br>
                <a href="{{route('site.create')}}" class="btn btn-info ">Ajouter</a>

            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                            <th align="center" width="10%">Options</th>
                            <th>Nom</th>
                             </tr>
                          </thead>
                          <tbody>


                            @foreach ($categorieDysfonctionnemts as $categorie )


                            <tr>

                                <td>


                                    <a href="{{ route('categorie-dysfonctionnnemt.edit',['categorieDysfonctionnemts'=>$categorie]) }}" class="btn btn-info" title="Modifier">
                                        <i class="fa fa-edit">Modifier</i>
                                    </a>
                                </td>
                                <td>{{$categorie->libelle}}</td>
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
