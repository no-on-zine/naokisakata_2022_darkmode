<?php get_header(); ?>
<section id="page_main">
	<div id="main_img" class="list">
		<div class="score_02 list-mv08"></div>
	</div>
</section>
<div id="container">
	<section id="c_1" class="paragraph list">
		<section id="error">
			<div class="e_m">
				<p>
					That page can't be found!
					<br>
					Please visit again from the top page.
				</p>
			</div>
			<div id="link">
				<ul>
					<li>
						<a href="<?php echo home_url('en') ?>">>> English Website</a>
					</li>
					<li>
						<a href="<?php echo home_url('jp') ?>">>> Japanese Website</a>
					</li>
					<li>
						<a href="<?php echo home_url('fr') ?>">>> Site Français</a>
					</li>
				</ul>
			</div>
		</section>
	</section>
</div>
<!--container-->
<?php get_footer(); ?>