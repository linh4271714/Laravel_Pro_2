<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../public/css/login.css">
</head>

<body>
	<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>My<span>Library</span></div>
		</div>
		<br>
		<div class="login">
			<form action="{{ route('mng_login_process') }}" method="post">
		{{csrf_field()}} 

				@if (Session::has('error'))
                    <span style="color: red">
                        {{Session::get('error')}}
                    </span>
                @endif
                @if (Session::has('success'))
                    <span style="color: green">
                        {{Session::get('success')}}
                    </span>
                @endif		
			<input type="text" placeholder="Email" name="email"><br>
			<input type="password" placeholder="Password" name="pass"><br>
			<input type="submit" value="Sign In">
		</form>
		</div>
</body>
</html>