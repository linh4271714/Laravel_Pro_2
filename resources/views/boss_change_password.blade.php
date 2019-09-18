@extends('layer.master_boss')
@section('content')

<div class="col-md-10">
	<div class="card">
		<form id="loginFormValidation" action="{{ route('boss_change_password_process') }}" method="post" novalidate="">
            	<div class="header text-center">Change Password</div>
                <div class="content">                    
						{{csrf_field()}} 
                        <div class="form-group">
                            <label class="control-label">New Password: </label>
                            <input class="form-control" name="pass" type="password" required="true" />
                        </div>
						<div class="form-group">
                            <label class="control-label">Re-enter Password: </label>
                            <input class="form-control" name="repass" type="password" required="true" />
                        </div>
                </div>
				<div class="footer text-center">
					<button class="btn btn-info btn-fill btn-wd">Change</button>
				</div>                 
    	</form>
    </div>
</div>

@endsection