@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Utilisateur
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
                    Cash-Flows
                </h2>
                <br>
                <a href="{{route('users.create')}}" class="btn btn-info ">Ajouter</a>

            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                            <th align="center" width="10%">Options</th>
                            <th>Nom Utilisateur</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Date de création</th>

                             </tr>
                          </thead>
                          <tbody>

                            @foreach ($users as $user)

                            <tr>
                                <td>
                                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-info">Modifier </a>


                                    <a  onclick="event.preventDefault(); document.getElementById('retirer-user-form-{{$user->id}}').submit(); return false;"   class="btn btn-danger">Retirer </a>


                                    <form id="retirer-user-form-{{$user->id}}" action="{{route('users.destroy',$user->id)}}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                    </form>
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <th>{{$user->role}}</th>
                                <th>{{$user->created_at}}</th>

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
