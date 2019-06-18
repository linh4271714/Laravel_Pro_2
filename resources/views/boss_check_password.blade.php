<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Please Enter Your Password <br>
	<form action="{{ route('check_password_process') }}" method='post'>
		<input type="password" name="pass_check">
		<button>Send</button>
	</form>
</body>
</html>