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
						<?php include("news_cat_en.php"); ?>
					</div>
					<!--cat_l-->
					<div class="years_l">
						<h3>By Years</h3>
						<?php include("archives_en.php"); ?>
					</div>
					<!--years_l-->
				</div>
				<!--sticky-->
			</div>
			<!--archives-->

			<div class="news_l post_detail">
				<?php if(have_posts()): while(have_posts()):the_post(); ?>

				<?php
				  $category = get_the_category();
				  $cat_id   = $category[0]->cat_ID;
				  $cat_name = $category[0]->cat_name;
				  $cat_slug = $category[0]->category_nicename;
				?>

				<div class="post">
					<div class="post_h">
						<div class="post_name">
							<h2>
								<?php the_title(); ?>
							</h2>
						</div>
						<div class="<?php echo $cat_slug; ?> label">
							Category&nbsp;:&nbsp;
							<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
						</div>
					</div>
					<!--post_h-->
					<div class="date_f">
						<?php
						$date = get_field('date_f'); 
						if($date){ ?>
						<?php echo $date; ?>
						<?php } ?>
					</div>
					<div class="page_content">
						<?php the_content(); ?>
						<?php if(in_category( array('nextconcerts_en', 'pastconcerts_en'))): ?>
						<?php include("concerts_en.php"); ?>
						<?php endif; ?>
					</div>
				</div>
				<!--post-->
				<?php endwhile; endif; ?>
			</div>
			<!--news_l post_detail-->
		</div>
		<!--news_w-->
	</section>
	<!--paragraph-->
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
		<?php include("news_cat_en.php"); ?>
		<?php include("archives_en.php"); ?>
	</div>
	<!--cat_l_sp archives-->
</div>
<!--cat_m-->