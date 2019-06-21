@extends('layer.menu')
Edit Accout <br>
<form action="{{ route('boss_edit_accout_process') }}" method='post'>
	{{csrf_field()}} 
	@foreach ($array_boss as $boss)
		User Name : <input type="text" name="userName" value="{{$boss->Username}}"> <br>
		Email : <input type="text" name="email" value="{{$boss->Email}}"> <br>
		Phone Number : <input type="number" name="phone" value="{{$boss->PhoneNumber}}"><br>
	@endforeach
	<button>Edit</button>
</form>