<style>
	a {
		color: #ccc;
	}
	a:hover {
		color: #ccc;
		text-decoration: none;
	}
	.masthead a {
		padding: 10px 0;
	}
	.masthead a:hover {
		border-bottom: 2px solid #ccc;
	}
	.masthead a.active {
		color: white;
		border-bottom: 2px solid white;
	}
	.masthead .nav {
		padding-top: 13px;
	}
	.masthead-brand {
		margin: 10px 0;
	}
	.bg-lang {
		background: #333;
	}
	.bg-header {
		background: #222;
	}
</style>
<div class='bg-lang'>
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-md-offset-10" align="center">
				<a href="#">English</a>
			</div>
			<div class="col-md-1" align="center">
				<a href="#">ไทย</a>
			</div>
		</div>
	</div>
</div>
<div class='bg-header'>
	<div class='container'>
		<div class='row masthead'>
			<div class='col-md-3'>
				<h3 class='masthead-brand'>Ambient Lighting</h3>
			</div>
			<div class='col-md-1 nav col-md-offset-5' align="center">
				<a class='<? echo $home['active']?>' href="<? echo $home['link']?>">Home</a>
			</div>
			<div class='col-md-1 nav' align="center">
				<a class='<? echo $product['active']?>' href="<? echo $product['link']?>">Products</a>
			</div>
			<div class='col-md-1 nav' align="center">
				<a class='<? echo $about['active']?>'  href="<? echo $about['link']?>">About</a>
			</div>
			<div class='col-md-1 nav' align="center">
				<a class='<? echo $contact['active']?>'  href="<? echo $contact['link']?>">Contact</a>
			</div>
		</div>
	</div>
</div>

