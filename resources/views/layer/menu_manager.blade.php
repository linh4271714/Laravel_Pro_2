<style type="text/css">
	a {
		text-decoration: none;
		color: white;
	}
	#menu_table {
		position: fixed;
		top: 100px;
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
		margin-left: -40px;
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
		z-index: 1;
		width: 250px;
	}
	ul#menu li {
		margin: auto;
		position: relative;
		background-color: rgba(255, 255, 0, 0.6) ;
		height: 40px;
		text-align: center;
		padding-top: 20px;
		padding-left: 5px;
		padding-right: 5px;
		transition-duration: 0.1s;
        /* Safari */
        -webkit-transition-duration: 0.1s; 
        /* Mozilla Firefox */
        -moz-transition-duration: 0.1s; 
        /* Opera */
        -o-transition-duration: 0.1s;
        /* IE 9 */
        -ms-transition-duration: 0.1s;
	}
	ul#menu li:hover {
		background-color: #D7B830;
		transform: scale(1.2);
	        -webkit-transform: scale(1.2); 
	        -moz-transform: scale(1.2); 
	        -o-transform: scale(1.2);
	        -ms-transform: scale(1.2);
    	cursor: pointer; 
	}
	ul#sub {
		display: none;
	    position: absolute;
	    left: 178px;
	    width: 300px;
	}
	ul#sub li {
	        background-color:  rgba(255, 255, 0, 0.6);
		    list-style-type: none;
		    width: 124px;
		    height: 20px;
		    top: -20px;
		    left: -78px;
		    text-align: left;
		    padding: 10px;
	}
	ul#menu li:hover ul#sub {
		display: block;
	}
	ul#menu li ul#sub li:hover {
		background-color: #D7B830;
		transform: scale(1.2);
	        -webkit-transform: scale(1.2); 
	        -moz-transform: scale(1.2); 
	        -o-transform: scale(1.2);
	        -ms-transform: scale(1.2);
    	cursor: pointer; 
	}
</style>
<div id="menu_table">
	<div id="thuonghieu">
			<h2>My Library</h2>
	</div>
	<div id="menu_div">
			<ul id="menu">
				<li><a href="#"><i class="fas fa-file-invoice"></i>BILL<br> MANAGEMENT</a>
					<ul id="sub">             
						<li><a href="{{ route('mng_add_new_bill') }}"><i class="fas fa-plus"></i>Add new bill</a></li>
						<li><a href="{{ route('mng_receive_book') }}"><i class="fas fa-recycle"></i>Receive the book</a></li>
						<li><a href="{{ route('mng_search_bill') }}"><i class="fas fa-search"></i>Search</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fas fa-book-open"></i>BOOKSTORE<br> MANAGEMENT</a>
					<ul id="sub">             
						<li><a href="{{ route('import_book') }}"><i class="fas fa-plus"></i>Import Books</a></li>
						<li><a href="{{ route('mng_search') }}"><i class="fas fa-search"></i>Search</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fas fa-list"></i>CATEGORIES<br> MANAGEMENT</a>
					<ul id="sub">             
						<li><a href="{{ route('add_category') }}"><i class="fas fa-plus"></i>Add Category</a></li>
						<li><a href="{{ route('view_all_category') }}"><i class="fas fa-eye"></i>All Caregory</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fas fa-pen-alt"></i>AUTHORS<br> MANAGEMENT</a>
					<ul id="sub">             
						<li><a href="{{ route('add_author') }}"><i class="fas fa-plus"></i>Add Author</a></li>
						<li><a href="{{ route('view_all_author') }}"><i class="fas fa-eye"></i>All Author</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fas fa-building"></i>PUBLISHERS<br> MANAGEMENT</a>
					<ul id="sub">             
						<li><a href="{{ route('add_publisher') }}"><i class="fas fa-plus"></i>Add Publisher</a></li>
						<li><a href="{{ route('view_all_publisher') }}"><i class="fas fa-eye"></i>All Publisher</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-user"></i>ACCOUNT</a>
					<ul id="sub">             
						<li><a href="{{ route('mng_view_accout') }}"><i class="fas fa-eye"></i>View Account</a></li>
						<li><a href="{{ route('mng_check_password') }}"><i class="fas fa-edit"></i>Edit Account</a></li>
						<li><a href="{{ route('mng_check_password_2') }}"><i class="fas fa-edit"></i>Change Password</a></li>
						<li><a href="{{ route('mng_logout') }}"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
					</ul>
				</li>
			</ul>
	</div>
</div>