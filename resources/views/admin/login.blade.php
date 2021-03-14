@extends ('admin.adminlayouts.adminmain')

<div class="log-w3">
<div class="w3layouts-main">
	<h2>A D Sir Admin Panel</h2>
		<form id="loginform" class="form-vertical" method="post"action="{{url ('admin/login')}}">
		{{csrf_field()}}
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
				<div class="clearfix"></div>
				<input type="submit" value="Login" name="login">
		</form>
		
</div>
</div>
