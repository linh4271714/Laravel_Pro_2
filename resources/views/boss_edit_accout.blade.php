@extends('layer.master_boss')
@section('content')

<div class="col-md-10">
    <div class="card">
        <form id="loginFormValidation" action="{{ route('boss_edit_accout_process') }}" method="post" novalidate="">
            <div class="header text-center">Edit Account</div>
                <div class="content">                    
						{{csrf_field()}} 
                        @foreach ($array_boss as $boss)
                        <div class="form-group">
                            <label class="control-label">User Name : </label>
                            <input class="form-control" name="userName" type="text" required="true" value="{{$boss->Username}}" />
                        </div>
						<div class="form-group">
                            <label class="control-label">Email : </label>
                            <input class="form-control" name="email" email="true" required="true" value="{{$boss->Email}}" />
                        </div>
						<div class="form-group">
                            <label class="control-label">Phone Number : </label>
                            <input class="form-control" name="phone" type="text" required="true" value="{{$boss->PhoneNumber}}" />
                        </div>
                        @endforeach
                </div>
				<div class="footer text-center">
                    <button class="btn btn-info btn-fill btn-wd">Edit</button>
                </div>                 
    	</form>
    </div>
</div>

@endsection