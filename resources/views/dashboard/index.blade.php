@extends('template')



 @section('content')
 <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>État des recettes journalières</h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            @foreach ($cashFLows as $cash )
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="info-box bg-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">money</i>
                    </div>
                    <div class="content">
                        <div class="text text-bold text-center">Recettes {{$cash['site']}}</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"> {{  number_format((float)$cash['cashFlow'], 0, '.', '.') }}</div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        <!-- #END# Widgets -->
    </div>
</section>
 @endsection

