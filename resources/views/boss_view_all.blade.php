<table class="table table-striped">
	<tr>
		<th>User Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone Number</th>
	</tr>
	@foreach ($array_boss as $boss)
		<tr>
			<td>{{$boss->Username}}</td>
			<td>{{$boss->Email}}</td>
			<td>{{$boss->Pass}}</td>
			<td>{{$boss->PhoneNumber}}</td>
		</tr>
	@endforeach
	<caption>
		<a href="{{ route('boss_check_password') }}">
			<button class="btn btn-success">Edit Accout</button>
		</a>
	</caption>
</table>