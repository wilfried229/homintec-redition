@extends("pdf.layout")

@section('css')

@endsection

@section("title")
    Statistique Vacation
@endsection

@section("content")
    <div>
        <!-- client aside -->
        <div style="float:left">

        </div>
        <!-- entreprise aside -->

    </div>

    <div class="row">
        <div class="col-lg-4">
            <span style="" for="">Percepteur : {{ $percepteurs }}</span>
        </div>
        <div class="col-lg-4">
            <span for="">Cabine {{ $cabines->cabine ?? "-" }}</span>
        </div>
        <div class="col-lg-4">
            <span for="">Date de Debut : {{ $dateDebut }}</span>

        </div>
        <div class="col-lg-4">
            <span for="">Date de fin : {{ $dateFin }}</span>
        </div>
    </div>

    <br>
    <br>

                    <div class="row">


                    <div class="col-lg-3">
                        <label for=""> TRYCICLE : {{ $dataStatistiques['TRYCICLE'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> VEHICULE LEGER : {{ $dataStatistiques['VEHICULE LEGER'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> AUTOBUS : {{ $dataStatistiques['AUTOBUS'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 2 : {{ $dataStatistiques['POIDS LOURD 2'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 3 : {{ $dataStatistiques['POIDS LOURD 3'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 4 : {{ $dataStatistiques['POIDS LOURD 4'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 5 : {{ $dataStatistiques['POIDS LOURD 5'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 6 : {{ $dataStatistiques['POIDS LOURD 6'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 7 : {{ $dataStatistiques['POIDS LOURD 7'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 8 : {{ $dataStatistiques['POIDS LOURD 8'] }}</label>
                    </div>
                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 9 : {{ $dataStatistiques['POIDS LOURD 9'] }}</label>
                    </div>

                    <div class="col-lg-3">
                        <label for=""> POIDS LOURD Essieu 10 : {{ $dataStatistiques['POIDS LOURD 10'] }}</label>
                    </div>
                </div>
@endsection
