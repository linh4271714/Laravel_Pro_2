@extends('layer.master_boss')
@section('content')
	Enter your current password <br>
	<form action="{{ route('boss_check_password_process_2') }}" method='post'>
		{{csrf_field()}} 
		<input type="password" name="pass_check">
		<button>Send</button>
	</form>
@endsection