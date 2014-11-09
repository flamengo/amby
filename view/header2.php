<style>
	.navbar-static {
		height: 200px;
		width: 100%;
		position: absolute;
		z-index: 100;
		border: 0;
		background: transparent;
		font-family: 'Kalam', cursive;
		color: #fff !important;
	}
	.navbar-static .navbar-brand {
		display: block;
		position: absolute;
		width: 140px;
		height: 100px;
		background: url('/assets/img/amby.png') no-repeat center center;
		left: 50%;
		margin: 40px 0 0 -70px;
	}
	.navbar-static .navbar-nav {
		margin-top: 150px;
		position: relative;
		float: none;
		text-align: center;
	}
	.navbar-static .navbar-nav li {
		min-width: 12%;
	}
	.navbar-static .navbar-nav li {
		float: none;
		display: inline-block;
		text-align: center;
	}
	.navbar-static .navbar-nav li a {
		display: inline-block;
		color: #fff !important;
		font-size: 18px;
		background-color: transparent !important;
	}
	.navbar-static .navbar-nav li:hover>a .line {
		border-bottom: 2px solid #fff;
	}
	.navbar-static .navbar-nav li a .line {
		display: inline-block;
		padding: 7px 0 5px 0;
		border-bottom: 2px solid transparent;
		transition-duration: .1s;
		-webkit-transition-property: color;
		-webkit-transition-duration: .1s;
		transition-property: border-color;
		transition-duration: .3s;
		-webkit-transition-property: border-color;
		-webkit-transition-duration: .3s;
	}
	.navbar-static .navbar-nav .dropdown-menu {
		background: transparent;
		text-align: center;
		border: 2px solid;
		border-radius: 0;
	}
	.navbar-static .dropdown:hover .dropdown-menu {
		display: block;
	}
</style>
<nav class="navbar navbar-default navbar-static" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="/home"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="/product" class="dropdown-toggle" data-toggle="dropdown"><span class="line">Products</span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="/product/chandelier"><span class="line">Chandeliers</span></a>
					</li>
					<li>
						<a href="/product/lamp"><span class="line">Lamps</span></a>
					</li>
				</ul>
			</li>
			<li>
				<a href="/home/about"><span class="line">Company</span></a>
			</li>
			<li>
				<a href="/home/contact"><span class="line">Contact</span></a>
			</li>
		</ul>
	</div>
</nav>