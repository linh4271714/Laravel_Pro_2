@extends('layer.master_boss')
@section('content')
<div  id="view">
<table>
<tr>
	<th colspan="2" style="text-align: center">
		<font size="3" color="#BB0000">Edit Accout</font>
	</th>
</tr>
<form action="{{ route('boss_edit_accout_process') }}" method='post'>
	{{csrf_field()}} 
	@foreach ($array_boss as $boss)
		<tr>
			<td>User Name : </td>
			<td><input type="text" name="userName" value="{{$boss->Username}}"> </td>
		</tr>
		<tr>
			<td>Email : </td>
			<td><input type="text" name="email" value="{{$boss->Email}}"> </td>
		</tr>
		<tr>	
			<td>Phone Number : </td>
			<td><input type="number" name="phone" value="{{$boss->PhoneNumber}}"></td>
		</tr>
	@endforeach
	<tr>
		<td colspan="2" style="text-align:right;"><button>Edit</button></td>
	</tr>
</form>
</table>
</div>
@endsection