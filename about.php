<?php
/**
* This has to go on it to be a template page
* Template Name: About Us
*
* @author 
* UPDATED : LYLE PALAGAR 03/20/2013 2:58pm
* UPDATED : Justin Hamilton 03/20/2013 11:00pm
* UPDATED : LYLE PALAGAR 09/12/2013 6:17am
**/	
get_header();
?>

    <!-- This file contains the social media icons for the desktop version and also 
      the mobile version of the website -->
      <?php include_once "social-menu.php"; ?>
      
<div class="container container-narrow">
	<div class="row-fluid vert-padding">
		<!-- todo -->
		<div class="span10">
			<!-- change and style -->
			<h2 class="feature"> About I~Comm </h2>
		</div> 						  
	</div>
</div>

	<hr/>

	<div class="row-fluid responsive-about">
		<div class="span3">	<!-- Left Sidebar-->
			<figure>
		<img src="/wp-content/themes/icomm-bootstrap/img/icomm.png" width="120" height="164"/>
			</figure>
		</div>				<!-- End Left Sidebar -->

		<div id="post-content" class="span5"> 	<!-- Content -->
			
			<h3> Who Are We? </h3>
			<p>I~Comm Student Media is a student led program that gives all members a chance to gain real life work experience in all forms of media.
			   Students are given the opportunity to teach one another as well as take leader positions and develop great writing skills.
			   I~Comm allows students the chance to develop a professional resume and enhance their future work ethic by creating and designing quality products.
			</p>
						
			<h3> What We Do? </h3>
			<p> For more than a century, Scroll has been the source for campus and local news for BYU-Idaho students.
				During this time, an award winning student staff from across the country and around the world has managed Scroll.
				With the convergence of Scroll Digital, Scroll and Scroll Digital maintain their mark on campus and are working toward still larger goals.
				Together Scroll and Scroll Digital are more than just a print newspaper; they are on the verge of becoming a multimedia news outlet comparable to the current strides being made in the media industry.
				Scroll Digital is a student-run news program produced by students using today’s latest broadcast equipment including high-definition cameras, video-editing tools and the broadcast industry standard Associated Press, ENPS, news content management system.
			<p/>
		</div>						<!-- End Content -->
	</div>

	<div class="row-fluid"></div> <!-- I added this div so that I can push the footer on the bottom (LP) -->


<?php get_footer();?>
