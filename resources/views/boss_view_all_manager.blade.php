@extends('layer.master_boss')
@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   	<div class="header">
                        <h4 class="title">Thông Tin Của Nhân Viên</h4>
                    </div>                            
                    <div class="content table-responsive table-full-width">
                        <table class="table">
                            <thead>
                                <tr>
                                	<th>User Name</th>
                                    <th>Email</th>
                                    <th class="text-right">Tel</th>
                                    <th class="text-right">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($array_manager as $mng)
                                <tr>                                            
                                    <td>{{$mng->Username}}</td>
                                    <td>{{$mng->Email}}</td>
                                    <td class="text-right">{{$mng->PhoneNumber}}</td>
                                    <td class="text-right">{{$mng->Address}}</td>
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