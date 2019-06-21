@extends('layer.master')
@section('content')
		Edit Accout <br>
		<form action="{{ route('boss_change_password_process') }}" method='post'>
			{{csrf_field()}}
			New password: <input type="password" name="pass"><br>
			Re-enter password: <input type="password" name="repass"><br>
			<button>Change</button>
		</form>
@endsection