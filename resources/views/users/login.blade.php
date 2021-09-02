<div class="row">
    <!-- /.col -->

    <div class="col-md-12">
        <div class="card">
            @if (Session::has('success'))

            <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    {{ Session::get('success')}}
                  </div>
                @endif
            <div class="card-header">
                <h5 class="form-header">Modification de  {{$user->name}}</h5>

            </div>
            <div class="card-body">
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
                                <option value="TECHNICIEN" @if ($user->role == "TECHNICIEN")
                                    selected
                                @endif>TECHNICIEN</option>
                                <option value="ADMIN"@if ($user->role == "ADMIN")
                                    selected
                                @endif

                                >ADMINISTRATEUR</option>

                                <option value="CM" @if ($user->role == "CM")
                                    selected
                                @endif
                                >CM</option>



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
        </div>
  </div>
  <!-- /.row -->
