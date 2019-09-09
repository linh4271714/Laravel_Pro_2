@extends('layer.master_mng')
@section('content')
	NEW BILL <br>
	<form action="">
		{{csrf_field()}} 
		Name of Customer: <input type="text" name="customer"> <br>
		Number of ID: <input type="number" name="ID"><br>
		Phone Number: <input type="number" name="phone"><br>
		The books registered to borrow include (max is 3 books): <br>
		<div id ="1">
			The book 1: <select>
					<option value=""></option>
				@foreach($array_name as $name)
					<option value="{{$name->ID_book}}">{{$name->nameBook}}_{{$name->nameAuthor}}_{{$name->namePublisher}}</option>
				@endforeach
			</select>
			Amout: <input type="number" name="sl1"><br>
		</div>
        <br/>
        <input type="button" id="btn1" value="+Add" />
		<div id ="2" hidden="hidden">
			The book 2: <select>
					<option value=''></option>
				@foreach($array_name as $name)
					<option value="{{$name->ID_book}}">{{$name->nameBook}}_{{$name->nameAuthor}}_{{$name->namePublisher}}</option>
				@endforeach
			</select>

			Amout: <input type="number" name=""><br>
		</div>
        <br/>
        <input type="button" id="btn2" value="+Add" hidden="hidden"/>
		<div id ="3" hidden="hidden">
			The book 3: <select>
					<option value=" "></option>
				@foreach($array_name as $name)
					<option value="{{$name->ID_book}}">{{$name->nameBook}}_{{$name->nameAuthor}}_{{$name->namePublisher}}</option>
				@endforeach
			</select>
			Amout: <input type="number" name="">
		</div>
	</form>

	<script language="javascript">
            document.getElementById("btn1").onclick = function () {
            	if (document.getElementById('sl1').value < 3)
            	{
	                document.getElementById("2").style.display = 'block';
	                document.getElementById("btn2").style.display = 'block';
	                document.getElementById("btn1").style.display = 'none';
            	}
            };
 
            document.getElementById("btn2").onclick = function () {
                document.getElementById("3").style.display = 'block';
                document.getElementById("btn2").style.display = 'none';
            };
 
        </script>
@endsection