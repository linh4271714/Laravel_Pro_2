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
		    <h4>10 books added recently</h4> <br>
			@foreach($array_book as $book)
				<table>
					<tr>
						<td >
							<img src="{{asset($book->Image)}}" alt="{{ $book->Image }}" class="image">
						</td>
						<td class="infor">
							-.-{{$book->bookname}}-.-<br>
							Author: {{$book->authorname}}<br>
							Publisher: {{$book->publishername}}<br>
							<button class="more">...Xem thêm</button>
							<div class="less" hidden="hidden">
								Giá bìa: {{$book->Price}} <br>
								Tồn kho: {{$book->Quanlity}}/{{$book->Quanlity}} <br>
								Ngày nhập kho: {{$book->ImportDate}} <br>
								Người nhập: {{$book->Username}}<br>
								<button class="thu">Thu gọn</button>
							</div>
						</td>
					</tr>
		        </table>
		    @endforeach
		</center>
	</div>
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
</div>
@endsection