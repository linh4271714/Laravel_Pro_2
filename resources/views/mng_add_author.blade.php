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
    }
    button {
        height: 30px;
        width: 130px;
    }
    button:hover {
        background-color: #D7B830;
    }
    input.add {
        height: 25px;
        width: 60px;
    }
    input.add:hover {
        background-color: #D7B830;
    }
    input.au {
        height: 25px;
        width: 250px;
    }
</style>
<div id="add">
    <center>
    <form action="{{ route('mng_add_author_process') }}">
		{{csrf_field()}}
		<div id="author1"> 
		  1/ Author Name: <input type="text" name="author1" autofocus="autofocus" class="au" required>*<br>
        </div>
        <br/>
        <input type="button" id="btn1" value="+Add" class="add" />
		<div id="author2" hidden="hidden"> 
		  2/ Author Name: <input type="text" name="author2" class="au"><br>
        </div>
        <br/>
        <input type="button" id="btn2" value="+Add" hidden="hidden" class="add"/>
		<div id="author3" hidden="hidden"> 
		  3/ Author Name: <input type="text" name="author3" class="au"><br>
        </div>
        <br/>
        <input type="button" id="btn3" value="+Add" hidden="hidden" class="add"/>
		<div id="author4" hidden="hidden"> 
		  4/ Author Name: <input type="text" name="author4" class="au"><br>
        </div>
        <br/>
        <input type="button" id="btn4" value="+Add" hidden="hidden" class="add"/>
		<div id="author5" hidden="hidden"> 
		  5/ Author Name: <input type="text" name="author5" class="au"><br>
        </div>
        <br/>
        
        <button onsubmit="alert('The authors has added success!')">Add Authors</button>

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
    </center>
</div>
@endsection