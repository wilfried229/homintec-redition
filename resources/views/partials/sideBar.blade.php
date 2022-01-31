<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar" >
        <!-- User Info -->
        <div class="user-info">

            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>

            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Menu</li>
                <li class="active">
                    <a href="{{route('home')}}">
                        <i class="material-icons"> </i>
                        <span>Accueil</span>
                    </a>
                </li>
   {{--              <li>
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
 --}}

 @if (in_array(Auth::user()->role,["ADMIN",'SIRB']) )

                <li>

                    <a href="#" class="menu-toggle">
                        <span>CashFlow</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('cash-flow.indexDay')}}">Par Jours</a>
                        </li>
                        <li>
                         <a  href="{{route('cash-flow.indexMonth')}}">Par Mois</a>

                           </li>
                    </ul>
                </li>

    @endif
                @if (Auth::user()->role == 'SUPERVISEUR' || Auth::user()->role == 'ADMIN' )

                <li>
                    <a href="#" class="menu-toggle">
                        <span>Recettes manuelles</span>
                    </a>
                   <ul class="ml-menu">
{{--
                       <li>
                         <a href="{{route('recette.index')}}">Afficher  Tout</a>
                        </li> --}}

                        <li>
                            <a href="{{route('recette.getByMonth')}}">Afficher</a>
                           </li>
                        <li>
                         <a  href="{{route('recette.create-index')}}">Ajouter</a>

                           </li>


                    </ul>
                </li>


                <li>


                    <a href="#" class="menu-toggle">
                        <span>Surcharges manuelles</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('surcharge-manuel.request')}}">Afficher </a>
                        </li>

                        <li>
                            <a href="{{route('surcharge-manuel.create-index')}}">Ajouter </a>
                           </li>

                    </ul>
                </li>

                @endif


                @if (Auth::user()->role == 'ADMIN')

                <li>


                    <a href="#" class="menu-toggle">
                        <span>Site</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('site.index')}}">Afficher</a>
                        </li>
                        <li>
                         <a  href="{{route('site.create')}}">Ajouter</a>

                           </li>
                    </ul>
                </li>

                <li>


                    <a href="#" class="menu-toggle">
                        <span>Voies</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('voie.index')}}">Afficher</a>
                        </li>
                        <li>
                         <a  href="{{route('voie.create')}}">Ajouter</a>

                           </li>
                    </ul>
                </li>

                <li>


                    <a href="#" class="menu-toggle">
                        <span>Points Essieux</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('point-essieux.searchIndex')}}">Afficher</a>
                        </li>

                    </ul>
                </li>

                <li>


                    <a href="#" class="menu-toggle">
                        <span>Points Mensuels</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('percepteur.index')}}">Afficher</a>
                        </li>

                    </ul>
                </li>

                <li>


                    <a href="#" class="menu-toggle">
                        <span>Points Percepteurs</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('percepteur.index')}}">Afficher</a>
                        </li>

                    </ul>
                </li>
                <li>


                    <a href="#" class="menu-toggle">
                        <span>Percepteur</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('percepteur.index')}}">Afficher</a>
                        </li>
                        <li>
                         <a  href="{{route('percepteur.create')}}">Ajouter</a>

                           </li>
                    </ul>
                </li>

                <li>


                    <a href="#" class="menu-toggle">
                        <span>Vacation</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="{{route('vacation.index')}}">Afficher</a>
                        </li>
                        <li>
                         <a  href="{{route('vacation.create')}}">Ajouter</a>

                           </li>
                    </ul>
                </li>


                <li>

                    <a href="{{route('users.index')}}" class="menu-toggle">
                        <span>Utilisateurs</span>

                    </a>


                </li>
                @endif



                <li>




            <a class="menu-toggle" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 <p>Déconnexion </p>
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>


                </li>

            </ul>

        </div>

    </aside>
    <!-- #END# Left Sidebar -->
</section>

