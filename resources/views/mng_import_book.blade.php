@extends('layer.master_mng')
@section('content')
	<form action="{{ route('mng_import_book_process') }}" method="post">
		{{csrf_field()}} 
		
			Category * <select name="category">
						@foreach($array_category as $ca)
							<option value="{{$ca->ID_category}}">{{$ca->Category}}</option>
						@endforeach
					</select><br>
				New category? <a href="{{ route('add_category') }}">Insert it!</a><br>

			Publisher * <select name="publisher">
						@foreach($array_publisher as $pu)
							<option value="{{$pu->ID_publisher}}">{{$pu->Name}}</option>
						@endforeach
					</select><br>
				New publisher? <a href="{{ route('add_publisher') }}">Insert it!</a><br>

			Book Name * <input type="text" name="name"><br>

			Author * <select name="author">
						@foreach($array_author as $au)
							<option value="{{$au->ID_author}}">{{$au->Name}}</option>
						@endforeach
					</select><br>
				New author? <a href="{{ route('add_author') }}">Insert it!</a><br>

			Price * <input type="number" name="price"><br>

			Quanlity * <input type="number" name="quanlity"><br>

			Cover Image <input type="file" name="image"/><br> 

			Describe <input type="textarea" name="demo"><br>

			Status * <input type="radio" name="status" value="1" checked="checked">New
					<input type="radio" name="status" value="2">Old<br>

		<button>Add this book</button>
	</form>
@endsection