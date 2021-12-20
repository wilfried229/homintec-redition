


    @extends('template-redition')

    @section('css')

    @endsection


    @section('header')
    <div class="block-header">
        <h2>
           Surcharges
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
                        Surcharges
                    </h2>

                </div>
                <div class="body">
                    <form action="{{route('surcharge.get-site')}}" method="get" class="form">

                        @csrf

                            <div class="row">

                                <div class="col-lg-12">
                                    <label for="">Sites</label>

                                    <select name="site_id" id="site_id" class="form-control"  >
                                    <option disabled selected> Selectionnez un Site</option>
                                    @foreach($sites as $s)
                                        <option value="{{$s->id}}"> {{$s->nom}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-lg-12">
                                    <label for=""> Choisissez le mois</label>
                                    <input type="month" name="date" id="" class="form-control"  style="height: 50px">
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
