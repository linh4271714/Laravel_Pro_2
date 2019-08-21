@extends('layer.master_mng')
@section('content')
@foreach($array_publisher as $ca)
	{{$ca->Name}}<br>
@endforeach
@endsection