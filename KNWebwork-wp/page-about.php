<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
      <!--Main-->
      <div class="main">
	<div class="container-comp clearfix">
	
	<!--Title Column-->
	<div class="left-comp">
	<h2 class="about-title">Competencies</h2>
	</div><!--/Title Column-->
	
	<!--Content column-->
	<div class="right-comp">
            <ul id="comp-list">
                  <li type="circle" class="hidden">Responsive Design</li>
                  <li type="circle" class="hidden">APIs</li>
                  <li type="circle" class="hidden">Mobile Design</li>
                  <li type="circle" class="hidden">Search Engine Optimization(SEO)</li>
                  <li type="circle" class="hidden">HTML5</li>
                  <li type="circle" class="hidden">PHP</li>
                  <li type="circle" class="hidden">CSS3</li>
                  <li type="circle" class="hidden">Haml</li>
                  <li type="circle" class="hidden">Javascript</li>
                  <li type="circle" class="hidden">Website Maintenance</li>
                  <li type="circle" class="hidden">Ecommerce</li>
                  <li type="circle" class="hidden">WooCommerce Plugin</li>
                  <li type="circle" class="hidden">AWS</li>
                  <li type="circle" class="hidden">Jquery</li>
                  <li type="circle" class="hidden">mySQL</li>
                  <li type="circle" class="hidden">Ruby</li>
                  <li type="circle" class="hidden">Ruby on Rails</li>
                  <li type="circle" class="hidden">Google Maps</li>
                  <li type="circle" class="hidden">Wordpress</li>
            </ul>  
	</div><!--/Content column-->
	
	</div><!--/Container column-->
      </div><!--/Main-->

      <div class="footer-filler">
      </div>

      <?php endwhile;
	else :
		echo '<p>No content found</p>';

	endif;
get_footer();


?>

