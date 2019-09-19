@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#detailed {
		height: auto; width: 90%;
		background-color: rgba(255, 0, 0, 0.7);
		color: white ;	
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		position: fixed;
		top: 200px;
		left: 430px;
	}
</style>
<div id="detailed">
		<form action="">
			<table>
				<tr>
					<td>
						The Title
					</td>
					<td>
						Amount
					</td>
				</tr>
				@foreach($array_detailed as $bill)
				<input type="text" name="ID_bill" value="{{$bill->ID_bill }}" hidden="hidden">
				<tr>
					<td>
						{{$bill->Name }}
					</td>
					<td>
						{{$bill->Amount }}
					</td>
				</tr>
			@endforeach
			</table>
			<br><br>
			Total time borrowed: 
			The total amount to be paid: 
			Total deposit:
			

			<button type="submit" title="Check"><i class="fas fa-check-circle"></i></button>
		</form>
</div>
@endsection