@extends('layer.master_mng')
@section('content')
<style type="text/css">
	#search {
		height: auto; width: 90%;
		background-color: rgba(255, 0, 0, 0.7);
		color: white ;	
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
	}
	#form {
		position: fixed;
		height: 150px;
		top: 0;
		left: 540px;
		background-color: black;
	}
	input.search {
		height: 30px;
		width: 200px;
	}
	#between {
		float: left;
		width: 100%;
		height: 140px;
	}
	#result {
		height: 1000px;
	}
	.image {
		width: 200px;
		padding: 10px;
	}
	.infor {
			width: 500px;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-left: 20px;
	}
</style>
<div id="search">
	<div id="form">
		<br><br><br>
		<center>
			<form action="{{ route('mng_search_process') }}">
				{{csrf_field()}}
			<input type="text" name="name_book" placeholder="Enter the title of the book" class="search">
			<input type="text" name="name_author" placeholder="Enter the name of the author" class="search">
			<input type="text" name="name_publisher" placeholder="Enter the name of the publisher" class="search">
			<br><br>
			<input type="submit" value="Search" style="width: 70px; height: 30px; background-color: yellow"><br>
			</form>
	    </center>
	</div>
	<div id="between"></div>
	<div id="result">
		<center>
			.<br><br><br>
			<h3>So sorry, there are no result!</h3>
			<br><br><br>.
		</center>
	</div>
@endsection