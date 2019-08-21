@extends('layer.master_mng')
@section('content')
    <form action="{{ route('mng_add_author_process') }}">
		{{csrf_field()}}
		<div id="author1"> 
		  Author Name: <input type="text" name="author1" autofocus="autofocus"><br>
        </div>
        <br/>
        <input type="button" id="btn1" value="+Add" />
		<div id="author2" hidden="hidden"> 
		  Author Name: <input type="text" name="author2"><br>
        </div>
        <br/>
        <input type="button" id="btn2" value="+Add" hidden="hidden"/>
		<div id="author3" hidden="hidden"> 
		  Author Name: <input type="text" name="author3"><br>
        </div>
        <br/>
        <input type="button" id="btn3" value="+Add" hidden="hidden"/>
		<div id="author4" hidden="hidden"> 
		  Author Name: <input type="text" name="author4"><br>
        </div>
        <br/>
        <input type="button" id="btn4" value="+Add" hidden="hidden"/>
		<div id="author5" hidden="hidden"> 
		  Author Name: <input type="text" name="author5"><br>
        </div>
        <br/>
        
        <button>Add Authors</button>

        <script language="javascript">
            document.getElementById("btn1").onclick = function () {
                document.getElementById("author2").style.display = 'block';
                document.getElementById("btn2").style.display = 'block';
                document.getElementById("btn1").style.display = 'none';
            };
 
            document.getElementById("btn2").onclick = function () {
                document.getElementById("author3").style.display = 'block';
                document.getElementById("btn3").style.display = 'block';
                document.getElementById("btn2").style.display = 'none';
            };
 
            document.getElementById("btn3").onclick = function () {
                document.getElementById("author4").style.display = 'block';
                document.getElementById("btn4").style.display = 'block';
                document.getElementById("btn3").style.display = 'none';
            };
 
            document.getElementById("btn4").onclick = function () {
                document.getElementById("author5").style.display = 'block';
                document.getElementById("btn4").style.display = 'none';
            };
 
        </script>
		</form>
@endsection