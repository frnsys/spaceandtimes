
		</div><!-- .content -->
	</div><!-- .main -->

	</div><!-- .shell -->

	<footer>
		<a href="http://frnsys.com"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" class="avatar"></a>
		Space & Times is the rambling of <a href="http://frnsys.com">Francis Tseng</a>.
	</footer>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-2.1.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/highlight.pack.js"></script>
<script>
$(document).ready(function() {
    $('pre').each(function(i, e) {hljs.highlightBlock(e)});
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42262145-1', 'spaceandtim.es');
  ga('send', 'pageview');
</script>

</body>
</html>