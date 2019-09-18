@extends('layer.master_mng')
@section('content')
<style type="text/css">
    #add {
        height: 300px; width: 50%;
        color: white;
        background-color: rgba(255, 0, 0, 0.7);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
        z-index: 1;
        position: fixed;
        top: 150px;
        left: 430px;
        text-align: center;
    }
    </style>
    <div id="add">
@foreach($array_publisher as $ca)
	{{$ca->Name}}<br><br>
@endforeach
    </div>
@endsection