<form action="{{ route('login_boss_process') }}" @method('post')>
	Email: <input type="texe" name="email"><br>
	Password: <input type="password" name="pass"><br>
	<button>LogIn</button>
</form><br>
<button>
	<a href="{{ route('signin_boss') }}">Create Accout</a>
</button>
