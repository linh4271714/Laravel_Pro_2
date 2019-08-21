@extends('layer.master_mng')
@section('content')
@foreach($array_author as $ca)
	{{$ca->Name}}<br>
@endforeach
@endsection