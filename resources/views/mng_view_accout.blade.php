@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#view_account {
		height: 215px; width: 50%;
		background-color: rgba(255, 0, 0, 0.7);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		position: fixed;
		top: 230px;
		left: 430px;
	}
	#table{
		border-style: solid;
	    margin: auto;
	    top: 50px;
	    width: 80%;
	    padding: 10px;
	}
	.td1 {
		width: 30%;
		height: 30px;
	}
	.td2 {
		width: 70%;
		height: 30px;
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
	<br><br>
	<table id="table">
		@foreach ($array_mng as $mng)
		<tr id="tr" style="background-color: #D0D5DC;">
			<td class='td1'>User Name</td>
			<td class="td2">{{$mng->Username}}</td>
		</tr>
		<tr style="color: #D0D5DC;">
			<td class='td1'>Email</td>
			<td class="td2">{{$mng->Email}}</td>
		</tr>
		<tr style="background-color: #D0D6DC">
			<td class='td1'>Phone Number</td>
			<td class="td2">{{$mng->PhoneNumber}}</td>
		</tr>
		<tr style="color: #D0D5DC;">
			<td class='td1'>Address</td>
			<td class="td2">{{$mng->Address}}</td>
		</tr>
		@endforeach
	</table>
	<br>
	<center>
			<a href="{{ route('mng_check_password') }}">
				<button class="btn btn-success">Edit Accout</button>
			</a>
			<a href="{{ route('mng_check_password_2') }}">
				<button class="btn btn-success">Change Password</button>
			</a>
	</center>
</div>
@endsection