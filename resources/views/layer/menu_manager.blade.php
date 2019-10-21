<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<script src="https://use.fontawesome.com/59f384ecdf.js"></script>
<style type="text/css">
	a {
		text-decoration: none;
		color: white;
	}
	#menu_table {
		position: relative;
		float: left;
		background-color: rgba(255, 0, 0, 0.7);
	}
	#thuonghieu {
	    background-color: #ac8c15;
	    color: white;
	    text-align: center;
	    padding: 10px;
	    height: 60px;
	}
	#menu {
		margin: 0;
    	margin-left: 0;
    	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65)));
    	z-index: 1;
    	width: 225px;
    	list-style-type: none;
	}
	.parent {
		margin-left: -40px;
	    position: relative;
	    background-color: rgba(255, 255, 0, 0.6);
	    height: 40px;
	    padding-top: 15px;
	    padding-left: 30px;
	    padding-bottom: 10px;
	    transition-duration: 0.1s;
		    -webkit-transition-duration: 0.1s;
		    -moz-transition-duration: 0.1s;
		    -o-transition-duration: 0.1s;
		    -ms-transition-duration: 0.1s;
	}
	.parent:hover {
		background-color: #D7B830;
    	cursor: pointer; 
	}
	.child {
		display: none;
		margin-left: -40px;
	    position: relative;
	    background-color: rgba(255, 255, 0, 0.6);
	    height: 40px;
	    padding-top: 15px;
    	padding-left: 65px;
	}
	.child:hover {
		background-color: #D7B830;
	}
	i.fas,i.fa,i.far,i.fad {
		 width: 30px;
		}
</style>
</head>
<body>


<div id="menu_table">
	<div id="thuonghieu">
			<h2>My Library</h2>
	</div>
	<div id="menu_div">
			<ul id="menu">
				<li class="parent"><a href="#">
					<i class="fas fa-file-invoice"></i>BILL<br> MANAGEMENT
					<i class="fas fa-caret-down f1" style="float: right;"></i>
				</a></li>
				<li class="child 1"><a href="{{ route('mng_add_new_bill') }}"><i class="fas fa-plus"></i>Add new bill</a></li>
				<li class="child 1"><a href="{{ route('mng_receive_book') }}"><i class="fas fa-recycle"></i>Receive the book</a></li>
				<li class="child 1"><a href="{{ route('mng_search_bill') }}"><i class="fas fa-search"></i>Search</a></li>

				<li class="parent"><a href="#">
					<i class="fas fa-book-open"></i>BOOKSTORE<br> MANAGEMENT
					<i class="fas fa-caret-down f2" style="float: right;"></i>
				</a></li>
				<li class="child 2"><a href="{{ route('import_book') }}"><i class="fas fa-plus"></i>Import Books</a></li>
				<li class="child 2"><a href="{{ route('mng_search') }}"><i class="fas fa-search"></i>Search</a></li>

				<li class="parent"><a href="#">
					<i class="fas fa-list"></i>CATEGORIES<br> MANAGEMENT
					<i class="fas fa-caret-down f3" style="float: right;"></i>
				</a></li>         
				<li class="child 3"><a href="{{ route('add_category') }}"><i class="fas fa-plus"></i>Add Category</a></li>
				<li class="child 3"><a href="{{ route('view_all_category') }}"><i class="fas fa-eye"></i>All Caregory</a></li>

				<li class="parent"><a href="#">
					<i class="fas fa-pen-alt"></i>AUTHORS<br> MANAGEMENT
					<i class="fas fa-caret-down f4" style="float: right;"></i>
				</a></li>
				<li class="child 4"><a href="{{ route('add_author') }}"><i class="fas fa-plus"></i>Add Author</a></li>
				<li class="child 4"><a href="{{ route('view_all_author') }}"><i class="fas fa-eye"></i>All Author</a></li>

				<li class="parent"><a href="#">
					<i class="fas fa-building"></i>PUBLISHERS<br> MANAGEMENT
					<i class="fas fa-caret-down f5" style="float: right;"></i>
				</a></li>
				<li class="child 5"><a href="{{ route('add_publisher') }}"><i class="fas fa-plus"></i>Add Publisher</a></li>
				<li class="child 5"><a href="{{ route('view_all_publisher') }}"><i class="fas fa-eye"></i>All Publisher</a><li>

				<li class="parent"><a href="#">
					<i class="fa fa-user"></i>ACCOUNT
					<i class="fas fa-caret-down f6" style="float: right;"></i>
				</a></li>
				<li class="child 6"><a href="{{ route('mng_view_accout') }}"><i class="fas fa-eye"></i>View Account</a></li>
				<li class="child 6"><a href="{{ route('mng_check_password') }}"><i class="fas fa-edit"></i>Edit Account</a></li>
				<li class="child 6"><a href="{{ route('mng_check_password_2') }}"><i class="fas fa-edit"></i>Change Passwo</a></li>
				<li class="child 6"><a href="{{ route('mng_logout') }}"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
			</ul>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		$('.f1').click(function() {
			$('.1').slideToggle(400);
		});
		$('.f2').click(function() {
			$('.2').slideToggle(400);
		});
		$('.f3').click(function() {
			$('.3').slideToggle(400);
		});
		$('.f4').click(function() {
			$('.4').slideToggle(400);
		});
		$('.f5').click(function() {
			$('.5').slideToggle(400);
		});
		$('.f6').click(function() {
			$('.6').slideToggle(400);
		});
	});
</script>
</body>
</html>