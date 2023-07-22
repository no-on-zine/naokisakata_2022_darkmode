<section id="page_main">
	<div id="main_img" class="list">
		<div class="score_03 list-mv08"></div>
	</div>
</section>

<div id="container">
	<section id="c_1" class="paragraph">
		<h2>News</h2>
		<div class="news_w">
			<div class="archives">
				<div class="sticky">
					<div class="cat_l">
						<h3>Category</h3>
						<?php include("news_cat_jp.php"); ?>
					</div>
					<!--cat_l-->
					<div class="years_l">
						<h3>By Years</h3>
						<?php include("archives_jp.php"); ?>
					</div>
					<!--years_l-->
				</div>
				<!--sticky-->
			</div>
			<!--archives-->
			<div class="news_l list archive-page">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php
			  $category = get_the_category();
			  $cat_id   = $category[0]->cat_ID;
			  $cat_name = $category[0]->cat_name;
			  $cat_slug = $category[0]->category_nicename;
			?>
				<div class="post list-mv07">
					<div class="post_h">
						<div class="<?php echo $cat_slug; ?> label">
							<span>
								<?php $cat = get_the_category();
							$cat = $cat[0];
							echo get_cat_name($cat->term_id);
							?>
							</span>
						</div>
					</div>
					<!--post_h-->

					<a class="post_t" href="<?php the_permalink() ?>">
						<div class="date_f">
							<?php
						$date = get_field('date_f'); 
						if($date){ ?>
							<?php echo $date; ?>
							<?php } ?>
						</div>

						<div class="post_name">
							<?php the_title(); ?>
						</div>

						<div class="comment_f">
							<?php
						$comment = get_field('comment_f'); 
						if($comment){ ?>
							<?php echo $comment; ?>
							<?php } ?>
						</div>
					</a>
				</div>
				<!--post list-mv07-->
				<?php endwhile; else: ?>
				<p class="no_post"></p>
				<?php endif; ?>
			</div>
			<!--news_l list-->
		</div>
		<!--news_w-->
	</section>
	<!--paragraph-->
	<div id="pagenavi">
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>
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
		<?php include("news_cat_jp.php"); ?>
		<?php include("archives_jp.php"); ?>
	</div>
	<!--cat_l_sp archives-->
</div>
<!--cat_m-->