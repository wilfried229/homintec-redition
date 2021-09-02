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


        <!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-4 col-sm-4 col-md-4"></div>
        <div class="col-4 col-sm-4 col-md-4"></div>

        <div class="col-4 col-sm-4 col-md-4">
            <a href="{{ route('users.index') }}" class="btn btn-info">Retour ves la liste</a>
        </div>

    </div>
  <div class="row">
    <!-- /.col -->

    <div class="col-md-12">
        <div class="card">
            @if (Session::has('success'))

            <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    {{ Session::get('add')}}
                  </div>
                @endif
            <div class="card-header">
                <h5 class="form-header">Ajouter un Utilisateur</h5>

            </div>
            <div class="card-body">
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
                                <option value="TECHNICIEN">TECHNICIEN</option>
                                <option value="CM">CM</option>

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
        </div>
  </div>
  <!-- /.row -->


    </div>

  <!--upfj-->
</section>
<!-- /.content -->

@endsection


@section('custom-js')
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>

<script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
@endsection
