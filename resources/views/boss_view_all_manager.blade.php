@extends('layer.master_boss')
@section('content')
<table>
	<tr>
		<th>User Name</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Address</th>
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
@endsection