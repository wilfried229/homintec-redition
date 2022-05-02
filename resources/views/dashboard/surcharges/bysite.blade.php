@extends('layouts.export')
@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
            Surcharges
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
                    Surcharges  {{$type? 'ANNULLE' : "NORMAL "}}     / {{$site->nom??''}} / {{$date ?? ""}}
                </h2>
                <br>

            </div>
            <div class="body">
                <div class="table-responsive">
                    @include('partials.flash')

                    @livewire('sucharge', ['date' => $date,'site'=>$site,'type'=>$type,'date_debut'=>$date_debut,'date_fin'=>$date_fin,'site_id'=>$site_id])


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')

<script>
    $(document).ready(function(){

        var span = 1;
        var preTD= "";
        var preTDVal = '';

        $("#listExpor tr td:first-child").each(function () {



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


@endsection
