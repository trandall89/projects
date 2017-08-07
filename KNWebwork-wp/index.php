<?php

get_header(); ?>
<div class="site-content clearfix">
	<div class="main-column">
		<h1 class='main-header'>Coming Soon!</h1>

<!--
		<?php 

			if (have_posts()):
			while (have_posts()) : the_post(); 

			get_template_part('content', get_post_format());

			endwhile;

			else :
				echo '<p>No content found</p>';

			endif;

		 ?>

-->
	</div>

	<?php get_template_part('sidebar'); ?>

</div>


<?php
get_footer();

?>