<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar" >
        <!-- User Info -->
        <div class="user-info">

            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOMINTEC</div>

            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Menu</li>
                <li class="active">
                    <a href="index.html">
                        <i class="material-icons"> </i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg">
                        <i class="material-icons"> </i>
                        <span>Recettes</span>


                    </a>

                </li>

                <li>
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg5">
                        <i class="material-icons"> </i>
                        <span>Recettes 2</span>


                    </a>

                </li>

                <li>
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg3">
                        <i class="material-icons"> </i>
                        <span>Recettes UEMOI</span>


                    </a>

                </li>

                <li>
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg2">
                        <i class="material-icons"> </i>
                        <span>Surchages</span>


                    </a>

                </li>
                <li>
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg4">
                        <i class="material-icons"> </i>
                        <span>Surcharges UEMOI</span>


                    </a>

                </li>

                <li>
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg5">
                        <i class="material-icons"> </i>
                        <span>Hydrocarbure </span>


                    </a>

                </li>

                <li>
                   {{--  <a href="pages/er-classes.html">
                        <i class="material-icons"></i>
                        <span>Pénalité</span>
                    </a> --}}
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue"></i>
                        <span>Deconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->

        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->



</section>


<!--- Modal surchargesè-->
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
                                        <i class="material-icons"> </i>
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
                                        <i class="material-icons"></i>
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
                                        <i class="material-icons"> </i>
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
                                    <i class="material-icons"> </i>
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
                                    <i class="material-icons"> </i>
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
                                    <i class="material-icons"></i>
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
                                            <i class="material-icons"> </i>
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
                                        <i class="material-icons"> </i>
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
<!--- Modal FIN-->

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

                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.list.sites','EKPE')}}">

                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
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
                                    <i class="material-icons"></i>
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
                                    <i class="material-icons"> </i>
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
                                    <i class="material-icons"> </i>
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
                                <i class="material-icons"> </i>
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
                                <i class="material-icons"></i>
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
                                    <i class="material-icons"> </i>
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
                                    <i class="material-icons"> </i>
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

<!--- redition 2 --->

<!--- reddition --->
<div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recettes /Choisissez un site</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition2.list.sites','EKPE')}}">

                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">EKPE</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition2.list.sites','AHOZON')}}">
                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"></i>
                                </div>
                                <div class="content">
                                    <div class="text">AHOZON</div>
                                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>

                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition2.list.sites','GRAND-POPO')}}">
                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">GRAND POPO</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition2.list.sites','KPEDOKPO')}}"  class=" ">
                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
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
                        <a href="{{route('redition2.list.sites','DIHO')}}"  class=" ">

                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons"> </i>
                            </div>
                            <div class="content">
                                <div class="text">DIHO</div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition2.list.sites','SIRAROU')}}"  class=" ">

                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons"></i>
                            </div>
                            <div class="content">
                                <div class="text">SIRAROU</div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition2.list.sites','KPREKETE')}}"  class=" ">

                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">KPREKETE</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition2.list.sites','LIBOSSOU')}}"  class="">

                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
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

<!--- redition ---->

<!-- fin modal redditon-->

<!-- modam redition UEMOI-->
<!--- reddition --->
<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recettes UEMOI /Choisissez un site</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.uemoi.list.sites','EKPE')}}">

                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">EKPE</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.uemoi.list.sites','AHOZON')}}">
                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"></i>
                                </div>
                                <div class="content">
                                    <div class="text">AHOZON</div>
                                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>

                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.uemoi.list.sites','GRAND-POPO')}}">
                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">GRAND POPO</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.uemoi.list.sites','KPEDOKPO')}}"  class=" ">
                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
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
                        <a href="{{route('redition.uemoi.list.sites','DIHO')}}"  class=" ">

                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons"> </i>
                            </div>
                            <div class="content">
                                <div class="text">DIHO</div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.uemoi.list.sites','SIRAROU')}}"  class=" ">

                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons"></i>
                            </div>
                            <div class="content">
                                <div class="text">SIRAROU</div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.uemoi.list.sites','KPREKETE')}}"  class=" ">

                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">KPREKETE</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.uemoi.list.sites','LIBOSSOU')}}"  class="">

                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">LIBOSSOU</div>
                                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>

                        </a>
                    </div>



                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('redition.uemoi.list.sites','HOUEGBO')}}">

                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">HOUEGBO</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                </div>

                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--- modal fin redition-->

