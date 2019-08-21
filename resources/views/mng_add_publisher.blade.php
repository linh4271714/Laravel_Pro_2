@extends('layer.master_mng')
@section('content')
    <form action="{{ route('mng_add_publisher_process') }}">
		{{csrf_field()}}
		<div id="publisher1"> 
		  Publisher Name: <input type="text" name="publisher1" autofocus="autofocus"><br>
        </div>
        <br/>
        <input type="button" id="btn1" value="+Add" />
		<div id="publisher2" hidden="hidden"> 
		  Publisher Name: <input type="text" name="publisher2"><br>
        </div>
        <br/>
        <input type="button" id="btn2" value="+Add" hidden="hidden"/>
		<div id="publisher3" hidden="hidden"> 
		  Publisher Name: <input type="text" name="publisher3"><br>
        </div>
        <br/>
        <input type="button" id="btn3" value="+Add" hidden="hidden"/>
		<div id="publisher4" hidden="hidden"> 
		  Publisher Name: <input type="text" name="publisher4"><br>
        </div>
        <br/>
        <input type="button" id="btn4" value="+Add" hidden="hidden"/>
		<div id="publisher5" hidden="hidden"> 
		  Publisher Name: <input type="text" name="publisher5"><br>
        </div>
        <br/>
        
        <button>Add Publisher</button>

        <script language="javascript">
            document.getElementById("btn1").onclick = function () {
                document.getElementById("publisher2").style.display = 'block';
                document.getElementById("btn2").style.display = 'block';
                document.getElementById("btn1").style.display = 'none';
            };
 
            document.getElementById("btn2").onclick = function () {
                document.getElementById("publisher3").style.display = 'block';
                document.getElementById("btn3").style.display = 'block';
                document.getElementById("btn2").style.display = 'none';
            };
 
            document.getElementById("btn3").onclick = function () {
                document.getElementById("publisher4").style.display = 'block';
                document.getElementById("btn4").style.display = 'block';
                document.getElementById("btn3").style.display = 'none';
            };
 
            document.getElementById("btn4").onclick = function () {
                document.getElementById("publisher5").style.display = 'block';
                document.getElementById("btn4").style.display = 'none';
            };
 
        </script>
		</form>
@endsection