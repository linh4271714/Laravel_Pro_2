@extends('layer.master_mng')
@section('content')
	NEW BILL <br>
	<form action="">
		{{csrf_field()}} 
		Name of Customer: <input type="text" name="customer"> <br>
		Number of ID: <input type="number" name="ID"><br>
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
		</div>
	</form>
@endsection