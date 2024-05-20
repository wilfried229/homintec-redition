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
                <a href="{{route('validation.by.voies',$voie->nom)}}">

                    <div class="info-box bg-green hover-expand-effect">
                        <div class="icon">
                            <h4>{{ $voie->site()->first()->nom }}</h4>
                            <h4>{{$voie->nom}}</h4>
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="content">
                            <div class="text text-bold text-center text-lg"></div>
                            <h2>{{\App\Models\Validation::where('cabine',$voie->nom)->where('site',$voie->site()->first()->nom)->whereDate('date',now())->sum('prix') ?? "0"}}</h2>
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

