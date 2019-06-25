@extends('layer.master_boss')
@section('content')
<form action="{{ route('boss_add_manager_process') }}">
{{csrf_field()}} 
Username: <input type="text" name="userName">
Email: <input type="text" name="email">
Password: <input type="text" name="pass">
Phone Number: <input type="number" name="phone">
Address: <input type="text" name="add">
<button>Add</button>
</form>
@endsection