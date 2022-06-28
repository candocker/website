@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
		<main id="uix-maincontent">
			<section class="uix-spacing--m">
			   <!-- Login Panel Demo
				====================================================== -->
				<div class="uix-special-login__container">
					<p class="uix-striking-msg uix-striking-msg--default is-rounded uix-striking-msg--hasarrow uix-striking-msg--hasarrow--reversed uix-striking-msg--inline">
						Click Me
					</p> 
					<div class="uix-special-login__toggle">
						<span>
							<i class="fas fa-qrcode"></i>
							<i class="fas fa-laptop"></i>
						</span> 
					</div>
					<div class="uix-special-login__form">
						<div>
							<h4>Login to your account</h4>
							<form>
									<div class="uix-controls uix-controls--line is-fullwidth is-iconic">
									  <i class="fa fa-user-o" aria-hidden="true"></i>
									  <input type="text" class="js-uix-float-label" name="username" autocomplete="off">
									  <label>Username</label>
									</div>
									<div class="uix-controls uix-controls--line is-fullwidth is-iconic">
									  <i class="fa fa-lock" aria-hidden="true"></i>
									  <input type="password" class="js-uix-float-label" name="pass" autocomplete="off">
									  <label>Password</label>
									</div>
									<button type="submit" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-rounded">Login</button>
							</form>
						</div>
					</div>
					<!-- /.uix-special-login__form -->
					<div class="uix-special-login__form">
						<div>
							<h4>Create an account</h4>
							<form>
									<div class="uix-controls uix-controls--line is-fullwidth is-iconic">
									  <i class="fa fa-user-o" aria-hidden="true"></i>
									  <input type="text" class="js-uix-float-label" name="username" autocomplete="off">
									  <label>Username</label>
									</div>
									<div class="uix-controls uix-controls--line is-fullwidth is-iconic">
									  <i class="fa fa-lock" aria-hidden="true"></i>
									  <input type="password" class="js-uix-float-label" name="pass" autocomplete="off">
									  <label>Password</label>
									</div>
									<div class="uix-controls uix-controls--line is-fullwidth is-iconic">
									  <i class="fa fa-envelope" aria-hidden="true"></i>
									  <input type="email" class="js-uix-float-label" name="email" autocomplete="off">
									  <label>Email Address</label>
									</div>			
									<button type="submit" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary is-rounded">Register</button>
							</form>
						</div>
					</div>
					<!-- /.uix-special-login__form -->
					<div class="uix-special-login__bottom"><a href="#">Forgot your password?</a></div>
				</div>
				<!-- /.uix-special-login__container -->
			</section>	
		</main>
@endsection