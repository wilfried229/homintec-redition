@extends('template-redition')

@section('css')

@endsection


@section('header')
<div class="block-header">
    <h2>
       Validation
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
                    Validation
                </h2>

                <form action="{{route('validation.percpeteur.action')}}" method="get" class="form">

                    @csrf

                        <div class="row">

                            <div class="col-lg-6">
                                <label for="">Percepteur</label>
                                <select name="percepteur" id="percepteur" data-msg="Veuillez choisir le percepteur" class="form-control selectpicker" data-show-subtext="true" data-live-search="true" style="height: 50px;widht:50px" required>
                                    @foreach ($percepteurs as $item)
                                    <option value="{{$item->nom}}">{{ $item->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Voies</label>
                                <select name="cabine" id="cabine" class="form-control">
                                    @foreach ($voies as $item)
                                    <option value="{{ $item->nom}}">{{ $item->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for=""> Date de début</label>
                                <input type="datetime-local" name="date_debut"  class="form-control"  style="height: 50px">
                            </div>
                            <div class="col-lg-6">
                                <label for=""> Date de fin</label>
                                <input type="datetime-local" name="date_fin"  class="form-control"  style="height: 50px">
                            </div>
                            <div class="col-lg-12">
                                <br>
                                <input type="submit" value="Validez" lang="fr" class="btn btn-block btn-info">
                            </div>

                        </div>
                    </form>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <h1>{{ $sum }} XFOD</h1>
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Site</th>
                                <th>Date</th>
								<th>Heure</th>
                                <th>cabine</th>
                                <th>Percepteur</th>
                                <th>type</th>
                                <th>ptrac</th>
                                <th>cmaes</th>
                                <th>es</th>
                                <th>ptt</th>
                                <th>over</th>
                                <th>Prix</th>
                                <th>caisse</th>
                                <th>Plaque</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Site</th>
                                <th>Date</th>
								<th>Heure</th>
                                <th>cabine</th>
                                <th>Percepteur</th>
                                <th>type</th>
                                <th>ptrac</th>
                                <th>cmaes</th>
                                <th>es</th>
                                <th>ptt</th>
                                <th>over</th>
                                <th>Prix</th>
                                <th>caisse</th>
                                <th>Plaque</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($reditions2 as $redition)
                            <tr>
                            <td>{{$redition->site}}</td>
                            <td>{{$redition->date}}</td>
							<td>{{$redition->heure}}</td>
                            <td>{{$redition->cabine}}</td>
                            <td>{{$redition->percepteur}}</td>
                            <td>{{$redition->type}}</td>
                            <td>{{$redition->ptrac}}</td>
                            <td>{{$redition->cmaes}}</td>
                            <td>{{$redition->es}}</td>
                            <th>{{$redition->ptt}}</th>
                            <th>{{$redition->over}}</th>
                            <th>{{$redition->prix}}</th>
                            <td>{{$redition->caisse}}</td>
                            <td>{{$redition->plaque}}</td>

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

@endsection

