@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#detailed {
		height: auto; width: 50%;
		background-color: rgba(255, 0, 0, 0.7);
		color: white ;
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		position: fixed;
		top: 200px;
		left: 430px;
	}
	table {
		width: 70%;
		height: 100px;
		text-align: center;

	}
	#info {
		text-align: center;
	}
</style>
<div id="detailed">
		<form action="">
			<table border="1" align="center" >
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
			<div id="info"> 
            Total time borrowed: {{$bill->soNgayMuon}} day(s)
            <br><br>
            The total amount to be paid: {{$bill->soNgayMuon*2000}} VND
            <br><br>
            Total deposit: {{$bill->Total}} VND
            <br><br>
            Total refunded: @if ($bill->Total - $bill->soNgayMuon*2000 > 0)
                {{$bill->Total-$bill->soNgayMuon*2000}}
            @else
                0
            @endif
            VND
            <br><br>
            Total amount paid extra by the guest: @if ($bill->Total-$bill->soNgayMuon*2>0)
                0
            @else
                {{$bill->soNgayMuon*2000-$bill->Total}}
            @endif
            VND
            <br><br><br>
			<button type="submit" title="Check"><i class="fas fa-check-circle"></i></button>
			<br><br>
        </div>
		</form>
</div>
@endsection