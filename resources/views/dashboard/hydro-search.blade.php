@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
        Hydrocarbure
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
                    Hydrocarbure Search
                </h2>

            </div>
            <div class="body">
                <form action="{{ route('hydro.post-seach') }}" method="post">
                    @csrf
                    <div class="row">

                        <div class="col 12">
                            <input type="date" name="date" id="date" class="form-control">
                        </div>

                        <div class="col 12">
                            <input type="submit" value="Rechercher" class="btn btn-info">
                        </div>
                    </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')


@endsection

