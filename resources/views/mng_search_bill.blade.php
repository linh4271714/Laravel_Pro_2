@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#form_search_bill {
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
		position: fixed;
		top: 320px;
		left: 390px;
		height: auto; width: 810px;
		background-color: rgba(255, 0, 0, 0.7);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		color: white;
	}
	table {
		width: 100%
		text-align: center;
	}
	input {
		height: 30px;
		width: 200px;
	}
	button {
		height: 30px;
		width: 130px;
		transition-duration: 0.1s;
        /* Safari */
        -webkit-transition-duration: 0.1s; 
        /* Mozilla Firefox */
        -moz-transition-duration: 0.1s; 
        /* Opera */
        -o-transition-duration: 0.1s;
        /* IE 9 */
        -ms-transition-duration: 0.1s;
	}
	button:hover {
		background-color: #D7B830;
		transform: scale(1.2);
	        -webkit-transform: scale(1.2); 
	        -moz-transform: scale(1.2); 
	        -o-transform: scale(1.2);
	        -ms-transform: scale(1.2);
    	cursor: pointer;
	}
</style>
<div id="form_search_bill">
	<center>
		Search by<br>
	<form action="{{ route('mng_search_bill_process') }}">
		{{csrf_field()}} 
		<br><br>
		<input type="text" name="ID" placeholder="   ID customer" >
		<input type="text" name="bd" placeholder="   borrow date" >
		<input type="text" name="rd" placeholder="   receive date" >
		<br><br>
		<button type="submit">Search</button><br>
	</form>
</center>
</div>

<div id="result">
	<table cellspacing="20px">
		<thead>
			<tr>
				<th width="5%">ID Bill</th>
				<th width="20%">Borrow Date</th>
				<th width="35%">Reader Name</th>
				<th width="30%">Status</th>
				<th width="10%">See details</th>
			</tr>
		</thead>
		<tbody>
			@foreach($array_bill as $bill)
			<tr style="text-align: center;">
				<td>{{$bill->ID_bill}}</td>
				<td>{{$bill->BorrowDate}}</td>
				<td>{{$bill->ReaderName}}</td>
				<td>{{$bill->Status}}</td>
				<td><i class="fas fa-angle-double-right" title="See details"></i></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection