@extends('layer.master_boss')
@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   	<div class="header">
                        <center><h4 class="title">Danh Sách Thông Báo</h4></center>
                    </div>                            
                    <div class="content table-responsive table-full-width">
                        <table class="table">
                            <thead>
                                <tr>
                                	<th class="text-right">Time</th>
                                    <th>Tittle</th>
                                    <th>Main Content</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($array_notification as $a)
								<tr>                                            
                                    <td class="text-right">{{$a->Date}}</td>
                                    <td>{{$a->Title}}</td>
                                    <td>{{$a->Content}}</td>
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