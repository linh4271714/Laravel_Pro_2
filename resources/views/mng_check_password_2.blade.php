@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#view_account {
		height: 200px; width: 50%;
		background-color: rgba(255, 0, 0, 0.7);
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
		color: white ;
	}
</style>
<div id="view_account">
	<br>
	<center><h3>For security, please enter your curent password</h3>
		<form action="{{ route('mng_check_password_process_2') }}" method='post'>
			{{csrf_field()}} 
			<input type="password" name="pass_check" required pattern="^[0-9]+$" title="The password consists of numeric characters and does not contain special characters"> <br><br>
			<button>Confirm</button>
		</form>
	</center>
</div>
@endsection