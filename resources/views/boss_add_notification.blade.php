@extends('layer.master_boss')
@section('content')

<div class="col-md-10">
    <div class="card">
        <form id="loginFormValidation" action="{{ route('boss_add_notification_process') }}" method="post" novalidate="">
            <div class="header text-center">More Notification</div>
                <div class="content">                    
						{{csrf_field()}} 
                        <div class="form-group">
                            <label class="control-label">Title : </label><br>
                            <textarea name="title" style="height: 60px; width: 800px;"></textarea>
                        </div>                 
						<div class="form-group">
                            <label class="control-label">Content : </label><br>
                            <textarea name="content" style="height: 200px; width: 800px;"></textarea>
                        </div>                        
				</div>
				<div class="footer">
                    <button type="submit" class="btn btn-info btn-fill pull-right">Post</button>
                                    <div class="form-group pull-left">
                                        
                                    </div>

                                    <div class="clearfix"></div>
                </div>              
    	</form>
    </div>
</div>

@endsection