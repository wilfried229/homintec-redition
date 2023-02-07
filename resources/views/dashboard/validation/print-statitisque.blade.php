@foreach ($categories as $c )

<tr>
<td colspan="4">

@if ($c =="TRYCICLE")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->count()}}</label>
@endif
@if ($c =="VEHICULE LEGER")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->count()}}</label>

@endif

@if ($c =="POIDS LOURD 2")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',2)->count()}}</label>
@endif
@if ($c =="POIDS LOURD 3")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',3)->count()}}</label>
@endif
@if ($c =="POIDS LOURD 4")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',4)->count()}}</label>
@endif

@if ($c =="POIDS LOURD 5")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',5)->count()}}</label>
@endif

@if ($c =="POIDS LOURD 6")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',6)->count()}}</label>
@endif

@if ($c =="POIDS LOURD 7")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',7)->count()}}</label>
@endif

@if ($c =="POIDS LOURD 8")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',8)->count()}}</label>
@endif
@if ($c =="POIDS LOURD 9")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',9)->count()}}</label>
@endif
@if ($c =="POIDS LOURD 10")
{{ $c }} :  <label for="">  {{ $dataSta->where('ptrac','=',$c)->where('es',10)->count()}}</label>
@endif
</td>


</tr>
@endforeach
