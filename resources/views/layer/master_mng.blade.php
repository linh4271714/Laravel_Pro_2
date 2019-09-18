<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style type="text/css">
		#content {
			float: right;
			width: 70%;
		}
		#body {
			background-image: url('https://hinhanhdep.net/wp-content/uploads/2017/12/hinh-anh-cuon-sach-dep-3.jpg');
			background-attachment: fixed;
			background-size: cover;
		}
	</style>
</head>
<body id="body">
	<div id="">
		<!-- Menu -->
		@include('layer.menu_manager')
	</div>
	
	<div id="content">
        <!-- Content -->       
        @yield('content')
	</div>
</body>
</html>