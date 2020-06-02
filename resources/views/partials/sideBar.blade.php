<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">

            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>

            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="index.html">
                        <i class="material-icons">home</i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg">
                        <i class="material-icons">text_fields</i>
                        <span>Recettes</span>


                    </a>

                </li>
                <li>
                    <a href="#"  data-toggle="modal" data-target=".bd-example-modal-lg2">
                        <i class="material-icons">text_fields</i>
                        <span>Surchages</span>


                    </a>

                </li>
                <li>
                    <a href="pages/helper-classes.html">
                        <i class="material-icons">layers</i>
                        <span>Pénalité</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2020 - 2021 <a href="javascript:void(0);">Homintec  Engenerie</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
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
            </div>
            </a>
        </div>
        <!-- #END# Widgets -->
                </div>
          </div>
        </div>
      </div>
    <!-- #END# Right Sidebar -->

    <!---modal surcharge --->
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
                <a href="{{route('sucharge.list.sites','KPREKETE')}}"  class=" ">

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
            </div>
            </a>
        </div>
        <!-- #END# Widgets -->
                </div>
          </div>
        </div>
      </div>
    <!-- #END# Right Sidebar -->
        <!-- #END# Widgets -->
                </div>
          </div>
        </div>
      </div>
</section>


<!--- Modal surchargesè-->



<!----- fin modal surcharge --->

