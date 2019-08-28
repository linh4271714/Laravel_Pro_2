<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="../../public/css/menu.css" rel="stylesheet" type="text/css" />
	<script src="../../public/js/menu.js"></script>
</head>
<body>
    <!-- Header -->
    @include('layer.header')     
    <!-- Menu -->
    <div id="responsive-admin-menu">
	<div id="responsive-menu">
		<div class="menuicon">≡</div>
	</div>
	
	<div id="logo"></div>

	<!--Menu-->
	<div id="menu">
			<a href="" title="Statistical" class="submenu" name="media-sub"><i class="icon-dashboard"></i><span> Statistical</span></a>
				<div id="media-sub" style="display: none;">
					<a href="" title="Book Store"><i class="icon-film"></i><span>  
					Book Store</span></a>
					<a href="" title="Most Read"><i class="icon-picture"></i><span>  
					Most Read</span></a>
					<a href="" title="Read At Least"><i class="icon-picture"></i><span>  
					Read At Least</span></a>
					<a href="" title="Monthly Sales"><i class="icon-picture"></i><span>  
					Monthly Sales</span></a>
				</div>
			<a href="" title="Managers" class="submenu" name="media-sub"><i class="icon-bullhorn"></i><span> Managers</span></a>
				<div id="media-sub" style="display: none;">
					<a href="{{ route('boss_view_all_manager') }}" title="All Managers"><i class="icon-film"></i><span>  
					All Managers</span></a>
					<a href="{{ route('boss_add_manager') }}" title="Add Manager"><i class="icon-picture"></i><span>  
					Add Manager</span></a>
				</div>
			<a href="" title="Notification" class="submenu" name="media-sub"><i class="icon-file-alt"></i><span> Notification</span></a>
				<div id="media-sub" style="display: none;">
					<a href="{{ route('boss_add_notification') }}" title="Add Notification"><i class="icon-film"></i><span>  
					Add Notification</span></a>
					<a href="{{ route('boss_view_all_notification') }}" title="Older Notifications"><i class="icon-picture"></i><span>  
					Older Notifications</span></a>
				</div>
			<a href="" title="Account" class="submenu" name="media-sub"><i class="icon-eye-open"></i><span>  
			Account</span></a>
				<div id="media-sub" style="display: none;">
					<a href="{{ route('boss_view_accout') }}" title="View Accout"><i class="icon-film"></i><span>  
					View Account</span></a>
					<a href="{{ route('boss_check_password') }}" title="Edit Accout"><i class="icon-film"></i><span>  
					Edit Account</span></a>
					<a href="{{ route('boss_check_password_2') }}" title="Change Password"><i class="icon-film"></i><span>  
					Change Password</span></a>
					<a href="{{ route('boss_logout') }}" title="Log Out"><i class="icon-picture"></i><span>  
					Log Out</span></a>
				</div>
	</div>
	<!--Menu-->


</div>

<div id="content-wrapper">

	
@yield('content')


</div>
<!-- Footer -->
    @include('layer.footer')


</body>
</html>