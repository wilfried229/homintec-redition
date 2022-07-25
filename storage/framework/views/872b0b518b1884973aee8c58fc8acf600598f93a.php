<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(__('Reddition')); ?></title>
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('material')); ?>/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo e(asset('material')); ?>/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="<?php echo e(asset('publics/css/material/material-icons.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('publics/css/font-awesome.min.css')); ?>">
    <!-- CSS Files -->

        <!-- Bootstrap Core Css -->

    <?php echo $__env->make('partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('publics/css/buttons.bootstrap4.min.css')); ?>">
    <?php if (! empty(trim($__env->yieldContent('css')))): ?>
        <?php echo $__env->yieldContent('css'); ?>
    <?php endif; ?>
</head>

    <body class="theme-red">
        <!-- Page Loader -->

        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->IDE
        <!-- Top Bar -->

        <?php echo $__env->make('partials.exports.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- #Top Bar -->


        <?php echo $__env->make('partials.exports.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <section class="content">
            <div class="container-fluid">

                <?php echo $__env->yieldContent('header'); ?>

                <!-- Basic Examples -->


                <!-- Exportable Table -->
               <?php echo $__env->yieldContent('content'); ?>
                <!-- #END# Exportable Table -->
            </div>
        </section>


        <!--   Core JS Files   -->
<script src="<?php echo e(asset('publics/js/core/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('publics/js/core/bootstrap-material-design.min.js')); ?>"></script>
<script src="<?php echo e(asset('publics/js/plugins/perfect-scrollbar.jquery.min.js')); ?>"></script>


<script>
    $(document).ready(function() {
        var table = $('#listExport').DataTable( {
            language: {
                sProcessing:     'Traitement en cours...',
                sSearch:         'Rechercher&nbsp;:',
                sLengthMenu:     'Afficher _MENU_ &eacute;l&eacute;ments',
                sInfo:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                sInfoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                sInfoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                sLoadingRecords: 'Chargement en cours...',
                sZeroRecords:    'Aucun &eacute;l&eacute;ment &agrave; afficher',
                sEmptyTable:     'Aucune donn&eacute;e disponible dans le tableau',
                oPaginate: {
                    sFirst:      'Premier',
                    sPrevious:   'Pr&eacute;c&eacute;dent',
                    sNext:       'Suivant',
                    sLast:       'Dernier'
                },
                oAria: {
                    sSortAscending:  ": activer pour trier la colonne par ordre croissant",
                    sSortDescending: ": activer pour trier la colonne par ordre d&eacute;croissant"
                },
                buttons: {
                    pdf: 'Pdf',
                    excel: 'Excel',
                }
            },
            "ordering": false,
            lengthChange: false,
            buttons: ['excel',             {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL'
            } ]
        } );
        table.buttons().container() .appendTo( '#listExport_wrapper .col-md-6:eq(0)' );
    } );
</script>



<script src="<?php echo e(asset('publics/js/data-table/jquery.dataTables.min.js')); ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo e(asset('publics/js/data-table/datatablebootstrap4.js')); ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo e(asset('publics/js/data-table/dataTables.buttons.min.js')); ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo e(asset('publics/js/data-table/buttons.bootstrap4.min.js')); ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo e(asset('publics/js/data-table/jszip.min.js')); ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo e(asset('publics/js/data-table/pdfmake.min.js')); ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo e(asset('publics/js/data-table/vfs_fonts.js')); ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo e(asset('publics/js/data-table/buttons.html5.min.js')); ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo e(asset('publics/data-table/buttons.print.min.js')); ?>"></script>


    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo e(asset('dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>


<?php echo $__env->yieldContent('js'); ?>


</body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/homintec-redition/resources/views/layouts/export.blade.php ENDPATH**/ ?>