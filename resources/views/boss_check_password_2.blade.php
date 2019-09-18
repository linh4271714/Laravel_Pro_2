@extends('layer.master_boss')
@section('content')
<center>
<div>
	<font size="3" color="#990000">Enter Your Current Password</font> <br>
	<form action="{{ route('boss_check_password_process_2') }}" method='post'>
		{{csrf_field()}} 
		<input type="password" name="pass_check">
		<button>Send</button>
	</form>
</div>
</center>
@endsection