@extends("pdf.layout")

@section('css')

@endsection

@section("title")
Statistique Vacation
@endsection

@section("content")
<div>
    <!-- client aside -->
    <div style="">
        <div class="col-lg-4">
            <span style="font-weight: bold" for="">INFORMATION DE VACATION</span>
        </div>
        <div class="col-lg-4">
            <span style="font-weight: bold" for="">{{ date('d/M/Y H:i') }}</span>
        </div>
        <div class="col-lg-4">
            <span style="font-weight: bold" for="">{{ $cabines->site }}</span>
        </div>
    </div>
    <!-- entreprise aside -->

</div>

<div class="row">


    <div class="col-lg-4">
        <span style="font-weight: bold" for="">Percepteur : {{ $percepteurs }}</span>
    </div>
    <div class="col-lg-4">
        <span style="font-weight: bold">Cabine {{ $cabines->cabine }}</span>
    </div>
    <div class="col-lg-4">
        <span style="font-weight: bold">Date de Debut : {{ $dateDebut }}</span>

    </div>
    <div class="col-lg-4">
        <span style="font-weight: bold">Date de fin : {{ $dateFin }}</span>
    </div>
</div>
<div>
    <table>
        <thead>

            <tr>
                <th colspan="2" style="font-size:10px">NBR VEHICULE : {{ $dataStatistiques['NOMBREVEHICULE'] }}  </th>
            </tr>
            <tr>
                <th style="font-size:10px">CATEGORIES </th>
                <th style="font-size: 10px">NOMBRES</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td style="float: center; font-size: 10px">MOTO</td>
                <td> {{ $dataStatistiques['MOTO'] }}</td>
            </tr>
            <tr>

                <td style="float: center;font-size: 10px">TRICYCLE</td>
                <td> {{ $dataStatistiques['TRICYCLE'] }}</td>
            </tr>

            <tr>

                <td style="float: center;font-size: 10px">VL</td>
                <td> {{ $dataStatistiques['VEHICULE LEGER'] }}</td>
            </tr>


            <tr>

                <td style="float: center;font-size: 10px">MINI BUS</td>
                <td> {{ $dataStatistiques['MINIBUS'] }}</td>
            </tr>


            <tr>

                <td style="float: center;font-size: 10px">AUTOBUS</td>
                <td> {{ $dataStatistiques['AUTOBUS'] }}</td>
            </tr>

            <tr>

                <td style="float: center;font-size: 10px">PL 2S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 2'] }}</td>
            </tr>


            <tr>

                <td style="float: center;font-size: 10px">PL 3S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 3'] }}</td>
            </tr>

            <tr>

                <td style="float: center;font-size: 10px">PL 4S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 4'] }}</td>
            </tr>

            <tr>

                <td style="float: center;font-size: 10px">PL 5S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 5'] }}</td>
            </tr>

            <tr>

                <td style="float: center;font-size: 10px">PL 6S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 6'] }}</td>
            </tr>

            <tr>

                <td style="float: center;font-size: 10px">PL 7S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 7'] }}</td>
            </tr>


            <tr>

                <td style="float: center;font-size: 10px">PL 8S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 8'] }}</td>
            </tr>

            <tr>

                <td style="float:center;font-size: 10px">PL 9S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 9'] }}</td>
            </tr>

            <tr>

                <td style="float: center;font-size: 10px">PL 10S</td>
                <td> {{ $dataStatistiques['POIDS LOURD 10'] }}</td>
            </tr>


        </tbody>
    </table>

  </div>
@endsection
