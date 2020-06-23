@extends('template')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

@endsection


@section('header')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Recettes ({{$site}})</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> </a>
  </div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Listes des recettes</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Site</th>
                    <th>cabine</th>
                    <th>Percepteur</th>
                    <th>Date</th>
                    <th>type</th>
                    <th>ptrac</th>
                    <th>cmaes</th>
                    <th>es</th>
                    <th>ptt</th>
                    <th>over</th>
                    <th>caisse</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Site</th>
                    <th>cabine</th>
                    <th>Percepteur</th>
                    <th>Date</th>
                    <th>type</th>
                    <th>ptrac</th>
                    <th>cmaes</th>
                    <th>es</th>
                    <th>ptt</th>
                    <th>over</th>
                    <th>caisse</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach ($reditions2 as $redition)
                <tr>
                <td>{{$redition->site}}</td>
                <td>{{$redition->cabine}}</td>
                <td>{{$redition->percepteur}}</td>
                <td>{{$redition->date}}</td>
                <td>{{$redition->type}}</td>
                <td>{{$redition->ptrac}}</td>
                <td>{{$redition->cmaes}}</td>
                <td>{{$redition->es}}</td>
                <th>{{$redition->ptt}}</th>
                <th>{{$redition->over}}</th>

                <td>{{$redition->caisse}}</td>

                </tr>

                @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>


</div>
@endsection


@section('js')
<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Surcharges /Choisissez un site</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                        <!-- Widgets -->
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('sucharge.list.sites','EKPE')}}">

                                <div class="info-box bg-pink hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">playlist_add_check</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">EKPE</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('sucharge.list.sites','AHOZON')}}">
                                <div class="info-box bg-cyan hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">help</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">AHOZON</div>
                                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>

                            </a>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('sucharge.list.sites','GRAND-POPO')}}">
                                <div class="info-box bg-light-green hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">forum</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">GRAND POPO</div>
                                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('sucharge.list.sites','KPEDOKPO')}}"  class=" ">
                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">person_add</i>
                                </div>
                                <div class="content">
                                    <div class="text">KPEDOKPO</div>
                                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>

                            </a>

                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('sucharge.list.sites','DIHO')}}"  class=" ">

                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">playlist_add_check</i>
                                </div>
                                <div class="content">
                                    <div class="text">DIHO</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('sucharge.list.sites','SIRAROU')}}"  class=" ">

                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">help</i>
                                </div>
                                <div class="content">
                                    <div class="text">SIRAROU</div>
                                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('sucharge.list.sites','KPREKETE')}}"  class="">

                                    <div class="info-box bg-light-green hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">forum</i>
                                        </div>
                                        <div class="content">
                                            <div class="text">KPREKETE</div>
                                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                            </a>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('sucharge.list.sites','LIBOSSOU')}}"  class="">

                                <div class="info-box bg-orange hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">person_add</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">LIBOSSOU</div>
                                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!--- reddition --->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Recettes /Choisissez un site</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                      <!-- Widgets -->
             <div class="row ">
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('redition.list.sites','EKPE')}}">

                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">playlist_add_check</i>
                            </div>
                            <div class="content">
                                <div class="text">EKPE</div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('redition.list.sites','AHOZON')}}">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="content">
                                <div class="text">AHOZON</div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>

                    </a>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('redition.list.sites','GRAND-POPO')}}">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">GRAND POPO</div>
                                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="{{route('redition.list.sites','KPEDOKPO')}}"  class=" ">
                        <div class="info-box bg-orange hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">KPEDOKPO</div>
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.list.sites','DIHO')}}"  class=" ">

                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">playlist_add_check</i>
                            </div>
                            <div class="content">
                                <div class="text">DIHO</div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.list.sites','SIRAROU')}}"  class=" ">

                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="content">
                                <div class="text">SIRAROU</div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.list.sites','KPREKETE')}}"  class=" ">

                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">forum</i>
                                </div>
                                <div class="content">
                                    <div class="text">KPREKETE</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.list.sites','LIBOSSOU')}}"  class="">

                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons">person_add</i>
                                </div>
                                <div class="content">
                                    <div class="text">LIBOSSOU</div>
                                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>

                        </a>
                    </div>
                </div>
    <!-- #END# Widgets -->
        </div>
    </div>
</div>


<!--- fin modal redditon --->
@endsection

