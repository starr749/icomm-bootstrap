<?php 
/*
*   Template Name: Search
*   Date: April 17, 2013
*	Created: Isaac Andrade
*/
get_header();
?>

<div class="container container-narrow">
	<div class="row-fluid vert-padding">
		<div class="span10">
			<h2 class="feature">Search results for "<?php echo $_GET["q"]; ?>"</h2>
		</div>
		<!-- Social Networking Links -->
		<div class="span2 row-fluid social-pics">
			<div class="row-fluid social-pics">
				<div class="span4">
					<a href="https://www.facebook.com/icomm.student.media?fref=ts"><img src="http://beta.byuicomm.net/wp-content/themes/icomm-bootstrap/img/f_logo.png"></a>
				</div>
				<div class="span4">
					<a href="https://twitter.com/byuicomm"><img src="http://beta.byuicomm.net/wp-content/themes/icomm-bootstrap/img/twitter_logo.png"></a>
				</div>
				<div class="span4">
					<a href="http://pinterest.com/byuicomm/"><img src="http://beta.byuicomm.net/wp-content/themes/icomm-bootstrap/img/pinterest_logo.png"></a>
				</div>
			</div>
		</div> <!-- End of Social Networking Links -->
	</div>
	<hr/>
	<!-- End of Title Block -->

	<?php while ( have_posts() ) : the_post(); ?>
	
	<!-- Google CSE Box -->
	<div id="search-box">
		<script>
		(function() {
			var cx = '014258444359539991967:3v_qcyewfxs';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
			'//www.google.com/cse/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		})();
		</script>

<!-- 		<gcse:searchbox></gcse:searchbox> -->
	</div> <!-- End of Google CSE Box -->
	
<?php endwhile; // end of the loop. ?>

<!-- Google CSE Result -->
<div class="span8">
	<div id="search-results">
		<gcse:searchresults-only></gcse:searchresults-only>
	</div> <!-- End of Google CSE Result -->
</div>
</div>

<?php get_footer(); ?>
