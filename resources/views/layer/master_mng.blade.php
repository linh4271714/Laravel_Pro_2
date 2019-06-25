<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
</head>
<body>
    <!-- Header -->
    @include('layer.header')
	<!-- Menu -->
	@include('layer.menu_manager')
        <!-- Content -->
        @yield('content')
    <!-- Footer -->
    @include('layer.footer')

    </div>
</div>
</body>
</html>