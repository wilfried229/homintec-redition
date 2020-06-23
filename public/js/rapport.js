
$("#idBadge").keyup(function (e) {

    e.preventDefault();
var  idBadge = $('#idBadge').val();
    console.log(idBadge);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'APP_KEY':'',

        }
    });

    var data ={
        idBadge: idBadge
    }
    $.ajax({
        url:'/details/abonners/byidBadgeOrNip',
        dataType:'json',
        data:data,
        type:'get',

    }).done(function (reponse) {

        //console.log(reponse);
        $('#reponse').html('<div class="card card-secondary">'+

'<div class="card-header">'+
    '<h3 class="card-title" style="text-align:center">'+
'</div>'+

'<div class="card-body">'+
    '<div class="table-responsive">'+
        '<table id="notreDataTable" class="table table-bordered table-striped">'+
           ' <thead>'+
        '<tr>'+
                ' <th>#</th>'+
                ' <th>id</th>'+
               ' <th>Nom</th>'+
                '<th>Prenom</th>'+
                '<th>Adresse</th>'+
                '<th>Téléphone</th>'+
                '<th>NIP</th>'+
                '<th>Solde</th>'+
           '</tr>'+
            '</thead>'+
            '<tbody>'+

               '<tr>'+
               ' <td>'+reponse.id+'</td>'+
               ' <td>'+reponse.idBadge+'</td>'+
                ' <td>'+reponse.nom+'</td>'+
                '<td>'+reponse.prenom+'</td>'+
                '<td>'+reponse.adresse+'</td>'+
                '<td>'+reponse.tel+'</td>'+
                '<td>'+reponse.nip+'</td>'+
                '<td>'+reponse.solde+'</td>'+

                '</tr>'+

            '</tbody>'+
        '</table>'+
    '</div>'+
'</div>'+
'</div>');

    }).fail(function (xhr) {

        $('#reponse').html('<p>Abonné inexistant</p>');
        //console.log(xhr);
    });

});


$('#name').keyup(function (e) {
    e.preventDefault();
var name = $('#name').val();
var tab = name.split(" ");

var nom = "";
var prenom = "";
 for (let i = 0; i < tab.length; i++) {
     const element = tab[i];
     nom = tab[0];
     prenom = tab[1];

 }


 console.log(nom,prenom);



///var prenom = $('#name').val();
var data ={
        nom: name,
        prenom: prenom,
    }
    $.ajax({
        url:'/details/abonners/abonnerByNomAndPrenom',
        dataType:'json',
        data:data,
        type:'get',

    }).done(function (reponse) {

        $('#reponse_search').html('<div class="card card-secondary">'+

'<div class="card-header">'+
    '<h3 class="card-title" style="text-align:center">'+
'</div>'+

'<div class="card-body">'+
    '<div class="table-responsive">'+
        '<table id="notreDataTable" class="table table-bordered table-striped">'+
           ' <thead>'+
        '<tr>'+
               ' <th>#</th>'+
               ' <th>id</th>'+
               ' <th>Nom</th>'+
                '<th>Prenom</th>'+
                '<th>Adresse</th>'+
                '<th>Téléphone</th>'+
                '<th>NIP</th>'+
                '<th>Solde</th>'+
           '</tr>'+
            '</thead>'+
            '<tbody>'+
               '<tr>'+
               ' <td>'+reponse.id+'</td>'+
               ' <td>'+reponse.idBadge+'</td>'+
                ' <td>'+reponse.nom+'</td>'+
                '<td>'+reponse.prenom+'</td>'+
                '<td>'+reponse.adresse+'</td>'+
                '<td>'+reponse.tel+'</td>'+
                '<td>'+reponse.nip+'</td>'+
                '<td>'+reponse.solde+'</td>'+

                '</tr>'+

            '</tbody>'+
        '</table>'+
    '</div>'+
'</div>'+
'</div>');



        if (reponse == 0) {

            $('#reponse_search').html('<p>Abonné inexistant</p>');

        }

    }).fail(function (xhr) {

        $('#reponse_search').html('<p>Abonné inexistant</p>');
        //console.log(xhr);
    });


});
