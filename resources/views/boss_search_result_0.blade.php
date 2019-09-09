@extends('layer.master_boss')
@section('content')
	<form action="{{ route('boss_search_process') }}">
	<input type="text" name="name_book" placeholder="Enter the title of the book">
	<input type="text" name="name_author" placeholder="Enter the name of the author">
	<input type="text" name="name_publisher" placeholder="Enter the name of the publisher">
	<button>Search</button><br>
	</form>
	So sorry, there are no result!
@endsection