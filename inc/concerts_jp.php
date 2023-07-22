<?php $c_presentation = get_field('c_presentation');?>
<?php if(empty($c_presentation)):?>
<?php else:?>
	<div class="detail_wrap petit">	
		<div class="c_presentation list-mv07">
			<?php echo $c_presentation; ?>
		</div>
	</div>
<?php endif;?>
	


<?php $c_externallink = get_field('c_externallink');
if( $c_externallink ): 
	$link_url = $c_externallink['url'];
	$link_title = $c_externallink['title'];
	$link_target = $c_externallink['target'] ? $c_externallink['target'] : '_self';
	?>
	<div class="detail_wrap petit">	
		<div class="c_externallink list-mv07">
			<h4 class="info">公演情報</h4>
			<a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
				<?php echo esc_html($link_title); ?>
			</a>
		</div>
	</div>
<?php endif; ?>



<?php $c_works = get_field('c_works');?>
<?php if(empty($c_works)):?>
<?php else:?>
	<div class="detail_wrap">
		<div class="c_works list-mv07">
			<h4 class="info">演奏作品</h4>
			<?php echo $c_works; ?>
		</div>
	</div>
<?php endif;?>



<?php $c_title = get_field('c_title');?>
<?php if(empty($c_title)):?>
<?php else:?>
	<div class="detail_wrap c_margin_01">
		<div class="c_title list-mv07">
			<?php echo $c_title; ?>
		</div>
<?php endif;?>



<?php $c_subtitle = get_field('c_subtitle');?>
<?php if(empty($c_subtitle)):?>
	</div>
<?php else:?>
		<div class="c_subtitle list-mv07">
			<?php echo $c_subtitle; ?>
		</div>
	</div>
<?php endif;?>



<?php $c_image01 = get_field('c_image01');?>
<?php if(empty($c_image01)):?>
<?php else:?>
	<div class="detail_wrap petit">
		<div class="c_image01 list-mv07">
			<?php echo $c_image01; ?>
		</div>
	</div>
<?php endif;?>

<div class="detail_wrap">
	<table class="list-mv07">
		<tbody>
		
			<?php $c_date = get_field('c_date');?>
			<?php if(empty($c_date)):?>
								    
			<?php else:?>
				<tr>
					<td class="t_item">
						公演日
					</td>
					<td class="t_detail">
						<?php echo $c_date; ?>
					</td>
				</tr>
			<?php endif;?>
			
			
			<?php $c_place = get_field('c_place');?>
			<?php if(empty($c_place)):?>
								    
			<?php else:?>
				<tr>
					<td class="t_item">
						会場
					</td>
					<td class="t_detail">
						<?php echo $c_place; ?>
						
						<?php 

						$location = get_field('c_map');

						if( !empty($location) ):
						?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>
					</td>
				</tr>
			<?php endif;?>
			
			
			<?php $c_time = get_field('c_time');?>
			<?php if(empty($c_time)):?>
								    
			<?php else:?>
				<tr>
					<td class="t_item">
						開演
					</td>
					<td class="t_detail">
						<?php echo $c_time; ?>
					</td>
				</tr>
			<?php endif;?>
			
			
			<?php $c_performer = get_field('c_performer');?>
			<?php if(empty($c_performer)):?>
								    
			<?php else:?>
				<tr>
					<td class="t_item">
						出演者
					</td>
					<td class="t_detail">
						<?php echo $c_performer; ?>
					</td>
				</tr>
			<?php endif;?>
			
			
			
			<?php $c_musiclist = get_field('c_musiclist');?>
			<?php if(empty($c_musiclist)):?>
								    
			<?php else:?>
				<tr>
					<td class="t_item">
						曲目
					</td>
					<td class="t_detail">
						<?php echo $c_musiclist; ?>
					</td>
				</tr>
			<?php endif;?>
			
			
			<?php $c_ticket = get_field('c_ticket');?>
			<?php if(empty($c_ticket)):?>
								    
			<?php else:?>
				<tr>
					<td class="t_item">
						チケット
					</td>
					<td class="t_detail">
						<?php echo $c_ticket; ?>
					</td>
				</tr>
			<?php endif;?>
			
			
			<?php $c_ticketinfo = get_field('c_ticketinfo');?>
			<?php if(empty($c_ticketinfo)):?>
								    
			<?php else:?>
				<tr>
					<td class="t_item">
						お問い合わせ
					</td>
					<td class="t_detail">
						<?php echo $c_ticketinfo; ?>
					</td>
				</tr>
			<?php endif;?>
			
			
			<?php $c_organizer = get_field('c_organizer');?>
			<?php if(empty($c_organizer)):?>
								    
			<?php else:?>
				<tr>
					<td class="t_item">
						主催
					</td>
					<td class="t_detail">
						<?php echo $c_organizer; ?>
					</td>
				</tr>
			<?php endif;?>
			
			
		</tbody>
	</table>
</div>


<?php $c_profile = get_field('c_profile');?>
<?php if(empty($c_profile)):?>
<?php else:?>
	<div class="detail_wrap">
		<div class="c_profile list-mv07">
			<h3 class="info">出演者プロフィール</h3>
			<?php echo $c_profile; ?>
		</div>
	</div>
<?php endif;?>



<?php $c_gallery = get_field('c_gallery');?>
<?php if(empty($c_gallery)):?>
<?php else:?>
	<div class="detail_wrap c_margin_02">
		<div class="c_gallery list-mv07">
			<?php echo $c_gallery; ?>
		</div>
	</div>
<?php endif;?>


<?php $c_othertitle = get_field('c_othertitle');?>
<?php $c_otherdetail = get_field('c_otherdetail');?>
<?php if(empty($c_othertitle)):?>
<?php else:?>
	<div class="detail_wrap">
		<div class="c_othertitle list-mv07">
			<h3 class="info"><?php echo $c_othertitle; ?></h3>
		</div>
		<div class="c_otherdetail list-mv07">
			<?php echo $c_otherdetail; ?>
		</div>
	</div>
<?php endif;?>