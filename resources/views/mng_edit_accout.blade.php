@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#view_account {
		height: 270px; width: 50%;
		background-color: rgba(255, 0, 0, 0.7);
		color: white;
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		position: fixed;
		top: 90px;
		left: 430px;
	}
	table {
		padding: 10px; 
		border-spacing: 5px;
	}
	input {
		height: 30px;
		width: 300px;
	}
	button {
		height: 30px;
		width: 130px;
	}
	button:hover {
		background-color: #D7B830;
	}
</style>
<div id="view_account">
	<br>
	<center>
		<form action="{{ route('mng_edit_accout_process') }}" method='post'>
			{{csrf_field()}} 
			@foreach ($array_mng as $mng)
			<table>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="userName" value="{{$mng->Username}}" required > <br></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{$mng->Email}}" required> <br></td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td><input type="text" name="phone" value="{{$mng->PhoneNumber}}" required 
						pattern="^[0-9]+$"> <br></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="add" value="{{$mng->Address}}" required > <br></td>
				</tr>
			</table>
			@endforeach
			<br>
			<button onclick="alert('Change information successfully!');">Confirm</button>
		</form>
	</center>
</div>
@endsection