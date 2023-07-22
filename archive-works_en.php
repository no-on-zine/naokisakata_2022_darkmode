<?php
get_header(); ?>
<section id="page_main">
	<div id="main_img" class="list">
		<div class="score_05 list-mv08"></div>
	</div>
</section>
<div id="container">
	<section id="c_1" class="paragraph">
		<h2>Works</h2>
		<div class="news_w">
			<div class="archives">
				<div class="sticky">
					<div class="cat_l">
						<h3>Category</h3>
						<?php include("inc/works_cat_en.php"); ?>
					</div>
				</div>
			</div>
			<div class="news_l work_l list">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post list-mv07">
					<a class="table_w" href="<?php the_permalink() ?>">
						<div class="music_t">
							<?php the_title(); ?>
						</div>

						<?php $w_subtitle = get_field('w_subtitle');?>
						<?php if(empty($w_subtitle)):?>

						<?php else:?>
						<div class="music_sub_t">
							<?php echo $w_subtitle; ?>
						</div>
						<?php endif;?>



						<?php $w_year = get_field('w_year');?>
						<?php if(empty($w_year)):?>

						<?php else:?>
						<div class="w_year">
							<?php echo $w_year; ?>
						</div>
						<?php endif;?>
						<table>
							<tbody>

								<?php $w_organization = get_field('w_organization');?>
								<?php if(empty($w_organization)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Formation
									</td>
									<td class="t_detail">
										<?php echo $w_organization; ?>
									</td>
								</tr>
								<?php endif;?>


								<?php $w_instrument_listpage = get_field('w_instrument_listpage');?>
								<?php if(empty($w_instrument_listpage)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Detailed instrumentation
									</td>
									<td class="t_detail">
										<?php echo $w_instrument_listpage; ?>
									</td>
								</tr>
								<?php endif;?>


								<?php $w_length = get_field('w_length');?>
								<?php if(empty($w_length)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Duration
									</td>
									<td class="t_detail">
										<?php echo $w_length; ?>
									</td>
								</tr>
								<?php endif;?>


								<?php $w_premiere = get_field('w_premiere');?>
								<?php if(empty($w_premiere)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										First performance
									</td>
									<td class="t_detail">
										<?php echo $w_premiere; ?>
									</td>
								</tr>
								<?php endif;?>


								<?php $w_appointee = get_field('w_appointee');?>
								<?php if(empty($w_appointee)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Commission
									</td>
									<td class="t_detail">
										<?php echo $w_appointee; ?>
									</td>
								</tr>
								<?php endif;?>


							</tbody>
						</table>
					</a>
				</div>
				<?php endwhile; else: ?>
				<p class="no_post">記事はありません。</p>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<div id="pagenavi">
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	</div>
</div>


<div id="cat_m">
	<div class="cat_l_sp_btn">
		<div class="cat_l_sp_btn_txt">
			<span class="cat_cat">Category</span>
			<span class="cat_close">Close</span>
		</div>
	</div>
	<div class="cat_l_sp archives works">
		<?php include("inc/works_cat_en.php"); ?>
	</div>
</div>
<?php get_footer(); ?>