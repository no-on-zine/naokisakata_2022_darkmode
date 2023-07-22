<?php //Template Name: Bio FR
get_header(); ?>
<section id="page_main">
	<div id="main_img" class="list">
		<div class="score_02 list-mv08"></div>
	</div>
</section>
<div id="container">
	<section id="c_1" class="paragraph">
		<h2>Biographie</h2>
		<h3>
			<span class="n_big">Naoki Sakata</span>
		</h3>
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<div class="page_content al">
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
	</section>
</div>
<?php get_footer(); ?>