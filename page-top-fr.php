<?php //Template Name: Top FR
get_header(); ?>
<section id="top_main">
	<div id="main_img" class="list">
		<div class="score_01 list-mv08"></div>
		<?php include("inc/lang_fr.php"); ?>
		<div id="top_menu" class="lang_fr">
			<div class="logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/logo.png"
					alt="NAOKI SAKATA Website" title="NAOKI SAKATA Website">
			</div>
			<?php include("inc/p_nav_fr.php"); ?>
		</div>
	</div>
</section>
<div id="container">
	<section id="c_1">
		<h2>Actualités</h2>
		<div class="news_l list top-page">
			<?php
				$pickup = array(
					'meta_query' => array(
						array(	'key'=>'pickup',
							'value'=>'3'
						)
					)
				);
				$pickup_query = new WP_Query($pickup);
			?>
			<?php if ($pickup_query->have_posts()) : while ( $pickup_query->have_posts() ) : $pickup_query->the_post(); ?>
			<?php
					  $category = get_the_category();
					  $cat_id   = $category[0]->cat_ID;
					  $cat_name = $category[0]->cat_name;
					  $cat_slug = $category[0]->category_nicename;
					?>
			<div class="post top_page list-mv07">
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

			<?php endwhile; else: ?>
			<p class="no_post">Il n'y a pas d'article.</p>
			<?php endif; ?>
		</div>
		<div id="view_a">
			<a href="<?php echo home_url() ?>/category/fr/actualites_fr/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/voir_tout.png" alt="Voir Tout"
					title="Voir Tout">
			</a>
		</div>
	</section>
</div>
<?php get_footer(); ?>