<!--- Modal surcharges uemoi-->
<div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Surcharges UEMEOI /Choisissez un site</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                        <!-- Widgets -->
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('suchargeVieUemio.list.sites','EKPE')}}">

                                <div class="info-box bg-pink hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons"> </i>
                                    </div>
                                    <div class="content">
                                        <div class="text">EKPE</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('suchargeVieUemio.list.sites','AHOZON')}}">
                                <div class="info-box bg-cyan hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons"></i>
                                    </div>
                                    <div class="content">
                                        <div class="text">AHOZON</div>
                                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>

                            </a>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('suchargeVieUemio.list.sites','GRAND-POPO')}}">
                                <div class="info-box bg-light-green hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons"> </i>
                                    </div>
                                    <div class="content">
                                        <div class="text">GRAND POPO</div>
                                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('suchargeVieUemio.list.sites','KPEDOKPO')}}"  class=" ">
                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
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
                            <a href="{{route('suchargeVieUemio.list.sites','DIHO')}}"  class=" ">

                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">DIHO</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('suchargeVieUemio.list.sites','SIRAROU')}}"  class=" ">

                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"></i>
                                </div>
                                <div class="content">
                                    <div class="text">SIRAROU</div>
                                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('suchargeVieUemio.list.sites','KPREKETE')}}"  class="">

                                    <div class="info-box bg-light-green hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons"> </i>
                                        </div>
                                        <div class="content">
                                            <div class="text">KPREKETE</div>
                                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                        </div>
                                    </div>
                            </a>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('suchargeVieUemio.list.sites','LIBOSSOU')}}"  class="">

                                <div class="info-box bg-orange hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons"> </i>
                                    </div>
                                    <div class="content">
                                        <div class="text">LIBOSSOU</div>
                                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('suchargeVieUemio.list.sites','HOUEGBO')}}">

                                <div class="info-box bg-pink hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons"> </i>
                                    </div>
                                    <div class="content">
                                        <div class="text">HOUEGBO</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<!--- Modal FIN-->


 <!--- Hydrocarbure --->
<div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Recettes Hydrocarbure /Choisissez un site</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row ">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('hydro.list.sites','EKPE')}}">

                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">EKPE</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                </div>

                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('hydro.list.sites','AHOZON')}}">
                            <div class="info-box bg-cyan hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"></i>
                                </div>
                                <div class="content">
                                    <div class="text">AHOZON</div>
                                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>

                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('hydro.list.sites','GRAND-POPO')}}">
                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">GRAND POPO</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('hydro.list.sites','KPEDOKPO')}}"  class=" ">
                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
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
                        <a href="{{route('hydro.list.sites','DIHO')}}"  class=" ">

                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons"> </i>
                            </div>
                            <div class="content">
                                <div class="text">DIHO</div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('hydro.list.sites','SIRAROU')}}"  class=" ">

                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons"></i>
                            </div>
                            <div class="content">
                                <div class="text">SIRAROU</div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('hydro.list.sites','KPREKETE')}}"  class=" ">

                            <div class="info-box bg-light-green hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">KPREKETE</div>
                                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('hydro.list.sites','LIBOSSOU')}}"  class="">

                            <div class="info-box bg-orange hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">LIBOSSOU</div>
                                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                                </div>
                            </div>

                        </a>
                    </div>



                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
                        <a href="{{route('hydro.list.sites','HOUEGBO')}}">

                            <div class="info-box bg-pink hover-expand-effect">
                                <div class="icon">
                                    <i class="material-icons"> </i>
                                </div>
                                <div class="content">
                                    <div class="text">HOUEGBO</div>
                                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                                </div>

                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!--- fin ---->
