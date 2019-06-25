@extends('layer.master_mng')
@section('content')
		Change Password <br>
		<form action="{{ route('mng_change_password_process') }}" method='post'>
			{{csrf_field()}}
			New password: <input type="password" name="pass"><br>
			Re-enter password: <input type="password" name="repass"><br>
			<button>Change</button>
		</form>
@endsection