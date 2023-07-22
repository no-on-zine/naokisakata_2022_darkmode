<?php
get_header(); ?>
	<?php wp_reset_query();
	if(post_is_in_descendant_category(1) //スラッグ jp の子孫カテゴリー(ニュース投稿用)を指定。functions.phpにも記述あり。
		): ?>
		<?php include("inc/category_jp.php"); ?>
	<?php
	elseif(post_is_in_descendant_category(10)
		): ?>
		<?php include("inc/category_en.php"); ?>
	<?php
	elseif(post_is_in_descendant_category(9)
		): ?>
		<?php include("inc/category_fr.php"); ?>
	<?php else: ?>
		<?php include("inc/category_jp.php"); ?>
	<?php endif; ?>
<?php get_footer(); ?>
