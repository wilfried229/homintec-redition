@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Ajouter un intilisateur
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
                   Utilisateurs

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
                                    {{ Session::get('success') ? Session::get('success') : Session::get('error') }}
                                  </div>


                                @endif

                                <form action="{{route('users.store')}}" method="post" class="form" >
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-12 col-md-4">
                                            <label for="">Nom</label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for=""> Email</label>

                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                     </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-4">
                                            <label for="">Role</label>

                                            <select name="role" id="role" class="form-control">
                                                <option value="ADMIN">ADMIN</option>
                                                <option value="SIRB">SIRB</option>
                                                <option value="HOMINTEC">HOMINTEC</option>
                                                <option value="SUPERVISEUR">SUPERVISEUR</option>
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

                                        <div class="col-md-12">
                                            <label for="">Mot de passe</label>
                                            <input type="password" name="password" id="password" class="form-control">
                                        </div>


                                        <div class="col-md-12">
                                            <label for="">Confirmer le mot de passe</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                        </div>
                                    </div>
                                    <br>



                                    <div class="row">

                                        <div class="col-md-12">
                                            <input type="submit" value="Ajouter" class="btn btn-success">

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
$("#role").change(function(value){

console.log('okkkk');
if (this.value == "SUPERVISEUR") {
    $('#site').show();
} else {
    $('#site').hide();
}

})

</script>

@endsection

