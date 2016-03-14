</main>

<footer class="return-to-top uppercase">Return to top &#8593;</footer>

<div id="pop" class="bg-white-trans">
	<div class="pop-container">
		<a class="icon-facebook" href="https://www.facebook.com/ddugoff"></a>
		<a class="icon-twitter" href="https://twitter.com/ddugoff"></a>
		<a class="icon-instagram" href="https://www.instagram.com/ddugoff"></a>

		<form class="clearfix">
			<input class="email" type="email" placeholder="Email" required>
			<input class="submit" type="submit" value="Submit">
		</form>
	</div>
	
	<span class="open">+</span>
</div>

<div id="modal" class="bg-white-trans">
	<div class="modal-content bg-white">
		<p>Want to receive <i>very</i> occasional brand updates and special discounts? Join the <b>DDUGOFF</b> mailing list.</p>
		<p>We won't spam you. We'll just keep you in the loop.</p>
	</div>
	<form class="clearfix">
		<input class="email" type="email" placeholder="Email" required>
		<input class="submit" type="submit" value="Submit">
	</form>
</div>

</div><!-- #page -->

<script src="<?= bloginfo('template_url'); ?>/js/min/script.min.js?cb=20160314_1557"></script>

<?php if ( !is_user_logged_in() ) { ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-46573922-1', 'ddugoff.com');
	ga('send', 'pageview');
</script>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>