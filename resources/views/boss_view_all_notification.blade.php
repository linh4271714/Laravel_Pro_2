@extends('layer.master_boss')
@section('content')
<table>
	<tr>
		<th>Thông báo này được đăng vào lúc</th>
		<th>Tiêu đề</th>
		<th>Nội dung chính</th>
	</tr>
	@foreach($array_notification as $a)
		<td>{{$a->Date}}</td>
		<td>{{$a->Title}}</td>
		<td>{{$a->Content}}</td>
	@endforeach
</table>

@endsection