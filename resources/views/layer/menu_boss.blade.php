<nav>
  <ul class="primary-nav">
    <li class="primary-nav__item dropdown"><a href="#0"><i class="fa fa-home"></i> STATISTICAL</a>
	<ul class="secondary-nav">
		<li class="secondary-nav__item"><a href="#0">Book Store</a></li>
		<li class="secondary-nav__item"><a href="#0">Thông kê</a></li>
	</ul>
    </li>
    <li class="primary-nav__item dropdown">
      <a class="dropdown__btn" href="#0"><i class="fas fa-users"></i> MANAGERS <i class="chevron fas fa-chevron-down"></i></a>
      <ul class="secondary-nav">
        <li class="secondary-nav__item"><a href="{{ route('boss_view_all_manager') }}">All Managers</a></li>
        <li class="secondary-nav__item"><a href="{{ route('boss_add_manager') }}">Add Manager</a></li>
      </ul>
    </li>
    <li class="primary-nav__item dropdown">
      <a class="dropdown__btn" href="#0"><i class="fas fa-tools"></i> NOTIFICATION <i class="chevron fas fa-chevron-down"></i></a>
      <ul class="secondary-nav">
        <li class="secondary-nav__item"><a href="{{ route('boss_add_notification') }}">Add Notification</a></li>
        <li class="secondary-nav__item"><a href="{{ route('boss_view_all_notification') }}">Older Notifications</a></li>
        <li class="secondary-nav__item"><a href="#">Change Rate</a></li>
      </ul>
    </li>
    <li class="primary-nav__item dropdown">
      <a class="dropdown__btn" href="#0"><i class="fas fa-tools"></i> ACCOUNT <i class="chevron fas fa-chevron-down"></i></a>
      <ul class="secondary-nav">
        <li class="secondary-nav__item"><a href="{{ route('boss_view_accout') }}">View Accout</a></li>
        <li class="secondary-nav__item"><a href="{{ route('boss_check_password') }}">Edit Accout</a></li>
        <li class="secondary-nav__item"><a href="{{ route('boss_check_password_2') }}">Change Password</a></li>
        <li class="secondary-nav__item"><a href="{{ route('boss_logout') }}">Log Out</a></li>
      </ul>
    </li>
  </ul>
</nav>		