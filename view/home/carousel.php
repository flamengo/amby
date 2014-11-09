<style>
	body {
		background: black;
		color: white;
	}
	.carousel-overlay .item:after {
		content: ' ';
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: -moz-radial-gradient(center, ellipse cover, rgba(0,0,0,0.5) 0, rgba(0,0,0,0) 100%);
		background: -webkit-gradient(radial, center center, 0, center center, 100%, color-stop(0, rgba(0,0,0,0.5)), color-stop(100%, rgba(0,0,0,0)));
		background: -webkit-radial-gradient(center, ellipse cover, rgba(0,0,0,0.5) 0, rgba(0,0,0,0) 100%);
		background: -o-radial-gradient(center, ellipse cover, rgba(0,0,0,0.5) 0, rgba(0,0,0,0) 100%);
		background: -ms-radial-gradient(center, ellipse cover, rgba(0,0,0,0.5) 0, rgba(0,0,0,0) 100%);
		background: radial-gradient(ellipse at center, rgba(0,0,0,0.5) 0, rgba(0,0,0,0) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
	}
	.item-1 {
		background: url("http://www.montere.it/assets/img/sliderhome/SIL_4890.jpg") no-repeat center center;
	}
	.item-2 {
		background: url("http://www.montere.it/assets/img/sliderhome/SIL_4605.jpg") no-repeat center center;
	}
	.item-3 {
		background: url("http://www.montere.it/assets/img/sliderhome/SIL_4805.jpg") no-repeat center center;
	}
	#carousel-main .item, #carousel-main .item.active {
		height: 100%;
		background-size: cover;
	}
	#carousel-main .carousel-caption h2 {
		font-size: 50px;
		display: block;
		text-shadow: 0 0 1px rgba(0,0,0,0.05), 0 1px 2px rgba(0,0,0,0.3);
		font-weight: normal;
		letter-spacing: 8px;
		line-height: 1.5;
	}
	#carousel-main .carousel-caption {
		top: 33%;
		bottom: auto;
		left: 0;
		right: 0;
	}
	#carousel-main .carousel-control {
		z-index: 1000;
	}
</style>
<div id="carousel-main" class="carousel slide carousel-overlay" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-main" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-main" data-slide-to="1"></li>
		<li data-target="#carousel-main" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item item-1 active">
			<div class="carousel-caption">
				<h2>Carousel caption 1
				<br>
				Second line for captino</h2>
				<p>
					Monte Ré brings every day to the table a healthy and certificated product,
					<br>
					cultivated enhancing the environment and our land.
				</p>
			</div>
		</div>
		<div class="item item-2">
			<div class="carousel-caption">
				<h2>Carousel caption 2
				<br>
				Deep impact</h2>
				<p>
					Monte Ré brings every day to the table a healthy and certificated product,
					<br>
					cultivated enhancing the environment and our land.
				</p>
			</div>
		</div>

		<div class="item item-3">
			<div class="carousel-caption">
				<h2>Carousel caption 3
				<br>
				Simply delightful</h2>
				<p>
					Monte Ré brings every day to the table a healthy and certificated product,
					<br>
					cultivated enhancing the environment and our land.
				</p>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a>
	<a class="right carousel-control" href="#carousel-main" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
</div>
<script>
	$(document).ready(function() {
		$('.carousel').carousel();
	}); 
</script>