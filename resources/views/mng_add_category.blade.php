@extends('layer.master_mng')
@section('content')
		<form action="{{ route('mng_add_category_process') }}">
		{{csrf_field()}}
		<div id="category1"> 
		  Category Name: <input type="text" name="category1"><br>
        </div>
        <br/>
        <input type="button" id="btn1" value="+Add"/>
		<div id="category2"> 
		  Category Name: <input type="text" name="category2"><br>
        </div>
        <br/>
        <input type="button" id="btn2" value="+Add"/>
		<div id="category3"> 
		  Category Name: <input type="text" name="category3"><br>
        </div>
        <br/>
        <input type="button" id="btn3" value="+Add"/>
		<div id="category4"> 
		  Category Name: <input type="text" name="category4"><br>
        </div>
        <br/>
        <input type="button" id="btn4" value="+Add"/>
		<div id="category5"> 
		  Category Name: <input type="text" name="category5"><br>
        </div>
        <br/>
 
        <script language="javascript">
 
            document.getElementById("btn1").onclick = function () {
                document.getElementById("category2").style.display = 'block';
            };
 
            document.getElementById("btn2").onclick = function () {
                document.getElementById("category3").style.display = 'block';
            };
 
            document.getElementById("btn3").onclick = function () {
                document.getElementById("category4").style.display = 'block';
            };
 
            document.getElementById("btn4").onclick = function () {
                document.getElementById("category5").style.display = 'block';
            };
 
        </script>
		</form>
@endsection