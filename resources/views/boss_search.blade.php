@extends('layer.master_boss')
@section('content')

	<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header text-center">
                                <h4 class="title">Searching For Books</h4>                                
                                <br />
                            </div>
                            <center>
								<form action="{{ route('boss_search_process') }}">
									<input type="text" name="name_book" placeholder="Enter the title of the book">
									<input type="text" name="name_author" placeholder="Enter the name of the author">
									<input type="text" name="name_publisher" placeholder="Enter the name of the publisher">
									<input type="submit" value="Search"><br>
								</form>
							</center>
                            <div class="content table-responsive table-full-width">
                                
                                <table class="table table-bigboy">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th >Book's Name</th>
                                            <th >Author</th>
                                            <th >Publisher</th>
                                            <th >Price</th>
                                            <th >Quanlity</th>
                                            <th >Import Date</th>
                                            <th >Imported By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($array_book as $book)
                                        <tr>
                                            <td>
                                                <div class="img-container">
                                                    <img src="{{asset($book->Image)}}" alt="{{ $book->Image }}" class="image">
                                                </div>
                                            </td>
                                            <td class="td-name">
                                                {{$book->bookname}}
                                            </td>
                                            <td>
                                                {{$book->authorname}}
                                            </td>
                                            <td>
                                                {{$book->publishername}}
                                            </td>
                                            <td class="td-number">
                                                {{$book->Price}}
                                            </td>
                                            <td class="td-number">
                                                {{$book->Quanlity}}/{{$book->Quanlity}}
                                            </td>
                                            <td class="td-number">
                                                {{$book->ImportDate}}
                                            </td>
                                            <td >
                                               {{$book->Username}}
                                            </td>                                                                                       
                                        </tr>
                                        @endforeach                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
@endsection