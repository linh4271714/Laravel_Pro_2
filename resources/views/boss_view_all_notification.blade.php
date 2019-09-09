@extends('layer.master_boss')
@section('content')
<div id="view">
<table class="style_table">
	<tr class="style_tr1">
		<th class="style_th">Time</th>
		<th class="style_th">Tittle</th>
		<th class="style_th">Main Content</th>
	</tr>
	@foreach($array_notification as $a)
		<tr class="style_tr2">
			<td class="style_td">{{$a->Date}}</td>
			<td class="style_td">{{$a->Title}}</td>
			<td class="style_td">{{$a->Content}}</td>
		</tr>
	@endforeach
</table>
</div>
@endsection