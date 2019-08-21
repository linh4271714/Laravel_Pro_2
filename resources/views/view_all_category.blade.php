@extends('layer.master_mng')
@section('content')
@foreach($array_category as $ca)
	{{$ca->Category}}<br>
@endforeach
@endsection