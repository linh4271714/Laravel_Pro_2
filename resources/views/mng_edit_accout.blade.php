@extends('layer.master_mng')
@section('content')
Edit Accout <br>
<form action="{{ route('mng_edit_accout_process') }}" method='post'>
	{{csrf_field()}} 
	@foreach ($array_mng as $mng)
		User Name : <input type="text" name="userName" value="{{$mng->Username}}"> <br>
		Email : <input type="text" name="email" value="{{$mng->Email}}"> <br>
		Phone Number : <input type="number" name="phone" value="{{$mng->PhoneNumber}}"><br>
		Address : <input type="text" name="add" value="{{$mng->Address}}"><br>
	@endforeach
	<button>Edit</button>
</form>
@endsection