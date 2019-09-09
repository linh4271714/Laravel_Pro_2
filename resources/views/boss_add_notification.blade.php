@extends('layer.master_boss')
@section('content')
<div id="view">
<form action="{{ route('boss_add_notification_process') }}" method='post'>
{{csrf_field()}} 
Title: <input type="text" name="title"><br>
Content: <textarea name="content"></textarea><bt>
	<BUTTON>Post</BUTTON>
</form>
</div>
@endsection