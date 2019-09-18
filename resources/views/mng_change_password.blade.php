@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#view_account {
		height: 250px; width: 50%;
		background-color: rgba(255, 0, 0, 0.7);
		color: white;
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		position: fixed;
		top: 90px;
		left: 430px;
	}
	input {
		height: 30px;
		width: 40%;
	}
	button {
		height: 30px;
		width: 130px;
	}
	button:hover {
		background-color: #D7B830;
	}
	h3 {
		color: #ac8c15;
	}
</style>
<div id="view_account">
	<br><br>
	<center>
		<form action="{{ route('mng_change_password_process') }}" method='post'>
			{{csrf_field()}}
			Enter new password:<br>
			 <input type="password" name="pass" required><br><br>
			Re-enter new password:<br>
			 <input type="password" name="repass" required><br><br><br>
			<button onsubmit="alert('Change password successful!');">Confirm</button>
		</form>
	</center>
</div>
@endsection