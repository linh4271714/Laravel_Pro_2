<form action="{{ route('sign_in_boss_process') }}">
	Sign In <br>
	User Name: <input type="text" name="userName"><br>
	Email: <input type="text" name="email"><br>
	Phone Number: <input type="number" name="sdt"><br>
	Password: <input type="password" name="pass"><br>
	Re-enter password: <input type="password" name="re-pass">
	<button>Sign In</button>
</form>