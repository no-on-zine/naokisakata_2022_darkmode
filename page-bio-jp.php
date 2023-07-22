<?php //Template Name: Bio JP
get_header(); ?>
<section id="page_main">
	<div id="main_img" class="list">
		<div class="score_06 list-mv08"></div>
	</div>
</section>
<div id="container">
	<section id="c_1" class="paragraph list">
		<h2>Biography</h2>
		<h3>
			<span class="n_big">坂田 直樹</span>
			<span class="n_small">Naoki Sakata</span>
		</h3>
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<div class="page_content al list-mv07">
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
	</section>
</div>
<?php get_footer(); ?>