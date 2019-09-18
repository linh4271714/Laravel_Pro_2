@extends('layer.master_boss')
@section('content')

<div class="col-md-10">
    <div class="card">
        <form id="loginFormValidation" action="{{ route('boss_add_manager_process') }}" method="" novalidate="">
            <div class="header text-center">Edit Account</div>
                <div class="content">                    
						{{csrf_field()}} 
                        <div class="form-group">
                            <label class="control-label">User Name : </label>
                            <input class="form-control" name="userName" type="text" required="required" />
                        </div>                 
						<div class="form-group">
                            <label class="control-label">Email : </label>
                            <input class="form-control" name="email" email="true" required="required" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Password : </label>
                            <input class="form-control" name="pass" type="text" required="required" />
                        </div>
						<div class="form-group">
                            <label class="control-label">Phone Number : </label>
                            <input class="form-control" name="phone" type="text" required="required" />
                        </div>
				</div>
				<div class="footer">
                    <button type="submit" class="btn btn-info btn-fill pull-right">Add</button>
                                    <div class="form-group pull-left">
                                        
                                    </div>

                                    <div class="clearfix"></div>
                </div>              
    	</form>
    </div>
</div>

@endsection