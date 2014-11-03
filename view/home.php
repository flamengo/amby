<style>
	img {
		height: 500px;
	}
	.item {
		position: absolute;
	}
	.invis {
		display: none;
	}
	.item-frame {
		position: relative;
		height: 700px;
	}
</style>
<div class="container">
	<div class='item-frame'>
		<div class='item invis'>
			<div class="page-header">
				<h1>Exquitely luxurous</h1>
			</div>
			<p class="lead">
				Experience a whole new level of satisfaction with us.
			</p>
			<img src="/assets/img/chandelier/sc1.jpg">
		</div>
		<div class="item invis">
			<div class="page-header">
				<h1>Extravagant ambience</h1>
			</div>
			<p class="lead">
				Because we only provide the best.
			</p>
			<img src="/assets/img/chandelier/sc2.jpg">
		</div>
		<div class="item">
			<div class="page-header">
				<h1>Delicately elegant </h1>
			</div>
			<p class="lead">
				We make sure that "impressed" is just the norm.
			</p>
			<img src="/assets/img/chandelier/sc3.jpg">
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {

		(function() {
			var item = [$('.item:first'), $('.item:last')], items = $('.item'), showSlide = function(i) {
				if (!item[i])
					i = 0;
				setTimeout(function() {
					items.not(item[i].css({
						opacity : 0,
						display : 'block'
					}).animate({
						opacity : 1,
					}, {
						duration : 1000,
						complete : function() {
							showSlide(++i);
						}
					})).fadeOut(1000);
				}, 4000);
			};

			showSlide();
		})();

	}); 
</script>