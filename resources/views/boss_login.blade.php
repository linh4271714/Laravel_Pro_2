<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../public/css/login1.css">
	<script src="../public/js/login.js"></script>
</head>

<body>
	<form action="{{ route('boss_login_process') }}" method="post">		
  <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span> Login</h2>
  <button class="submit"><span class="entypo-key"><i class="fa fa-lock"></i></span></button>
  <span class="entypo-user inputUserIcon">
     <i class="fa fa-user"></i>
   </span>
  <input type="text" class="user" name="email" placeholder="Email"/>
  <span class="entypo-key inputPassIcon">
     <i class="fa fa-key"></i>
   </span>
  <input type="password" class="pass" name="pass" placeholder="Password"/>
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
</form>
</body>
</html>