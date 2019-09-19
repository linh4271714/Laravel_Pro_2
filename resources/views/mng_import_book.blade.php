@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#import {
		height: 650px; width: 50%;
		background-color: rgba(255, 0, 0, 0.7);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		position: fixed;
		top: 90px;
		left: 430px;
		color: white;
	}
	.td1 {
		width: 30%;		
		height: 40px;
	}
	.td2 {
		width: 70%;
	}
	input, select, textarea, button {
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
	input:hover, select:hover, textarea:hover, button:hover {
		transform: scale(1.2);
	        -webkit-transform: scale(1.2); 
	        -moz-transform: scale(1.2); 
	        -o-transform: scale(1.2);
	        -ms-transform: scale(1.2);
    	cursor: pointer;
	}
	.s1{
		height: 25px;
	}
	.s2{
		height: 20px;
	}
	#demo{
		height: 100px;
		width: 250px;
	}
	a.insert:link {
		color: #f6ff80;
	}
	a.insert:visited {
		color: #f6ff80;
	}
	a.insert:hover {
		color: #45D041;
	}
	a.insert:active {
		color: #52DE5C;
	}
	button {
		height: 30px;
		width: 150px;
	}
	button:hover {
		background-color: #D7B830;
	}
</style>
<div id="import">
	<center>
		<h3>Fill in new book information</h3>
	<form action="{{ route('mng_import_book_process') }}" method="post" enctype="multipart/form-data">
		{{csrf_field()}} 
		<table>
			<tr>
				<td class="td1"><i class="fas fa-list"></i>Category *</td>
				<td class="td2"><select name="category" required class="s1">
						@foreach($array_category as $ca)
							<option value="{{$ca->ID_category}}">{{$ca->Category}}</option>
						@endforeach
					</select><br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					New category? <a href="{{ route('add_category') }}" class="insert">Insert it!</a>
				</td>
			</tr>
			<tr>
				<td class="td1"><i class="fas fa-building"></i>Publisher *</td>
				<td class="td2"><select name="publisher" required class="s1">
						@foreach($array_publisher as $pu)
							<option value="{{$pu->ID_publisher}}">{{$pu->Name}}</option>
						@endforeach
					</select><br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>	
				New publisher? <a href="{{ route('add_publisher') }}" class="insert">Insert it!</a>
				</td>
			</tr>
			<tr>
				<td class="td1"><i class="fas fa-pen-alt"></i>Author *</td>
				<td class="td2">
					<select name="author" required class="s1">
						@foreach($array_author as $au)
							<option value="{{$au->ID_author}}">{{$au->Name}}</option>
						@endforeach
					</select><br>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>	
				New author? <a href="{{ route('add_author') }}" class="insert">Insert it!</a>
				</td>
			</tr>
			<tr>
				<td class="td1"><i class="fas fa-book-open"></i>Book Name *</td>
				<td class="td2"><textarea name="name" required class="s2" style="width: 250px; height: 30px"></textarea></td>
			</tr>
			<tr>
				<td class="td1"><i class="fas fa-dollar-sign"></i>Price *</td>
				<td class="td2"><input type="number" name="price" required class="s2"></td>
			</tr>
			<tr>
				<td class="td1"><i class="fas fa-sort-numeric-up"></i>Quanlity *</td>
				<td class="td2"><input type="number" name="quanlity" required class="s2"></td>
			</tr>
			<tr>
				<td class="td1"><i class="fas fa-images"></i>Cover Image</td>
				<td class="td2"><input type="file" name="image"/></td>
			</tr>
			<tr>
				<td class="td1"><i class="fas fa-font"></i>Describe</td>
				<td class="td2"><textarea name="demo" id="demo"></textarea></td>
			</tr>
			<tr>
				<td class="td1"><i class="fas fa-hand-pointer"></i>Status *</td>
				<td class="td2"><input type="radio" name="status" value="1" checked="checked">New
					<input type="radio" name="status" value="2">Old</td>
			</tr>
		</table>
		<br>
		<button onsubmit="alert('Book added successfully!')"><i class="fas fa-plus"></i>Add this book</button>
	</form>
	</center>
</div>
@endsection