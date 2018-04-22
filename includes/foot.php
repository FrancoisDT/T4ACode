<div class="footer">
		<div class="container">

			<div class="footer-info">
				<div class="col-md-4 col-sm-4 footer-info-grid links">
					<h4>QUICK LINKS</h4>
					<ul>
						<li><a href="About/index.html">About</a></li>
						<li><a href="Services/index.html">Services</a></li>
						<li><a href="VexxedPhoenix/index.html">VexxedPhoenix<br>(Sponsored)</a></li>
						<li><a href="#">Home</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 footer-info-grid email">
					<h4>NEWSLETTER</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions.
					</p>

					<form class="newsletter">
						<input class="email" type="email" placeholder="Your email...">
						<input type="submit" class="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="connect">
				<div class="connect-social">
					<h4>CONNECT</h4>
					<ul>
						<li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
						<li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
						<li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
						<li><a href="#" class="linkedin" title="Go to Our Linkedin Page"></a></li>
						<li><a href="#" class="blogger" title="Go to Our Blogger Account"></a></li>
						<li><a href="#" class="tumblr" title="Go to Our Tumblr Page"></a></li>
						<li><a href="#" class="rss" title="Go to Our RSS Feed"></a></li>
						<li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
						<li><a href="#" class="vimeo" title="Go to Our Vimeo Channel"></a></li>
						<li><a href="#" class="deviantart" title="Go to Our Deviantart Page"></a></li>
					</ul>
				</div>
			</div>

			<div class="copyright">
				<p>&copy; 2017 Tracking for Africa.</p>
			</div>

		</div>
	</div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="VexxedPhoenix/js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="VexxedPhoenix/js/wow.min.js"></script>
	<script type="text/javascript" src="VexxedPhoenix/js/mousescroll.js"></script>
	<script type="text/javascript" src="VexxedPhoenix/js/main.js"></script>
	<script type="text/javascript" src="VexxedPhoenix/js/numscroller-1.0.js"></script>

	
	<script type="text/javascript">
		$(document).ready(function() {
			var defaults = {
				containerID: 'toTop', 
				containerHoverID: 'toTopHover', 
				scrollSpeed: 100,
				easingType: 'linear'
			};
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll, .navbar li a, .footer li a").click(function(event){
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>

</body>

</html>