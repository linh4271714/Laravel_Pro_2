@extends('layer.master_mng')
@section('content')
Bạn đã nhập thành công!
<br>
Chi tiết:
<br>
	@foreach($array_book as $book)
		<font color="red"> {{$book->Name}} </font><br>
		<img src="../../public/image/{{$book->Image}}"> <br>
		<font color="green">Author</font> {{$book->Author}}<br>

 		<font color="green">Publisher</font> {{$book->Publisher}}<br>

 		<font color="green">The category belongs to </font>{{$book->Category}}<br>

 		<font color="green">Cover price</font> {{$book->Price}} <font color="green">VND</font><br>

 		<font color="green">Total amount:</font> {{$book->Quanlity}} <font color="green">books</font> <br>

		<font color="green">Book placement in the library:</font> {{$book->Location}} <br>

 		<font color="green">Description of content:</font> 
			<table width=30%><tr><td>{{$book->Demo}}</td></tr></table>
 		 
 		<br>

 		<font color="green">Book state:</font>
 			 @if($book->Status==1) 
				<?php echo('New'); ?>
 			 @endif
 			 @if($book->Status==2)
				<?php echo('Old'); ?>
 			 @endif
 			 @if($book->Status==3)
				<?php echo('Books have shortcomings'); ?>
 			 @endif
 			 <br>

 		<font color="green">Specific damage status (if any):</font> {{$book->Damage}}<br>

 		<font color="green">Date of entry into the warehouse:</font> {{$book->ImportDate}}<br>

 		<font color="green">The manager import books into warehouses</font> {{$book->Manager}}<br>
	@endforeach
	<br>
	<a href="{{ route('import_book') }}">Add Another Book</a>
@endsection