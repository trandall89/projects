<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	<div class="main">
		<article class="contact-page">
			<h2><?php the_title(); ?></h2>
			<h3>Please provide us your info below if you would like to know more or would like to schedule a consultation.</h3>
			
			<?php the_content(); ?>
		</article>

		<form class="email-form" action="../emailus.php" method="post">
			<p>Your Name:</p>
				<input type="text" name="name" required placeholder="Enter Your Name" size="41">
			
			<p>Your Email:</p>
				<input type="text" name="email" required placeholder="Your Email Address" size="41">
			
			<p>Your Website(Optional):</p>
				<input type="url" name="website"  placeholder="Website" size="41">

			<p>Subject:</p>
				<input type="text" name="subject" required placeholder="Subject Line" size="41">

			<p>Message:</p>
				<textarea name="message" required cols="43" rows="4"></textarea>
			<br>
			<input type="submit" value="Submit" class="submit">
		</form>

	</div>

	<div class="footer-filler">
	</div>

	<?php endwhile;
	else :
		echo '<p>No content found</p>';

	endif;

get_footer();


?>

