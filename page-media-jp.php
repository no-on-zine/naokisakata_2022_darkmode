<?php //Template Name: Media JP
get_header(); ?>
<section id="page_main">
	<div id="main_img" class="list">
		<div class="score_02 list-mv08"></div>
	</div>
</section>
<div id="container">
	<section id="c_1" class="paragraph">
		<h2>Media</h2>
		<div class="news_w">
			<div class="archives">
				<div class="sticky">
					<div class="cat_l">
						<h3>Category</h3>
						<ul>
							<?php 
						$parentId = 743; // ここで指定したIDの子ページ一覧を出力する
						$args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
						query_posts($args);
						if (have_posts()) : 
						  $count = 1;
						  while (have_posts()) : 
						    the_post();
						    if ( ( $count % 2 ) > 0 ) {
						        $layout	= 'odd';
						    } else {
						        $layout	= 'even';
						    } ?>
							<li><a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a></li>
							<?php
						    $count++;
						   endwhile;
						endif;
						wp_reset_query();
						?>
						</ul>
					</div>
					<!--cat_l-->
				</div>
				<!--sticky-->
			</div>
			<!--archives-->
			<div class="news_l list page">
				<?php if(have_posts()): while(have_posts()):the_post(); ?>
				<div class="page_content">
					<?php the_content(); ?>
				</div>
				<!--page_content-->
				<?php endwhile; endif; ?>
			</div>
			<!--news_l list-->
		</div>
		<!--news_w-->
	</section>
</div>
<!--container-->
<div id="cat_m">
	<div class="cat_l_sp_btn">
		<div class="cat_l_sp_btn_txt">
			<span class="cat_cat">Category</span>
			<span class="cat_close">Close</span>
		</div>
	</div>
	<div class="cat_l_sp archives">
		<ul>
			<?php 
				$parentId = 743; // ここで指定したIDの子ページ一覧を出力する
				$args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
				query_posts($args);
				if (have_posts()) : 
				  $count = 1;
				  while (have_posts()) : 
				    the_post();
				    if ( ( $count % 2 ) > 0 ) {
				        $layout	= 'odd';
				    } else {
				        $layout	= 'even';
				    } ?>
			<li><a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a></li>
			<?php
				    $count++;
				   endwhile;
				endif;
				wp_reset_query();
				?>
		</ul>
	</div>
	<!--cat_l_sp archives-->
</div>
<!--cat_m-->
<?php get_footer(); ?>