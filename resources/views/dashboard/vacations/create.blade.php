@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Ajouter une vacation
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
                   site

                   <a href="{{route('vacation.index')}}" style="float: right;" class="btn btn-info">Retour</a>

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

                                <form action="{{route('vacation.store')}}" method="post" class="form" >
                                    @csrf


                                    <div class="row">


                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Type</label>
                                            <input type="text" name="type" id="type" class="form-control">

                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <label for="">Site</label>
                                            <select name="site_id" id="site_id" class="form-control">
                                                @foreach ($sites as $site )
                                                <option value="{{$site->id}}">{{$site->nom}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                     </div>





                                        <div class="row">

                                        <div class="col-md-12">
                                            <input type="submit" value="Enregistrer" class="btn btn-success">

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
$("#is_surchages").change(function(value){

    if (this.checked) {
        $('#surcharge').show();
    } else {
        $('#surcharge').hide();
    }

})

</script>

@endsection
