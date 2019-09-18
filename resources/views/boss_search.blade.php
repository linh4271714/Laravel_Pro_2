@extends('layer.master_boss')
@section('content')
	<form action="{{ route('boss_search_process') }}">
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
					<img src="{{asset($book->Image)}}" alt="{{ $book->Image }}" class="image">
				</td>
				<td>
					{{$book->bookname}}<br>
					Author: {{$book->authorname}}<br>
					Publisher: {{$book->publishername}}<br>
					...<button class="more">Xem thêm</button>
					<div class="less" hidden="hidden">
						Giá bìa: {{$book->Price}} <br>
						Tồn kho: {{$book->Quanlity}}/{{$book->Quanlity}} <br>
						Ngày nhập kho: {{$book->ImportDate}} <br>
						Người nhập: {{$book->Username}}
						<button class="thu">Thu gọn</button>
					</div>
				</td>
			</tr>
		</table>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script language="javascript">
			var global;
            $(document).ready(function () {
                $(".more").click(function (e) {
					e.target.style.display="none";
                    e.target.parentNode.childNodes[9].style.display="block";
                })
                $(".less").click(function (e) {
					e.target.parentElement.parentElement.children[3].style.display="block"
                    e.target.parentElement.style.display="none"
					console.log(e.target.parentElement.parentElement);
                })
            })

            // document.getElementsByClassName("more")[0].onclick = function (e) {
            //     console.log("Dsad");
            //     console.log(e);
            //     // document.getElementById("less").style.display = 'block';
            //     // document.getElementById("more").style.display = 'none';
            // };

            // document.getElementsByClassName("thu").onclick = function () {
            //     document.getElementById("more").style.display = 'block';
            //     document.getElementById("less").style.display = 'none';
            // };

        </script>
	@endforeach
@endsection