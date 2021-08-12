<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">  <sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Homintec reddition Peage</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="" target="_blank">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Accueil</span></a>
  </li>



  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Menu </span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">List Menu</h6>


        <a class="collapse-item" href=""></a>

      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Addons
  </div>

  <!-- Nav Item - Pages Collapse Menu -->


  <!-- Nav Item - Charts -->
   <!-- Nav Item - Tables -->
   <li class="nav-item">
    <a href="#" class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg">

      <i class="fas fa-fw fa-table"></i>
      <span>Recettes</span></a>
  </li>
  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a href="#" class="nav-link"  data-toggle="modal" data-target=".bd-example-modal-lg2">

      <i class="fas fa-fw fa-table"></i>
      <span>Surcharges </span></a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link"  data-toggle="modal" data-target=".bd-example-modal-lg5">

      <i class="fas fa-fw fa-table"></i>
      <span>Recette2</span></a>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link"  data-toggle="modal" data-target=".bd-example-modal-lg3">

      <i class="fas fa-fw fa-table"></i>
      <span>Recettes UEMOI</span></a>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link"  data-toggle="modal" data-target=".bd-example-modal-lg4">

      <i class="fas fa-fw fa-lock"></i>
      <span>Surcharges UEMOI</span></a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>

<!------uemoi --->

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
                <div class="row">

                    <div class="col-xl-3 col-md-6 mb-4">
                          <a href="{{route('redition.uemoi.list.sites','EKPE')}}">

                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SITE</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">EKPE</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>


                    <div class="col-xl-3 col-md-6 mb-4">
                     <a href="{{route('redition.uemoi.list.sites','AHOZON')}}">

                      <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Site</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">AHOZON</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{route('redition.uemoi.list.sites','GRAND-POPO')}}">

                      <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">site</div>
                              <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">GRAND-POPO</div>
                                </div>
                                <div class="col">

                                </div>
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                             <a href="{{route('redition.uemoi.list.sites','KPEDOKPO')}}"  class=" ">

                      <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SITE</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">KPEDOKPO</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                        </a>
                    </div>
                  </div>
    <!-- #END# Widgets -->


            <div class="row">

              <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{route('redition.uemoi.list.sites','SIRAROU')}}">

          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SITE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">SIRAROU</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
         <a href="{{route('redition.uemoi.list.sites','KPREKETE')}}">

          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Site</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">KPREKETE</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{route('redition.uemoi.list.sites','LIBOSSOU')}}">

          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">site</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">LIBOSSOU</div>
                    </div>
                    <div class="col">

                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
                 <a href="{{route('redition.uemoi.list.sites','HOUEGBO')}}"  class=" ">

          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SITE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">HOUEGBO</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
            </a>
        </div>
      </div>
            </div>
      </div>
    </div>
  </div>

<!----- fin uemoi ------>




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
                <div class="row">

                    <div class="col-xl-3 col-md-6 mb-4">
                          <a href="{{route('redition2.list.sites','EKPE')}}">

                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SITE</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">EKPE</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>


                    <div class="col-xl-3 col-md-6 mb-4">
                     <a href="{{route('redition2.list.sites','AHOZON')}}">

                      <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Site</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">AHOZON</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{route('redition2.list.sites','GRAND-POPO')}}">

                      <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">site</div>
                              <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">GRAND-POPO</div>
                                </div>
                                <div class="col">

                                </div>
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                             <a href="{{route('redition2.list.sites','KPEDOKPO')}}"  class=" ">

                      <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SITE</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">KPEDOKPO</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                        </a>
                    </div>
                  </div>
    <!-- #END# Widgets -->


            <div class="row">

              <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{route('redition2.list.sites','SIRAROU')}}">

          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SITE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">SIRAROU</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
         <a href="{{route('redition2.list.sites','KPREKETE')}}">

          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Site</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">KPREKETE</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{route('redition2.list.sites','LIBOSSOU')}}">

          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">site</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">LIBOSSOU</div>
                    </div>
                    <div class="col">

                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
                 <a href="{{route('redition2.list.sites','HOUEGBO')}}"  class=" ">

          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SITE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">HOUEGBO</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
            </a>
        </div>
      </div>
            </div>
      </div>
    </div>
  </div>
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
                <div class="row">

                    <div class="col-xl-3 col-md-6 mb-4">
                          <a href="{{route('redition.list.sites','EKPE')}}">

                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SITE</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">EKPE</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>


                    <div class="col-xl-3 col-md-6 mb-4">
                     <a href="{{route('redition.list.sites','AHOZON')}}">

                      <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Site</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">AHOZON</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{route('redition.list.sites','GRAND-POPO')}}">

                      <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">site</div>
                              <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">GRAND-POPO</div>
                                </div>
                                <div class="col">

                                </div>
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                             <a href="{{route('redition.list.sites','KPEDOKPO')}}"  class=" ">

                      <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SITE</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">KPEDOKPO</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                        </a>
                    </div>
                  </div>
    <!-- #END# Widgets -->


            <div class="row">

              <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{route('redition.list.sites','SIRAROU')}}">

          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SITE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">SIRAROU</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
         <a href="{{route('redition.list.sites','KPREKETE')}}">

          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Site</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">KPREKETE</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{route('redition.list.sites','LIBOSSOU')}}">

          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">site</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">LIBOSSOU</div>
                    </div>
                    <div class="col">

                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
                 <a href="{{route('redition.list.sites','HOUEGBO')}}"  class=" ">

          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SITE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">HOUEGBO</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
            </a>
        </div>
      </div>
            </div>
      </div>
    </div>
  </div>
<!-- #END# Right Sidebar -->
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
                <div class="row">

                    <div class="col-xl-3 col-md-6 mb-4">
                          <a href="{{route('sucharge.list.sites','EKPE')}}">

                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SITE</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">EKPE</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>


                    <div class="col-xl-3 col-md-6 mb-4">
                     <a href="{{route('sucharge.list.sites','AHOZON')}}">

                      <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Site</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">AHOZON</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{route('sucharge.list.sites','GRAND-POPO')}}">

                      <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">site</div>
                              <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">GRAND-POPO</div>
                                </div>
                                <div class="col">

                                </div>
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                             <a href="{{route('sucharge.list.sites','KPEDOKPO')}}"  class=" ">

                      <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SITE</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">KPEDOKPO</div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                        </a>
                    </div>
                  </div>
    <!-- #END# Widgets -->


            <div class="row">

              <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{route('sucharge.list.sites','SIRAROU')}}">

          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">SITE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">SIRAROU</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
         <a href="{{route('sucharge.list.sites','KPREKETE')}}">

          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Site</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">KPREKETE</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
        <a href="{{route('sucharge.list.sites','LIBOSSOU')}}">

          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">site</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">LIBOSSOU</div>
                    </div>
                    <div class="col">

                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
                 <a href="{{route('sucharge.list.sites','HOUEGBO')}}"  class=" ">

          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">SITE</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">HOUEGBO</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
                </a>
        </div>
      </div>
            </div>
      </div>
    </div>
  </div>

