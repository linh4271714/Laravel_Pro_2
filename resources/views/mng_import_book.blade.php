@extends('layer.master_mng')
@section('content')
<form action="">
{{csrf_field()}} 
Book Name * <input type="text" name="name"><br>
Author * <select name="author">
			@foreach($array_author as $au)
				<option>{{$au->Name}}</option>
			@endforeach
		</select><br>
Category * <select name="category">
			@foreach($array_category as $ca)
				<option>{{$ca->Category}}</option>
			@endforeach
		</select><br>
Publisher * <select name="publisher">
			@foreach($array_publisher as $pu)
				<option>{{$pu->Name}}</option>
			@endforeach
		</select><br>
Price * <input type="number" name="price"><br>
Cover Image <br>
Describe <input type="text" name="demo"><br>
Status * <input type="radio" name="status" value="New" checked="checked">New
		<input type="radio" name="status" value="Old">Old<br>
	<button>Add</button>
</form>
@endsection