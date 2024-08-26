<?php
	get_header();
?>

	<div class="col-lg-8 col-md-12 primerC">

		<div class="clear"></div>

		<?php 
		while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<h4><b>Publicado el: </b><span class="fecha-post"><?= get_the_date(); ?></span></h4>
			<p><?php the_content(); ?></p>

		<?php 
		endwhile; ?>

	</div>

	<div class="col-lg-4 col-md-5 col-xs-12 segundaC">

		<div class="mb20 clear"></div>
	</div><!-- segundaC -->

<?php get_footer(); ?>