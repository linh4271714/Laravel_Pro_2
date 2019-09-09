@extends('layer.master_boss')
@section('content')
<div id="view">
<table class="style_table">
	<tr class="style_tr1">
		<th class="style_th">User Name</th>
		<th class="style_th">Email</th>
		<th class="style_th">Phone Number</th>
	</tr>
	@foreach ($array_boss as $boss)
		<tr class="style_tr2">
			<td class="style_td">{{$boss->Username}}</td>
			<td class="style_td">{{$boss->Email}}</td>
			<td class="style_td">{{$boss->PhoneNumber}}</td>
		</tr>
	@endforeach
	<tr>
		<td>
		<a href="{{ route('boss_check_password') }}">
			<button class="btn btn-success">Edit Account</button>
		</a>
		</td>
		<td>
		<a href="{{ route('boss_check_password_2') }}">
			<button class="btn btn-success">Change Password</button>
		</a>
		</td>
	</tr>
</table>
</div>
@endsection