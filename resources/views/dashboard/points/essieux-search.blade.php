


    @extends('template-redition')

    @section('css')

    @endsection


    @section('header')
    <div class="block-header">
        <h2>
           Recette
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
                       Recette
                    </h2>

                </div>
                <div class="body">
                    <form action="{{route('point-essieux.index')}}" method="get" class="form">

                        @csrf

                            <div class="row">


                            @if (in_array(Auth::user()->role,["ADMIN",'SIRB']) )

                                <div class="col-lg-12">
                                    <label for="">Sites</label>

                                    <select name="site_id" id="site_id" class="form-control"  >
                                    <option disabled selected> Selectionnez un Site</option>
                                    @foreach($sites as $s)
                                        <option value="{{$s->id}}"> {{$s->nom}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                @endif


                                <div class="col-lg-6">
                                    <label for=""> Date de début</label>
                                    <input type="date" name="date_debut"  class="form-control"  style="height: 50px">
                                </div>
                                <div class="col-lg-6">
                                    <label for=""> Date de fin</label>
                                    <input type="date" name="date_fin"  class="form-control"  style="height: 50px">
                                </div>
                                <div class="col-lg-12">
                                    <br>
                                    <input type="submit" value="Validez" lang="fr" class="btn btn-block btn-info">
                                </div>

                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    @endsection


    @section('js')


    @endsection

