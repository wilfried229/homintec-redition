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
                    <a href="{{url('test')}}">
                        <i class="material-icons"> </i>
                        <span>Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="menu-toggle">
                        <span>Validation </span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('redition2.day')}}">Par Jour</a>
                        </li>
                        <li>
                            <a href="{{route('redition2.month')}}">Par Mois</a>
                        </li>
                        <li>
                            <a href="{{route('redition2.search')}}">Par Date</a>
                        </li>


                    </ul>
                </li>


                <li>
                    <a href="#" class="menu-toggle">

                        <span>Recettes UEMOI</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('redition.uemoi.listDay.sites')}}">Par jour </a>
                        </li>
                        <li>
                            <a href="{{route('redition.uemoi.listMonth.sites')}}">Par Mois</a>
                        </li>
                        <li>
                            <a href="{{route('redition.uemoi.list.sites')}}">Par DATE</a>
                        </li>
                    </ul>
                </li>



             {{--    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <span>Surchages</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('sucharge.list.sites','HOUEGBO')}}">HOUEGBO</a>
                        </li>
                        <li>
                            <a href="{{route('sucharge.list.sites','EKPE')}}">EKPE</a>
                        </li>
                        <li>
                            <a href="{{route('sucharge.list.sites','AHOZON')}}">AHOZON</a>
                        </li>
                        <li>
                            <a href="{{route('sucharge.list.sites','GRAND-POPO')}}">GRAND-POPO</a>
                        </li>

                        <li>
                            <a href="{{route('sucharge.list.sites','SIRAOU')}}">SIRAOU</a>
                        </li>
                        <li>
                            <a href="{{route('sucharge.list.sites','KPEDEPKO')}}">KPEDEPKO</a>
                        </li>
                        <li>
                            <a href="{{route('sucharge.list.sites','DIHO')}}">DIHO</a>
                        </li>
                        <li>
                            <a href="{{route('sucharge.list.sites','BIRO')}}">BIRO</a>
                        </li>
                        <li>
                            <a href="{{route('sucharge.list.sites','KPREKETE')}}">KPREKETE</a>
                        </li>

                    </ul>
                </li> --}}

                <li>
                    <a href="# class="menu-toggle">
                        <span>Surcharges UEMOI</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','HOUEGBO')}}">HOUEGBO</a>
                        </li>
                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','EKPE')}}">EKPE</a>
                        </li>
                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','AHOZON')}}">AHOZON</a>
                        </li>
                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','GRAND-POPO')}}">GRAND-POPO</a>
                        </li>

                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','SIRAOU')}}">SIRAOU</a>
                        </li>
                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','KPEDEPKO')}}">KPEDEPKO</a>
                        </li>
                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','DIHO')}}">DIHO</a>
                        </li>
                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','BIRO')}}">BIRO</a>
                        </li>
                        <li>
                            <a href="{{route('suchargeVieUemio.list.sites','KPREKETE')}}">KPREKETE</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="#" class="menu-toggle">
                        <span>Hydrocarbure</span>

                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{route('hydro.list.days')}}">Par jour </a>
                        </li>
                        <li>
                            <a href="{{route('hydro.list.month')}}">Par Mois</a>
                        </li>
                        <li>
                            <a href="{{route('hydro.list.search')}}">Par DATE</a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>

    </aside>
    <!-- #END# Left Sidebar -->
</section>
