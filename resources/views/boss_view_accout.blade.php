@extends('layer.master_boss')
@section('content')

<div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Xem thông tin tài khoản</h4>
                                </div>                            
                                <div class="content table-responsive table-full-width">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Email</th>
                                            	<th class="text-right">Tel</th>
                                            	<th class="text-right">Thao tác</th>
                                        	</tr>
                                    	</thead>
                                    <tbody>
                                    	@foreach ($array_boss as $boss)
                                        <tr>                                            
                                            <td>{{$boss->Username}}</td>
                                            <td>{{$boss->Email}}</td>
                                            <td class="text-right">{{$boss->PhoneNumber}}</td>
                                            <td class="td-actions text-right">
                                                <a href="{{ route('boss_check_password') }}" rel="tooltip" title="Sửa thông tin" class="btn btn-info btn-simple btn-xs">
                                                    <i class="fa fa-user"></i>
                                                </a>
                                                <a href="{{ route('boss_check_password_2') }}" rel="tooltip" title="Đổi mật khẩu" class="btn btn-success btn-simple btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </a>                                                
                                            </td>
                                        </tr>
                                        @endforeach                                        
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>

@endsection