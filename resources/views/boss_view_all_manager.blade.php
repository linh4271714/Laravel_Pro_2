@extends('layer.master_boss')
@section('content')
<div id="view">
<table class="style_table">
	<tr class="style_tr1">
		<th class="style_th">User Name</th>
		<th class="style_th">Email</th>
		<th class="style_th">Phone Number</th>
		<th class="style_th">Address</th>
	</tr>
	@foreach ($array_manager as $mng)
		<tr>
			<td>{{$mng->Username}}</td>
			<td>{{$mng->Email}}</td>
			<td>{{$mng->PhoneNumber}}</td>
			<td>{{$mng->Address}}</td>
		</tr>
	@endforeach
</table>
</div>
@endsection