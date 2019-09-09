@extends('layer.master_mng')
@section('content')
	NEW BILL <br>
	<form action="{{ route('mng_add_new_bill_total') }}">
		{{csrf_field()}} 
		Name of Customer: <input type="text" name="customer"> <br>
		Number of ID: <input type="number" name="ID"><br>
<<<<<<< HEAD
		The books registered to borrow include: <br>
		<div id="1">
			1/ 
			<select name="book1">
				<option value=""></option>
				@foreach($array_name as $name)
					<option value="{{$name->ID_book}}">
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
					<option value="{{$name->ID_book}}">
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
					<option value="{{$name->ID_book}}">
						{{$name->nameBook}} - {{$name->nameAuthor}} - {{$name->namePublisher}}
					</option>
				@endforeach
			</select>		
			* <input type="number" name="number3">
=======
		The book registered to borrow include: <br>
		<div name="1">
			Name of book: <select>
				@foreach($array_name as $name)
					<option>{{$name->Name}}</option>
				@endforeach
			</select>
			Author: <select>
				@foreach($array_author as $au)
					<option>{{$au->Name}}</option>
				@endforeach
			</select>
			Publisher: <select>
				@foreach($array_publisher as $pub)
					<option>{{$pub->Name}}</option>
				@endforeach
			</select><br>
>>>>>>> 78e0f5a2d1950fc402c614c01cbb3df2114e1cfa
		</div>
		<button type="submit">Checl total</button>
	</form>
@endsection