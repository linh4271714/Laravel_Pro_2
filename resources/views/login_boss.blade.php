<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="login_boss.blade.css?v=<?php echo time();?>" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<head>
<style>
    body{
        background-image: url(585928271-dark-wallpaper-1920x1080.jpg);
    }
    </style>
</head>

<body>
	<div class="table">
		<h2>Login</h2>
			<form action="{{ route('login_boss_process') }}" @method('post')>
		
		<div class="textbox">
				<i class="fas fa-user"></i>
				<input type="text" name="email" placeholder="Email"><br>
		</div>
		<div class="textbox">
				<i class="fas fa-lock"></i>
				<input type="password" name="pass" placeholder="Password"><br>
		</div>
			<button>Login</button>
			</form><br>
			<font size="+3" face="arial"></font>
			<button>
				<a href="{{ route('signin_boss') }}">Create Accout</a>
			</button>
			<br>
	</div>
</body>
</html>