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
									<input type="submit" value="Search"><br><br>
									<font color="#FF0000"><h4> So sorry, there are no result!</h4> </font> <br><br>
								</form>
							</center>
						</div>
                    </div>
                </div>

@endsection