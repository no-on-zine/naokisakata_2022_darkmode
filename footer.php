<footer>
	<div id="footer_wrap">
		<div id="copy_r">
			<p>
				&copy;
				<?php
					  $fromYear = 2018; 
					  $thisYear = (int)date('Y'); 
					  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> NAOKI&nbsp;SAKATA
			</p>
		</div>
	</div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>