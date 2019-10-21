<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://use.fontawesome.com/59f384ecdf.js"></script>
	<meta charset="utf-8" />
	<style type="text/css">
		.container {
			width: 80%;
			margin-left: 10%;
		}
		#content {
			float: right;
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
		input, select, textarea {
			border-radius: 10px;
		}
	</style>
</head>
<body id="body">
	<!-- <div id=""  class="container">
		 Header 
		@include('layer.header')
	</div> -->
	<div class="container">
		<div id="menu">
			<!-- Menu -->
			@include('layer.menu_manager')
		</div>
		
		<div id="content">
	        <!-- Content -->       
	        @yield('content')
		</div>
	</div>
	<!--Footer
	<div id="footer" class="container">
		@include('layer.footer')
	</div>-->
</body>
</html>