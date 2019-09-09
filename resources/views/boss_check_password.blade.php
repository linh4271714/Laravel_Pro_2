@extends('layer.master_boss')
@section('content')
<div  id="view">
	<font size="3" color="#990000"> Please Enter Your Password </font><br>
	<form action="{{ route('boss_check_password_process') }}" method='post'>
		{{csrf_field()}} 
		<input type="password" name="pass_check">
		<button>Send</button>
	</form>
</div>
@endsection