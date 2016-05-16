		<hr>
		<footer>
			<div class="container contact-details">
				<div class="row">
					<div id="social-icons" class="col-md-6">
						<img src="images/social_circle_color/Twitter.png" alt="Facebook">
						<img src="images/social_circle_color/Facebook.png" alt="Facebook">
						<img src="images/social_circle_color/Google+.png" alt="Facebook">
						<img src="images/social_circle_color/Instagram.png" alt="Facebook">
					</div>
					<div id="social-info" class="col-md-6">
						<p>&copy; 2015 Company, Inc.</p>
						<p>Home: [CITY NAME], [COUNTRY]</p>
						<p>E-mail: [EMAIL]</p>
						<p>Phone: [PHONE NUMBER]</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- Bootstrap and other core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
		<script src="http://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>
		<script>
			var $grid = $('.grid').imagesLoaded( function() {
			$grid.masonry({
				itemSelector: '.grid-item',
				percentPosition: true,
				columnWidth: '.grid-sizer'
				});
			});
		</script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="../../dist/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>