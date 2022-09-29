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

 @if (in_array(Auth::user()->role,["ADMIN",'SAFER','HOMINTEC','SUPERADMIN']) )
 <li>
    <a href="{{route('logs.index')}}"><span>Logs Vacations </span></a>
       </li>
                <li>
                    <a href="#" class="menu-toggle">
                        <span>Validation </span>
                    </a>

                <ul class="ml-menu">


                    <li>
                        <a href="{{route('validation.index')}}">validation temps reels </a>
                       </li>


                       <li>
                        <a href="{{route('validation.percpeteur.date')}}">Recettes par vacation</a>
                       </li>
                       <li>
                        <a href="{{route('validation.site.date')}}">Recettes par site</a>
                       </li>

                    <li>
                     <a  href="{{route('recette.create-index')}}">Ajouter</a>

                       </li>


                </ul>
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



        @if (in_array(Auth::user()->role,['ADMIN','SUPERADMIN']) )


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

