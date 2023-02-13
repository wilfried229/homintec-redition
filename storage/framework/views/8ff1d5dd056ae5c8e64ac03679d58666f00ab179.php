<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar" >
        <!-- User Info -->
        <div class="user-info">

            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?></div>

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

 <?php if(in_array(Auth::user()->role,["ADMIN",'SUPERVISEUR','HOMINTEC','SUPERADMIN']) ): ?>

 <li>
    <a href="<?php echo e(route('statistique.index')); ?>"><span>Statistique Vacation </span></a>
 </li>

 <li>
    <a  class="menu-toggle">
        <span>Recettes manuelles</span>
    </a>
    <ul class="ml-menu">

        <li>
            <a href="<?php echo e(route('recette.getByMonth')); ?>">Afficher</a>
        </li>
        <li>
            <a href="<?php echo e(route('recette.create-index')); ?>">Ajouter</a>

        </li>


    </ul>
</li>


<li>


    <a  class="menu-toggle">
        <span>Surcharges manuelles</span>
    </a>
    <ul class="ml-menu">

        <li>
            <a href="<?php echo e(route('surcharge-manuel.request')); ?>">Afficher </a>
        </li>

        <li>
            <a href="<?php echo e(route('surcharge-manuel.create-index')); ?>">Ajouter </a>
        </li>

    </ul>
</li>

<li>


    <a href="#" class="menu-toggle">
        <span>Dysfonctionnnements</span>
    </a>
    <ul class="ml-menu">

        <li>
            <a href="<?php echo e(route('dysfonctionnnemt.index')); ?>">Afficher</a>
        </li>
        <li>
            <a href="<?php echo e(route('dysfonctionnnemt.create')); ?>">Ajouter</a>

        </li>
    </ul>
</li>

<li>


    <a class="menu-toggle">
        <span>Surcharges annulés</span>
    </a>
    <ul class="ml-menu">

        <li>
            <a href="<?php echo e(route('surcharge-manuel.request',['type'=>'ANNULE'])); ?>">Afficher </a>
        </li>

        <li>
            <a href="<?php echo e(route('surcharge-manuel.create-index',['type'=>"ANNULE"])); ?>">Ajouter </a>
        </li>

    </ul>
</li>
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
                     <a  href="<?php echo e(route('recette.create-index')); ?>">Ajouter</a>

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
                         <a  href="<?php echo e(route('cash-flow.indexMonth')); ?>">Par Mois</a>

                           </li>
                    </ul>
                </li>

 <?php endif; ?>



        <?php if(in_array(Auth::user()->role,['ADMIN','SUPERADMIN']) ): ?>


        <li>


            <a href="<?php echo e(route("point-essieux.searchIndex")); ?>" class="menu-toggle">
                <span>Points Essieux</span>
            </a>

        </li>
        <li>


            <a href="#" class="menu-toggle">
                <span>Points Mensuels</span>
            </a>
           <ul class="ml-menu">

               <li>
                 <a href="<?php echo e(route('point-mensuel.searchIndex')); ?>">Coupon</a>
                </li>
                <li>
                 <a  href="<?php echo e(route('point-mensuel.searchIndexInformatiser')); ?>">Informatiser</a>

                   </li>
            </ul>
        </li>


        <li>


            <a href="<?php echo e(route('point-percepteur.searchIndex')); ?>" >
                <span>Points Percepteurs</span>
            </a>

        </li>
        <li>
                <li>


                    <a href="#" class="menu-toggle">
                        <span>Site</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="<?php echo e(route('site.index')); ?>">Afficher</a>
                        </li>
                        <li>
                         <a  href="<?php echo e(route('site.create')); ?>">Ajouter</a>

                           </li>
                    </ul>
                </li>

                <li>


                    <a href="#" class="menu-toggle">
                        <span>Voies</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="<?php echo e(route('voie.index')); ?>">Afficher</a>
                        </li>
                        <li>
                         <a  href="<?php echo e(route('voie.create')); ?>">Ajouter</a>

                           </li>
                    </ul>
                </li>





                <li>

                    <a href="#" class="menu-toggle">
                        <span>Percepteur</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="<?php echo e(route('percepteur.index')); ?>">Afficher</a>
                        </li>
                        <li>
                         <a  href="<?php echo e(route('percepteur.create')); ?>">Ajouter</a>

                           </li>
                    </ul>
                </li>

                <li>


                    <a href="#" class="menu-toggle">
                        <span>Vacation</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="<?php echo e(route('vacation.index')); ?>">Afficher</a>
                        </li>
                        <li>
                         <a  href="<?php echo e(route('vacation.create')); ?>">Ajouter</a>

                           </li>
                    </ul>
                </li>


                <li>


                    <a href="#" class="menu-toggle">
                        <span>Categorie de Dysfonctionnnements</span>
                    </a>
                   <ul class="ml-menu">

                       <li>
                         <a href="<?php echo e(route('categorie-dysfonctionnnemt.index')); ?>">Afficher</a>
                        </li>
                        <li>
                         <a  href="<?php echo e(route('categorie-dysfonctionnnemt.create')); ?>">Ajouter</a>

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




            <a class="menu-toggle" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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