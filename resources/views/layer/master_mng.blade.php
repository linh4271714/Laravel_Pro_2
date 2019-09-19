<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/59f384ecdf.js"></script>
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
		  i.fas,
		  i.fa,
		  i.far,
		  i.fad {
		    width: 30px;
		}
		#footer {
			float: left;
			position: fixed;
			left: 5px; bottom: 0px;
			width: 30%;
			background-color: rgba(255, 255, 0, 0.6);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* 	Chrome,Safari4+ */
			z-index: 1;
			color: white;
		  }
		input, select, textarea {
			border-radius: 10px;
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
	<!--Footer-->
	<div id="footer">
		@include('layer.footer')
	</div>
</body>
</html>