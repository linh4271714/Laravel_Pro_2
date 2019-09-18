@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#addnewbill {
		height: 360px; width: 50%;
		background-color: rgba(255, 0, 0, 0.7);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		position: fixed;
		top: 90px;
		left: 430px;
	}
	table#customer{
		width: 70%;
		height: 100px;
	}
	input.customer {
		height: 25px;
		width: 70%;
	}
	select.book{
		height: 25px;
		width: 300px;
	}
	input.amount {
		height: 20px;
		width: 50px;
	}
	#customer {
		color: white;
	}
	#list {
		color: white;
		float: left;
		width: 70%;
	}
	#deposit {
		color: white;
		float: left;
		width: 20%;
	}
	button {
		height: 30px;
		width: 130px;
	}
	button:hover {
		background-color: #D7B830;
	}
</style>
<center>
<div id="addnewbill">
	<br>
	<form action="{{ route('mng_add_new_bill_process') }}" id="formAddNewBill">
		{{csrf_field()}}
		<table id="customer">
			<tr>
				<td width="30%">Name of Customer</td>
				<td width="70%"><input class="customer" type="text" name="customer" required></td>
			</tr>
				<tr>
					<td>Number of ID</td>
					<td><input class="customer" type="text" name="ID" required pattern="^[0-9]+$"></td>
			</tr>
		</table>
		<div id="list">
			<h4>List of books to be borrowed</h4>
			<div id="1">
				1/
				<select name="book1" class="book" required>
					<option value=""></option>
					@foreach($array_name as $name)
	                <option value="{{$name->ID_book}}" data-deposit="{{$name->Price}}">
							{{$name->nameBook}} - {{$name->nameAuthor}} - {{$name->namePublisher}}
						</option>
					@endforeach
				</select>
				* <input type="number" name="number1" class="amount" required min="0" max="3">
			</div>
			<div id="2">
				2/
				<select name="book2" class="book">
					<option value=""></option>
					@foreach($array_name as $name)
						<option value="{{$name->ID_book}}" data-deposit="{{$name->Price}}">
							{{$name->nameBook}} - {{$name->nameAuthor}} - {{$name->namePublisher}}
						</option>
					@endforeach
				</select>
				* <input type="number" name="number2" class="amount" min="0" max="3">
			</div>
			<div id="3">
				3/
				<select name="book3" class="book">
					<option value=""></option>
					@foreach($array_name as $name)
						<option value="{{$name->ID_book}}" data-deposit="{{$name->Price}}">
							{{$name->nameBook}} - {{$name->nameAuthor}} - {{$name->namePublisher}}
						</option>
					@endforeach
				</select>
				* <input type="number" name="number3" class="amount" min="0" max="3">
	        </div>
	    </div>
	    <br>
        <div id="deposit">
        	<h4 id="totalPrice">Total deposit (equal to 50% of the original price):  
        		<input type="number" name="total" value="0" style="color: red; border-style: solid; border-color: rgba(255,255,255, 0.1); background-color: rgba(255,255,255, 0.1);"/>
        	</h4>
    	</div>
    	<br><br><br>
		<div><button type="submit" onsubmit ="alert('Create invoice successfully!')" >Submit</button></div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function processChangeValue(){
            $("#formAddNewBill select").change(function () {
                updateTotalPrice();
            })
            $("#formAddNewBill input[type='number']").change(function () {
                if(this.value<0){
                    alert("Amount must be more than zero");
                    this.value=null;
                }
                if(this.value>=3){
                    alert("Amount must be less than 3");
                    this.value=null;
                }
                if(isNaN(this.value)){
					alert("Amount must be integer");
                    this.value=null;
				}else{
                    updateTotalPrice();
                }
            })

        }
        function updateTotalPrice() {
            var listSelect=$("#formAddNewBill div select");
            var listAmount=$("#formAddNewBill div input[type='number']");
            var showPrice=$("#totalPrice input[type='number']");
            var total=0;
            for (let index = 0; index < listSelect.length; index++) {
                if(listAmount[index].value!=''  && listSelect[index].value!=''){
                    total = total+parseInt($(listSelect[index]).find(":selected").attr("data-deposit"))*listAmount[index].value/2;
                }

            }
            showPrice.val(total);
        }
        processChangeValue();
    </script>
</div>
</center>
@endsection