<?php get_header(  ); ?>


<div class="body-content">
	<div class="container">
		<div class="row">
			<div class="blog-page">
				<div class="col-md-9">

					<?php if(have_posts()):
							while(have_posts()): the_post();
							 ?>

					<div class="blog-post  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<a href="blog-details.html"><img class="img-responsive" src="assets/images/blog-post/blog_big_01.jpg" alt=""></a>
						<h1><a href="blog-details.html"><?php the_title(); ?></a></h1>
						<span class="author">John Doe</span>
						<span class="review">6 Comments</span>
						<span class="date-time">14/06/2016 10.00AM</span>
						<p><?php the_content(); ?></p>
						<a href="#" class="btn btn-upper btn-primary read-more">read more</a>
					</div>	

					<?php endwhile; endif; ?>		
			</div>
			<?php get_template_part( 'sidebar-right' ) ?>		
			</div>
		</div>
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
	</div>
</div>


<?php get_footer(  ); ?>