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
                   Modification

                   <a href="{{route('users.index')}}" style="float: right;" class="btn btn-info">Retour</a>
                </h2>

            </div>
            <div class="body">
                <div class="row">
                    <!-- /.col -->

                    <div class="col-md-12">

                        @if (Session::has('success'))

                            <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    {{ Session::get('success')}}
                                  </div>
                                @endif
                                <h5 class="form-header">Modification de  {{$user->name}}</h5>
                        <form action="{{route('users.update',$user->id)}}" method="post" class="form">
                            @csrf

                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-12 col-md-4">
                                    <label for="">Nom</label>
                                <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <label for=""> Email</label>

                                <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control">
                                </div>
                             </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-4">
                                    <label for="">Role</label>

                                    <select name="role" id="role" class="form-control">
                                        <option value="SIRB" @if ($user->role == "SIRB")
                                            selected
                                        @endif>SIRB</option>
                                        <option value="ADMIN"@if ($user->role == "ADMIN")
                                            selected
                                        @endif
                                        >ADMINISTRATEUR</option>
                                        <option value="HOMINTEC" @if ($user->role=="HOMINTEC")
                                            selected
                                        @endif
                                        >HOMINTEC</option>
                                        <option value="SUPERVISEUR"  @if ($user->role=="SUPERVISEUR")
                                            selected
                                        @endif>SUPERVISEUR</option>

                                    </select>
                                </div>



                                <div hidden id="site" class="col-lg-12 col-md-4">
                                    <label for="">Site</label>

                                    <select name="site_id" id="site_id" class="form-control">
                                       @foreach ($sites as $site )
                                       <option value="{{$site->id}}">{{$site->nom}}</option>

                                       @endforeach

                                    </select>
                                </div>

                            </div>
                            <br>
                            <div class="row">

                                <div class="col-md-12">
                                    <input type="submit" value="Modification" class="btn btn-success">
                            </div>
                       </div>
                    </form>

                  </div>
                  <!-- /.row -->

            </div>
        </div>
    </div>
</div>
@endsection


@section('js')


<script>

var conceptName = $('#role :selected').text();
    if ( conceptName == "SUPERVISEUR") {
        $('#site').show();
    }
    $("#role").change(function(value){
        if (this.value == "SUPERVISEUR") {
            $('#site').show();
        } else {
            $('#site').hide();
        }
})
</script>

@endsection
