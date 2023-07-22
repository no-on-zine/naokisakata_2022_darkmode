<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<?php include("inc/ga_js.php"); ?>
<body <?php body_class(); ?>>
	<?php include("inc/fb_js.php"); ?>
<div id="page" <?php post_class(); ?>>
	

			
	<?php wp_reset_query();
	if(post_is_in_descendant_category(1) //スラッグ jp の子孫カテゴリー(ニュース投稿用)を指定。functions.phpにも記述あり。
		|| get_post_type() == 'works_jp' //Worksの一覧、詳細ページを指定
			|| is_page(143) //固定ページ Home JPを指定
				|| in_array(143, get_post_ancestors($post->ID)) //Home JPの子孫ページを指定
					): ?>
				
		<?php include("inc/header_jp.php"); ?>
				
	<?php
	elseif(post_is_in_descendant_category(10)
		|| get_post_type() == 'works_en'
			|| is_page(162)
				|| in_array(162, get_post_ancestors($post->ID))
					): ?>
				
		<?php include("inc/header_en.php"); ?>
				
	<?php
	elseif(post_is_in_descendant_category(9)
		|| get_post_type() == 'oeuvres_fr'
			|| is_page(165)
				|| in_array(165, get_post_ancestors($post->ID))
					): ?>
				
		<?php include("inc/header_fr.php"); ?>
				
	<?php else: ?>
				
		<?php include("inc/header_en.php"); ?>
				
	<?php endif; ?>
			
			
