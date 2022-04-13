@extends('template')



 @section('content')
 <section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Voie</h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            @foreach ($voies as $voie )

            <div   class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <a href="{{route('surcharge-manuel.create',['voie'=>$voie->id,'type'=>$type])}}">

                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <h2>Voie</h2>
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="content">
                            <div class="text text-bold text-center text-lg"></div>
                            <h2>{{$voie->nom}}</h2>
                        </div>
                    </div>
                </a>

            </div>

            @endforeach

        </div>
        <!-- #END# Widgets -->
    </div>
</section>
 @endsection

