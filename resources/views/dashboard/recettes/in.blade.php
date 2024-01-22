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
                    Recettes / {{$site->nom}} / {{$date}}
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
                                <th>Vacation</th>

                                <th>Voie</th>
                                <th>Percepteur</th>
                                <th>Montant coupon</th>
                                <th>Recette declarer</th>
                                <th>Recette Informatiser</th>
                                <th>Observation</th>
                                <th>Manquant</th>
                                <th>Surplus</th>
                                <th>Nombre passage</th>
                                <th>Nombre de violation</th>
                                <th>Nombre Exempte</th>
                                <th>Options</th>


                            </tr>
                            </thead>

                            <tbody>



                                @foreach ($recettes as $key => $recette)



                                @if($loop->first)
                                @php
                                    $recet=$recettes->where('date_recettes', $recette->date_recettes);
                                    $dernier = $recet->last();
                                    $premier = $recet->first();
                                    $totCoupon = $recet->sum('montant_coupant');
                                    $totInformatisee = $recet->sum('montant_informatise');
                                    $totDeclaree = $recet->sum('montant_percepteur');


                                    $totManquant =   $recette->montant_ecart < 0  ? $recet->sum('montant_ecart') : 0;


                                $totSurplus = $recette->montant_ecart > 0  ? $recet->sum('montant_ecart') : 0;
                                 $totPassage = $recet->sum('nombre_vehicule');
                                    //$totManquant = $recet->sum('manquant');
                                   // $totSurplus = $recet->sum('surplus');
                                    ///$totPassagev = $recet->sum('nombrevl');
                                    ///$totPassagep = $recet->sum('nombrepl');
                                    ///$totPassage = $recet->sum('nombrev');
                                    $totViolation = $recet->sum('nombre_violation');
                                    $totExempte = $recet->sum('nombre_exemptes');
                                @endphp
                            @endif

                            @if($dernier->date_recettes !== $recette->date_recettes)
                                @php
                                    $recet=$recettes->where('date_recettes', $recette->date_recettes);
                                    $dernier = $recet->last();
                                    $premier = $recet->first();
                                    $totCoupon = $recet->sum('montant_coupant');
                                    $totInformatisee = $recet->sum('montant_informatise');
                                    $totDeclaree = $recet->sum('montant_percepteur');


                                    $totManquant =   $recette->montant_ecart < 0  ? $recet->sum('montant_ecart') : 0;


                                    $totSurplus = $recette->montant_ecart > 0  ? $recet->sum('montant_ecart') : 0;
                                 $totPassage = $recet->sum('nombre_vehicule');
                                    ///$totPassagep = $recet->sum('nombrepl');
                                    ///$totPassage = $recet->sum('nombrev');

                                    $totViolation = $recet->sum('nombre_violation');
                                    $totExempte = $recet->sum('nombre_exemptes');
                                @endphp
                            @endif
                            <tr>

                                @if($premier->id == $recette->id)
                                <td class="text-center" rowspan="{{$recet->count()}}">{{ $recette->date_recettes }}</td>
                            @else
                                <td class="d-none" style="display: none"></td>
                            @endif
                                    <td>{{$recette->vacation()->first()->type}}</td>
                                    <td>{{$recette->voie()->first()->nom}}</td>
                                    <td>{{$recette->percepteur()->first()->nom ." " .$recette->percepteur()->first()->prenom}}</td>
                                    <td>{{ number_format((float)$recette->montant_coupant, 0, '.', '.') }}</td>
                                    <td>{{ number_format((float)$recette->montant_percepteur , 0, '.', '.') }}</td>
                                    <td>{{ number_format((float)$recette->montant_informatise , 0, '.', '.')}} </td>
                                    <td>{{$recette->observation}}</td>
                                    <td>{{$recette->montant_ecart < 0  ? -$recette->montant_ecart : 0 }}</td>
                                    <td>{{$recette->montant_ecart > 0  ? $recette->montant_ecart : 0}}</td>
                                    <td>{{$recette->nombre_vehicule}} </td>
                                    <td>{{$recette->nombre_violation}}</td>
                                    <td>{{$recette->nombre_exemptes}} </td>


                                    <td>


                                        <a href="{{route('recette.show',['id'=>$recette->id])}}" class="btn btn-info" title="Modifier"> Modifier<i class="fa fa-edit"></i></a>

                                    </td>


                                </tr>

                                @if($recette->id == $dernier->id)

                                <tr class="bg-light">


                                    <td style="display: none"></td>
                                    <td style="display: none"> </td>
                                    <td style="display: none"></td>
                                    <td colspan="4" class="text-right">SOMME TOTAL</td>
                                    <td>{{$totCoupon}}</td>
                                    <td>{{$totDeclaree}}</td>
                                    <td>{{$totInformatisee}}</td>
                                    <td></td>
                                    <td>{{-$totManquant}} </td>
                                    <td>{{$totSurplus}}</td>
                                    <td>{{$totPassage}}</td>
                                    <td>{{$totViolation}}</td>
                                    <td>{{$totExempte}} </td>
                                    <td> </td>

                                    </tr>

                                    @endif
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
