@if (Auth::guard('admin')->check())
	<p>Log in as ADMIN</p>
@else
	<p>Log out as ADMIN</p>
@endif

@if (Auth::guard('web')->check())
	<p>Log in as USER</p>
@else
	<p>Log out as USER</p>
@endif
