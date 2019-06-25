@extends('layer.master_mng')
@section('content')
		Please Enter Your Password <br>
	<form action="{{ route('mng_check_password_process') }}" method='post'>
		{{csrf_field()}} 
		<input type="password" name="pass_check">
		<button>Send</button>
	</form>
@endsection