<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">

            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo e(Auth::user()->name); ?></div>

            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Menu</li>
                <li class="active">
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="material-icons"> </i>
                        <span>Accueil</span>
                    </a>
                </li>

                <?php if(in_array(Auth::user()->role, ['ADMIN', 'SAFER', 'HOMINTEC', 'SUPERADMIN'])): ?>
                    <li>
                        <a href="<?php echo e(route('logs.index')); ?>"><span>Logs Vacations </span></a>
                    </li>
                    <li>
                        <a href="#" class="menu-toggle">
                            <span>Validation </span>
                        </a>

                        <ul class="ml-menu">


                            <li>
                                <a href="<?php echo e(route('validation.index')); ?>">validation temps reels </a>
                            </li>


                            <li>
                                <a href="<?php echo e(route('validation.percpeteur.date')); ?>">Recettes par vacation</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('validation.site.date')); ?>">Recettes par site</a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('recette.create-index')); ?>">Ajouter</a>

                            </li>


                        </ul>
                    <li>

                        <li>
                            <a href="#" class="menu-toggle">
                                <span>Comptage </span>
                            </a>

                            <ul class="ml-menu">

                                <li>
                                    <a href="<?php echo e(route('search.comptage.vacation.view')); ?>">Comptage  par vacation</a>
                                </li>

                 


                            </ul>
                        <li>
                        <a href="#" class="menu-toggle">
                            <span>CashFlow</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="<?php echo e(route('cash-flow.indexDay')); ?>">Par Jours</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('cash-flow.indexMonth')); ?>">Par Mois</a>

                            </li>
                        </ul>
                    </li>
                <?php endif; ?>



                <?php if(in_array(Auth::user()->role, ['ADMIN', 'SUPERADMIN'])): ?>
                    <li>


                        <a href="#" class="menu-toggle">
                            <span>Voies</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="<?php echo e(route('voie.index')); ?>">Afficher</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('voie.create')); ?>">Ajouter</a>

                            </li>
                        </ul>
                    </li>




                    <li>

                        <a href="<?php echo e(route('users.index')); ?>" class="menu-toggle">
                            <span>Utilisateurs</span>

                        </a>


                    </li>
                <?php endif; ?>



                <li>




                    <a class="menu-toggle" href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <p>Déconnexion </p>
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>


                </li>

            </ul>

        </div>

    </aside>
    <!-- #END# Left Sidebar -->
</section>
<?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/partials/sidebar.blade.php ENDPATH**/ ?>