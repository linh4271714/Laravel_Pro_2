@extends('layer.master')
@section('content')
	Please Enter Your Password <br>
	<form action="{{ route('boss_check_password_process') }}" method='post'>
		{{csrf_field()}} 
		<input type="password" name="pass_check">
		<button>Send</button>
	</form>
@endsection