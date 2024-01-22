@extends('template-redition')

@section('css')

<link rel="stylesheet" type="text/css" href="{{asset('publics/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('publics/css/buttons.bootstrap4.min.css')}}">
@endsection


@section('header')
<div class="block-header">
    <h2>
            Recettes
        <small><a href="" target="_blank"> </a></small>
    </h2>
</div>
@endsection


@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Points Essieux / {{$site->nom}}
                </h2>
                <br>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="listExort" class="table table-bordered ">
                        <thead>

                            <tr>
                                <th colspan="15"><h3 style="text-align: center">{{$site->nom}}</h3></th>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <th>Voie</th>
                                <th>Essieux</th>
                                <th>Nombre</th>

                            </tr>
                            </thead>

                            <tbody>



                                @foreach ($pointEssieux as $key => $essieux)


                                @if($loop->first)
                                @php
                                $nombreTotales  = $pointEssieux->where('date_passage',$essieux->date_passage)
                                                                ->where('voies_id',$essieux->voie()->first()->id);

                                 $dernier = $nombreTotales->last();
                                $premier = $nombreTotales->first();

                                $voies = $essieux->voie()->first()->nom ;

                            @endphp

                                @endif
                                @if($dernier->date_passage !== $essieux->date_passage)
                                @php
                                $nombreTotales  = $pointEssieux->where('date_passage',$essieux->date_passage)
                                                                ->where('voies_id',$essieux->voie()->first()->id);
                                $dernier = $nombreTotales->last();
                                $premier = $nombreTotales->first();
                                $voies = $essieux->voie()->first()->nom ;
                                @endphp
                            @endif
                            <tr>

                                <td class="text-center" rowspan="">{{  $essieux->date_passage }}</td>
                                <td class="text-center" rowspan="{{$nombreTotales->count()}}">{{ $nombreTotales->first()->voie()->first()->nom }}</td>

                                <td class="text-center" rowspan="{{$nombreTotales->count()}}">{{ $nombreTotales->first()->essieu}}</td>
                                    <td rowspan="{{$nombreTotales->count()}}">{{$nombreTotales->count()}} </td>
                                </tr>
                                @endforeach
                            </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
    $(document).ready(function() {
        var table = $('#listExort').DataTable( {
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
                    pdf: 'pdf',
                    excel: 'excel',
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

<script>
$(document).ready(function(){

    var span = 1;
    var preTD= "";
    var preTDVal = '';

    $("#listExport tr td:first-child").each(function () {


       var  $this = $(this)
        if ($this.text()==preTDVal) {
            span ++;

            if (preTD!= "") {
                preTD.attr("rowspan",span);
                $this.remove();

            }


        } else {

            preTD = $this;
            preTDVal = $this.text();
            span = 1;
        }
    })


})

</script>




<script src="{{ asset('publics/js/data-table/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="{{asset('publics/js/data-table/datatablebootstrap4.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('publics/js/data-table/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('publics/js/data-table/buttons.bootstrap4.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('publics/js/data-table/jszip.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('publics/js/data-table/pdfmake.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('publics/js/data-table/vfs_fonts.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('publics/js/data-table/buttons.html5.min.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{asset('publics/data-table/buttons.print.min.js')}}"></script>

@endsection
