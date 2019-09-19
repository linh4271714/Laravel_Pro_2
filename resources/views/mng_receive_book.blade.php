@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#form_receive {
		height: 150px; width: 50%;
		background-color: rgba(255, 0, 0, 0.7);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		color: white;
		position: fixed;
		top: 150px;
		left: 430px;
	}
	input {
		height: 30px;
		width: 200px;
	}
	button {
		height: 30px;
		width: 130px;
	}
	button:hover {
		background-color: #D7B830;
	}
</style>
<div id="form_receive">
	<center>
	<form action="{{ route('mng_receive_book_process') }}">
		{{csrf_field()}} 
		<br><br>
		Enter the customer's ID <i class="fas fa-id-card"></i>  <input type="text" name="ID" required><br><br>
		<button type="submit">Confirm</button><br>
	</form>
</center>
</div>
@endsection