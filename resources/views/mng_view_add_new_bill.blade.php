@extends('layer.master_mng')
@section('content')
	NEW BILL <br>
	<form action="{{ route('mng_add_new_bill_process') }}" id="formAddNewBill">
		{{csrf_field()}}
		Name of Customer: <input type="text" name="customer"> <br>
<<<<<<< HEAD
		Number of ID: <input type="text" name="ID"><br>
=======
		Number of ID: <input type="number" name="ID"><br>
>>>>>>> a301c7fe077e177bf8667e4a6ef5b1fbe350ae57
		The books registered to borrow (max is 3) include: <br>
		<div id="1">
			1/
			<select name="book1">
				<option value=""></option>
				@foreach($array_name as $name)
                <option value="{{$name->ID_book}}" data-deposit="{{$name->Price}}">
						{{$name->nameBook}} - {{$name->nameAuthor}} - {{$name->namePublisher}}
					</option>
				@endforeach
			</select>
			* <input type="number" name="number1">
		</div>
		<div id="2">
			2/
			<select name="book2">
				<option value=""></option>
				@foreach($array_name as $name)
					<option value="{{$name->ID_book}}" data-deposit="{{$name->Price}}">
						{{$name->nameBook}} - {{$name->nameAuthor}} - {{$name->namePublisher}}
					</option>
				@endforeach
			</select>
			* <input type="number" name="number2">
		</div>
		<div id="3">
			3/
			<select name="book3">
				<option value=""></option>
				@foreach($array_name as $name)
					<option value="{{$name->ID_book}}" data-deposit="{{$name->Price}}">
						{{$name->nameBook}} - {{$name->nameAuthor}} - {{$name->namePublisher}}
					</option>
				@endforeach
<<<<<<< HEAD
			</select>
			* <input type="number" name="number3">
        </div>
        <h4 id="totalPrice">Total deposit (equal to 50% of the original price):  <span name="">0</span></h4>
		<button type="submit">Submit</button>
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
            var showPrice=$("#totalPrice span");
            var total=0;
            for (let index = 0; index < listSelect.length; index++) {
                if(listAmount[index].value!=''  && listSelect[index].value!=''){
                    total = total+parseInt($(listSelect[index]).find(":selected").attr("data-deposit"))*listAmount[index].value/2;
                }

            }
            showPrice.html(total);
        }
        processChangeValue();
    </script>
=======
			</select>		
			* <input type="number" name="number3">
		</div>
		<button type="submit">Check total</button>
	</form>
>>>>>>> a301c7fe077e177bf8667e4a6ef5b1fbe350ae57
@endsection