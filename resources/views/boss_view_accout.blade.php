@extends('layer.master')
@section('content')
<table>
	<tr>
		<th>User Name</th>
		<th>Email</th>
		<th>Phone Number</th>
	</tr>
	@foreach ($array_boss as $boss)
		<tr>
			<td>{{$boss->Username}}</td>
			<td>{{$boss->Email}}</td>
			<td>{{$boss->PhoneNumber}}</td>
		</tr>
	@endforeach
		<a href="{{ route('boss_check_password') }}">
			<button class="btn btn-success">Edit Accout</button>
		</a>
		<a href="{{ route('boss_check_password_2') }}">
			<button class="btn btn-success">Change Password</button>
		</a>
</table>
@endsection