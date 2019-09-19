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
	#result {
		height: auto; width: 50%;
		background-color: rgba(255, 255, 0, 0.1);
		color: white;
		position: fixed;
		top: 350px;
		left: 430px;
		float: left;
	}
	#bill {
		width: 50%;
		height: 150px;
		text-align: center;
		margin: auto;
		margin-top: 20px;
		background-color: rgba(255, 0, 0, 0.7);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
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
		<button type="submit">Confirm</button>
	</form>
</center>
</div>
<div id="top"></div>
<div id="result">
	@foreach($array_bill as $bill)
	<div id="bill">
		<form action="{{ route('mng_receive_book_detailed') }}">
			<input type="text" name="ID_bill" value="{{$bill->ID_bill }}" hidden="hidden">
			<table align="center" text-align="center">
				<thead>
					<tr>
						<th></th>
						<th rowspan="2">{{$bill->BorrowDate }}</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td width="20%"><i class="fa fa-user"></i></td>
						<td width="80%">{{$bill->ReaderName }}</td>
					</tr>
					<tr>
						<td><i class="fas fa-money-check-alt"></i></td>
						<td>{{$bill->Total }}</td>
					</tr>
					<tr>
						<td><i class="fas fa-hand-holding"></i></td>
						<td>{{$bill->Username }}</td>
					</tr>
				</tbody>
			</table>
			<br>
			<button type="submit" title="Check"><i class="fas fa-check-circle"></i></button><br>
		</form>
	</div>
	@endforeach
</div>
@endsection