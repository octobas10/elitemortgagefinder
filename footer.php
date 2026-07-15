<footer class="footer">
	<div class="opacity">
		<article class="container">
			<div class="row">
				<aside class="col-lg-5">
					<div class="f-logo"><a href="#"><img src="images/logo-w.png" alt=""></a></div>
					<p>Knowing how your monthly mortgage payment fits into your budget will help you evaluate your options. If you're taking cash out or shortening your term, for instance, it's a good idea to know how much wiggle room you have in your budget for a higher monthly payment. If your goal is to get a lower monthly payment, it's important to decide how much you need to lower your payment for the refinance to be worthwhile.</p>
					<!-- <ul class="social">
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					</ul> -->
				</aside>
				<aside class="col-lg-3">
					<h3>Quick Links</h3>
					<ul class="f-link">
						<li><a href="index.php">Home</a></li>
						<li><a href="aboutus.php">ABOUT US</a></li>
						<li><a href="refinance.php">REFINANCE</a></li>
						<li><a href="buyahouse.php">BUY A HOUSE</a></li>
						<li><a href="sellhome.php">SELL HOME</a></li>
						<li><a href="homeloan.php">HOME LOANS</a></li>
						<li><a href="mortgagerates.php">MORTGAGE RATES</a></li>
						<li><a href="contactus.php">Contact US</a></li>
						<li><a href="marketing_partners.php">Marketing Partners</a></li>
						<li><a href="tcpa_partners_list.php">TCPA Partners List</a></li>
					</ul>
				</aside>
				<aside class="col-lg-4">
					<h3>Subscribe Now</h3>
					<div id="subscribemsg" style="color:red;"></div>
					<form id="subscribeform" name="subscribeform" action="">
						<div class="form-group">
							<input type="email" class="form-control required email" id="email_subscribe" placeholder="Enter Your Email Address*">
						</div>
						<button type="button" id="subscribebtn" class="btn btn-primary btn-lg w-100" style=""><span>Subscribe Now</span></button>
						<?php if ($_SERVER['PHP_SELF'] == '/mortgagerates.php') { ?>
							<div style="width:100%;text-align:center;padding-top:10px;"><a style="color:white" href="privacy_policy.php">PRIVACY POLICY</a></div>
						<?php } ?>
					</form>
				</aside>
			</div>
		</article>
		<section class="copy">
			<article class="container">
				<div class="row">
					<aside class="col-md-12">
						<ul>
							<li><a href="ccpa.php">Do Not Sell My Personal Information</a></li>
							<li><a href="optout.php">Opt Out</a></li>
							<li><a href="terms.php">Term &amp; Policy</a></li>
							<?php if ($_SERVER['PHP_SELF'] != '/mortgagerates.php') { ?>
								<li><a href="privacy_policy.php">PRIVACY POLICY</a></li>
							<?php } ?>
						</ul>
					</aside>
					<aside class="col-md-12"> Copyright &copy; <?php echo date('Y') ?> Elite Mortage Finder. All rights reserved </aside>

				</div>
				<div style="text-align:center;">
					<script language='JavaScript' type='text/javascript' src='https://ads.elitemate.com/adx.js'></script>
					<script language='JavaScript' type='text/javascript'>
						<!--
						if (!document.phpAds_used) document.phpAds_used = ',';
						phpAds_random = new String(Math.random());
						phpAds_random = phpAds_random.substring(2, 11);
						document.write("<" + "script language='JavaScript' type='text/javascript' src='");
						document.write("https://ads.elitemate.com/adjs.php?n=" + phpAds_random);
						document.write("&amp;what=zone:289&amp;target=_blank");
						document.write("&amp;exclude=" + document.phpAds_used);
						if (document.referrer)
							document.write("&amp;referer=" + escape(document.referrer));
						document.write("'><" + "/script>");
						//
						-->
					</script><noscript>
						<a href='https://ads.elitemate.com/adclick.php?n=a6520b7d' target='_blank'><img src='https://ads.elitemate.com/adview.php?what=zone:289&amp;n=a6520b7d' border='0' alt=''></a></noscript>
				</div>
			</article>
		</section>
	</div>
</footer>
<a id="backtop"></a>

<div class="emf-fab" id="emfFab">
	<button type="button" class="emf-fab-toggle" id="emfFabToggle" aria-label="Quick mortgage options" aria-expanded="false">
		<i class="fas fa-home"></i>
	</button>
	<div class="emf-fab-menu" id="emfFabMenu" aria-hidden="true">
		<a href="index.php#stepform" class="emf-fab-item">
			<span class="emf-fab-icon"><i class="fas fa-key"></i></span>
			<span class="emf-fab-label">Buy A Home</span>
		</a>
		<a href="index.php#stepform" class="emf-fab-item">
			<span class="emf-fab-icon"><i class="fas fa-sync-alt"></i></span>
			<span class="emf-fab-label">Refinance</span>
		</a>
		<a href="sellhome.php" class="emf-fab-item">
			<span class="emf-fab-icon"><i class="fas fa-handshake"></i></span>
			<span class="emf-fab-label">Sell Home</span>
		</a>
	</div>
</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- Setup of bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/stellarnav.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="js/rangeslider.js"></script>
<?php
if (!empty($extra_footer_scripts) && is_array($extra_footer_scripts)) {
	foreach ($extra_footer_scripts as $script_src) {
		echo '<script type="text/javascript" src="' . htmlspecialchars($script_src) . '"></script>' . "\n";
	}
}
?>
<script>
	var btn = $('#backtop');
	$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});
	btn.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, '300');
	});

	(function () {
		var fab = document.getElementById('emfFab');
		var toggle = document.getElementById('emfFabToggle');
		var menu = document.getElementById('emfFabMenu');
		if (!fab || !toggle || !menu) return;

		toggle.addEventListener('click', function (e) {
			e.stopPropagation();
			var open = fab.classList.toggle('is-open');
			toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
			menu.setAttribute('aria-hidden', open ? 'false' : 'true');
		});

		document.addEventListener('click', function (e) {
			if (!fab.contains(e.target)) {
				fab.classList.remove('is-open');
				toggle.setAttribute('aria-expanded', 'false');
				menu.setAttribute('aria-hidden', 'true');
			}
		});
	})();
</script>
</body>
</html>