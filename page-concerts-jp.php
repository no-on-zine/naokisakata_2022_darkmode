<?php //Template Name: Concerts JP

get_header(); ?>

<section id="page_main">
	
	<div id="main_img" class="list">
		
		<div class="score_03 list-mv08"></div>
		
	</div>
	
</section>

<div id="container">
	
	<section id="c_1" class="paragraph">
		
		<h1>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/concerts_h.png?<?php echo date("YmdHis");?>" alt="Concerts" title="Concerts">
		</h1>
		
		<div class="news_l list">
			<?php
			        $args = array (
			        'category__in' => array('15'), // カテゴリのIDを記入する
			        'order' => 'DESC', // 記事の並び順 昇順（ASC）、降順（DESC）
			        'paged' => $paged,
			        'post_per_page' => 10, //表示する記事の数
			    );
			    $paged = (int) get_query_var('paged');
			    $the_query = new WP_Query( $args ); ?>
			    <?php if( $the_query -> have_posts() ): while ( $the_query -> have_posts()): $the_query -> the_post(); ?>
						
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
			    <p class="no_post">記事はありません。</p>
					
					<?php endif; ?>
					
		</div>
		
		
		
	</section>
	
	<section id="c_2" class="paragraph">
		
		<h1>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/p_concerts_h.png?<?php echo date("YmdHis");?>" alt="Past Concerts" title="Past Concerts">
		</h1>
		
		<div class="news_l list">
			<?php
			        $args = array (
			        'category__in' => array('16'), // カテゴリのIDを記入する
			        'order' => 'DESC', // 記事の並び順 昇順（ASC）、降順（DESC）
			        'paged' => $paged,
			        'post_per_page' => 6, //表示する記事の数
			    );
			    $paged = (int) get_query_var('paged');
			    $the_query = new WP_Query( $args );
					?>
			    <?php if( $the_query -> have_posts() ): while ( $the_query -> have_posts()): $the_query -> the_post(); ?>
						
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
			    <p class="no_post">記事はありません。</p>
					
					<?php endif; ?>
					
		</div>
		
		<div id="view_a">
			<a href="<?php echo home_url() ?>/category/jp/news_jp/pastconcerts_jp/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/view_a.png" alt="View All" title="View All">
			</a>
		</div>
		
	</section>
	
</div>



<?php get_footer(); ?>
