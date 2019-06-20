<!DOCTYPE html>
<html>
<head>
</head>
<body>
<head>
</head>

<body>
		<h2>Login</h2>
		<form action="{{ route('boss_login_process') }}" method='post'>
				<input type="text" name="email" placeholder="Email"><br>
				<input type="password" name="pass" placeholder="Password"><br>
				<button>Login</button>
		</form><br>
		<br>
</body>
</html>