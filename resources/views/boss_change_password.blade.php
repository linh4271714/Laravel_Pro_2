@extends('layer.master_boss')
@section('content')
<div id="view">
<table>
<tr>
	<th colspan="2" style="text-align: center">
		<font size="3" color="#BB0000">Edit Accout</font>
	</th>
</tr>
<form action="{{ route('boss_change_password_process') }}" method='post'>
			{{csrf_field()}}
		<tr>
			<td>New password: </td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td>Re-enter password: </td>
			<td><input type="password" name="repass"></td>
		</tr>
<tr>
		<td colspan="2" style="text-align:right;"><button>Change</button></td>
</tr>
</form>
</div>
@endsection