@extends('layer.master_mng')
@section('content')
<table>
	<tr>
		<th>User Name</th>
		<th>Email</th>
		<th>Phone Number</th>
		<th>Address</th>
	</tr>
	@foreach ($array_mng as $mng)
		<tr>
			<td>{{$mng->Username}}</td>
			<td>{{$mng->Email}}</td>
			<td>{{$mng->PhoneNumber}}</td>
			<td>{{$mng->Address}}</td>
		</tr>
	@endforeach
		<a href="{{ route('mng_check_password') }}">
			<button class="btn btn-success">Edit Accout</button>
		</a>
		<a href="{{ route('mng_check_password_2') }}">
			<button class="btn btn-success">Change Password</button>
		</a>
</table>
@endsection