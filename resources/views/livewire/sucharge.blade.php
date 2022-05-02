<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <table id="listExport" class="table table-bordered ">
        <thead>
            <tr>
                <th>Date de passage</th>
                <th>Voie</th>
                <th>Heure de passage</th>
                <th>Immatriculation</th>
                <th>Nombre Essieu</th>
                <th>Type surcharge</th>
                <th>Poids roulant</th>
                <th>Poids autorisé</th>
                <th>Poids excédent</th>
                <th>Montnant à payer</th>
                <th>Montant payé</th>
                <th>Observations</th>
                <th>Options</th>


            </tr>
            </thead>

            <tbody>



                @foreach ($surcharges as $surcharge)
                @if($loop->first)
                @php
                    $sucha=$surcharges->where('date_passage', $surcharge->date_passage);
                    $dernier = $sucha->last();
                    $premier = $sucha->first();
                    $totMontantApayer = $sucha->sum('montant_apayer');
                    $totIMontantPayer = $sucha->sum('montant_payer');
                @endphp
            @endif

            @if($dernier->date_passage !== $surcharge->date_passage)
                @php
                      $sucha=$surcharges->where('date_passage', $surcharge->date_passage);
                    $dernier = $sucha->last();
                    $premier = $sucha->first();
                    $totMontantApayer = $sucha->sum('montant_apayer');
                    $totIMontantPayer = $sucha->sum('montant_payer');
                @endphp
            @endif
                <tr>
                    @if($premier->id == $surcharge->id)
                    <td class="text-center" rowspan="{{$sucha->count()}}">{{$surcharge->date_passage}}</td>
                @else
                    <td class="d-none" style="display: none"></td>
                @endif
                    <td>{{$surcharge->voie()->orderBy('nom','ASC')->first()->nom ?? ""}}</td>

                    <td>{{$surcharge->heure_passage}}</td>
                    <td>
                        {{ $surcharge->immatriculation}}
                    </td>
                    <td>{{$surcharge->essieu }}</td>
                    <td>{{$surcharge->type_surcharge  }}</td>
                    <td>{{$surcharge->poids_roulant }} </td>
                    <td>{{$surcharge->poid_autorise}}</td>
                    <td>{{$surcharge->excedent}}</td>
                    <td>{{$surcharge->montant_apayer}}</td>
                    <td>{{$surcharge->montant_payer}} </td>
                    <td>{{$surcharge->observation}}</td>
                    <td>
                    @if (in_array(Auth::user()->role,["ADMIN",'SUPERVISEUR']) )
                    <a href="{{route('surcharge-manuel.edit',['surcharge_manuel'=>$surcharge])}}" class="btn btn-info" title="Modifier"> <i class="fa fa-edit">Modifier</i></a>
                    @endif
                    @if (in_array(Auth::user()->role,["ADMIN",'HOMINTEC']) )

                    <a  onclick="event.preventDefault(); document.getElementById('retirer-a-form-{{$surcharge->id}}').submit(); return false;"   class="btn btn-danger">Retirer </a>
                    &nbsp;&nbsp;
                    <form id="retirer-a-form-{{$surcharge->id}}" action="{{route('surcharge-manuel.destroy',['surcharge_manuel'=>$surcharge])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                    @endif
                </td>


                </tr>
                @if($surcharge->id == $dernier->id)

                <tr class="bg-light">

                    <td></td>
                    <td></td>
                    <td></td>

                    <td colspan="" class="text-right">SOMME TOTAL</td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td></td>
                    <td></td>
                    <td>{{$totMontantApayer}}</td>
                    <td>{{$totIMontantPayer}} </td>
                    <td></td>
                    <td></td>


                </tr>
                    @endif

                @endforeach
            </tbody>

    </table>
</div>
