@extends('layer.master_mng')
@section('content')
	<form action="{{ route('mng_search_process') }}">
		{{csrf_field()}} 
	<input type="text" name="name_book" placeholder="Enter the title of the book">
	<input type="text" name="name_author" placeholder="Enter the name of the author">
	<input type="text" name="name_publisher" placeholder="Enter the name of the publisher">
	<input type="submit" value="Search"><br>
	</form>
	10 books added recently <br><br>
	@foreach($array_book as $book)
		<table>
			<tr>
				<td>
					<img src="image/{{ $book->Image }}" alt="{{ $book->Image }}">
				</td>
				<td>
					{{$book->bookname}}<br>
					Author: {{$book->authorname}}<br>
					Publisher: {{$book->publishername}}<br>
					...<button id="more">Xem thêm</button>
					<div id="less" hidden="hidden">
						Giá bìa: {{$book->Price}} <br>
						Tồn kho: {{$book->Quanlity}}/{{$book->Quanlity}} <br>
						Ngày nhập kho: {{$book->ImportDate}} <br>
						Người nhập: {{$book->Username}}
						<button id="thu">Thu gọn</button>
					</div>
				</td>
			</tr>
		</table>
		<script language="javascript">
            document.getElementById("more").onclick = function () {
                document.getElementById("less").style.display = 'block';
                document.getElementById("more").style.display = 'none';
            };
 
            document.getElementById("thu").onclick = function () {
                document.getElementById("more").style.display = 'block';
                document.getElementById("less").style.display = 'none';
            };
        </script>
	@endforeach
@endsection