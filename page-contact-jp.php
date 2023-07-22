<?php //Template Name: Contact JP
get_header(); ?>
<section id="page_main">
	<div id="main_img" class="list">
		<div class="score_02 list-mv08"></div>
	</div>
</section>
<div id="container">
	<section id="c_1" class="paragraph list">
		<h2>Contact</h2>
		<div class="contact_wrap">
			<div class="contact_d list-mv07">
				<?php if(have_posts()): while(have_posts()):the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="contact_f list-mv07">
				<?php echo do_shortcode('[contact-form-7 id="239" title="Contact Form JP"]'); ?>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>