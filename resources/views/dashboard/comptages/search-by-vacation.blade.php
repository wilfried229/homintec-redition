


    @extends('template-redition')

    @section('css')

    @endsection


    @section('header')
    <div class="block-header">
        <h2>
           Comptage
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
                       Comptage par vacation
                    </h2>

                </div>
                <div class="body">
                    <form action="{{route('search.comptage.vacation.action')}}" method="get" class="form">

                        @csrf


                            <div class="row">

                                <div class="col-lg-6">
                                    <label for="">Percepteur</label>
                                    <select name="percepteur" id="percepteur" data-msg="Veuillez choisir le percepteur" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" style="height: 50px;widht:50px" required>
                                        @foreach ($percepteurs as $item)
                                        <option value="{{$item->percepteur}}">{{ $item->percepteur }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for=""> Fin de vacation</label>
                                    <input type="datetime-local" name="date_fin"  class="form-control"  style="height: 50px">
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

