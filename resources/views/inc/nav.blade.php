<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Shopping Cart</a>
		</div>
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> User Manager<b class="caret"></b></a>
					<ul class="dropdown-menu">
						@if(Auth::check())
							<li><a href="{{ route('user.profile') }}">User Profile</a></li>
							<li role="separato" class="divider"></li>
							<li><a href="{{ route('user.logout') }}">Logout</a></li>
						@else
							<li><a href="{{ route('user.signup') }}">Sign Up</a></li>
							<li><a href="{{ route('user.signin') }}">Sign In</a></li> 
						@endif
						
						
						
						
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
