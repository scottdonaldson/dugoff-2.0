</main>

<footer>
	<nav>
		<a href="<?= $BASE; ?>/about">About</a>
		<a href="<?= $BASE; ?>/contact">Contact</a>
		<a href="<?= $BASE; ?>/stockists">Stockists</a>
	</nav>

	<div class="copyright">
		&copy; <?= date('Y'); ?> DDUGOFF.COM ALL RIGHTS RESERVED
	</div>
</footer> 

</div><!-- #page -->

<?php /* Modernizr and jQuery are included in the <head>, other scripts here */ ?>
<script src="<?= $BASE; ?>/js/plugins.js"></script>
<script src="<?= $BASE; ?>/js/script.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46573922-1', 'ddugoff.com');
  ga('send', 'pageview');
</script>

</body>
</html>