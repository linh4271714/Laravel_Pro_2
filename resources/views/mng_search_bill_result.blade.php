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
		height: auto; width: 850px;
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
		<i class="fas fa-search"></i>Search for bills by<br>
	<form action="{{ route('mng_search_bill_process') }}">
		{{csrf_field()}} 
		<br><br>
		<input type="number" name="ID" placeholder="   ID customer" >
		<input type="text" name="bd" placeholder="   borrow date" >
		<input type="text" name="rd" placeholder="   return date" >
		<br><br>
		<button type="submit"><i class="fas fa-search"></i>Search</button><br>
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
				<td class="seeDetail" ><i class="fas fa-angle-double-right" data-id="{{$bill->ID_bill}}" data-status="0" title="See details"></i></td>
            </tr>
            <tr class="hiddenInfor {{$bill->ID_bill}}" >
                <th colspan="5">
                    <table style="width:100%;background-color:deepskyblue">
                        {{-- <tr>
                            <th>Tên sách </th>
                            <th>Số lượng</th>
                            <th>Ngày mượn </th>
                            <th>Ngày trả</th>
                            <th>Tiền cọc</th>
                            <th>Người cho thuê</th>
                            <th>Tổng tiền hóa đơn</th>
                        </tr> --}}
                    </table>
                </th>
            </tr>
			@endforeach
		</tbody>
	</table>
</div>
<script>
    $(document).ready(function () {
        $(".seeDetail").click(function (e) {

            var elementTarget=$(".hiddenInfor."+e.target.getAttribute("data-id")+" th table");
            console.log(elementTarget);
            var elementTarget2=$(".hiddenInfor."+e.target.getAttribute("data-id"));

            if(e.target.getAttribute("data-status")==0){


            $(".hiddenInfor").slideUp();
            $.ajax({
                type: "post",
                url: "{{route('detail_process')}}",
                data: {id:e.target.getAttribute("data-id"),"_token":"{{csrf_token()}}"},
                success: function (response) {

                    $(elementTarget).html("");
                    if(response.length>0){
						$(elementTarget).append("<tr><th>Tên sách </th><th>Số lượng</th><th>Ngày mượn </th><th>Ngày trả</th><th>Tiền cọc</th><th>Người cho thuê</th><th>Tổng tiền hóa đơn</th></tr>");
                        for (let i = 0; i < response.length; i++) {


							if(i==0){
								$(elementTarget).append("<tr><td>"+response[i].Name+"</td>"+
                                "<td>"+response[i].Amount+"</td>"+
                                "<td rowspan='"+response.length+"'>"+response[i].BorrowDate+"</td>"+
                                "<td rowspan='"+response.length+"'>"+response[i].ReturnDate+"</td>"+
                                "<td rowspan='"+response.length+"'>"+response[i].Total+"</td>"+
                                "<td>"+response[i].Username+"</td>"+
                                "<td>"+response[i].tongGiaTriHoaDon+"</td></tr>");
							}else{
								$(elementTarget).append("<tr><td>"+response[i].Name+"</td>"+
                                "<td>"+response[i].Amount+"</td>"+
                                "<td>"+response[i].Username+"</td>"+
                                "<td>"+response[i].tongGiaTriHoaDon+"</td></tr>");
							}


                        }
                        // $(elementTarget).append("<td>"+response[0].Amount+"</td>");
                        // $(elementTarget).append("<td>"+response[0].BorrowDate+"</td>");
                        // $(elementTarget).append("<td>"+response[0].ReturnDate+"</td>");
                        // $(elementTarget).append("<td>"+response[0].Total+"</td>");
                        // $(elementTarget).append("<td>"+response[0].Username+"</td>");
                        // $(elementTarget).append("<td>"+response[0].tongGiaTriHoaDon+"</td></tr>");
                        e.target.setAttribute('data-status','1');
                        $(elementTarget2).slideDown();
                    }else{
                        $(elementTarget).append("<td colspan='6'>Chưa có thông tin</td>");
                        e.target.setAttribute('data-status','1');
                        $(elementTarget2).slideDown();
                    }
                }
            });
            }else{
                $(elementTarget2).slideUp();
                e.target.setAttribute('data-status','0');
            }
        })
        $(".hiddenInfor").slideUp();
    })
</script>
@endsection