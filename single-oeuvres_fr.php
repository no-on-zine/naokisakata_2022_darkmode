<?php
/*
Template Name: Oeuvres FR
*/
get_header(); ?>
<section id="page_main">
	<div id="main_img" class="list">
		<div class="score_05 list-mv08"></div>
	</div>
</section>
<div id="container">
	<section id="c_1" class="paragraph">
		<h2>Œuvres</h2>
		<div class="news_w">
			<div class="archives">
				<div class="sticky">
					<div class="cat_l">
						<h3>Catégorie</h3>
						<?php include("inc/works_cat_fr.php"); ?>
					</div>
				</div>
			</div>
			<div class="news_l works_detail list">
				<?php if(have_posts()): while(have_posts()):the_post(); ?>
				<div class="post">

					<div class="music_t list-mv07">
						<?php the_title(); ?>
					</div>

					<?php $w_subtitle = get_field('w_subtitle');?>
					<?php if(empty($w_subtitle)):?>

					<?php else:?>
					<div class="music_sub_t list-mv07">
						<?php echo $w_subtitle; ?>
					</div>
					<?php endif;?>


					<?php $w_year = get_field('w_year');?>
					<?php if(empty($w_year)):?>

					<?php else:?>
					<div class="w_year list-mv07">
						<?php echo $w_year; ?>
					</div>
					<?php endif;?>


					<?php $w_audio_1 = get_field('w_audio_1');?>
					<?php if(empty($w_audio_1)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audio_detail">
									<?php echo $w_audio_1; ?>
								</div>
							</div>
						</div>
						<?php endif;?>


						<?php $w_audio_1_com = get_field('w_audio_1_com');?>
						<?php if(empty($w_audio_1_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audiocom_detail">
									<?php echo $w_audio_1_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>


					<?php $w_audio_2 = get_field('w_audio_2');?>
					<?php if(empty($w_audio_2)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audio_detail">
									<?php echo $w_audio_2; ?>
								</div>
							</div>
						</div>
						<?php endif;?>


						<?php $w_audio_2_com = get_field('w_audio_2_com');?>
						<?php if(empty($w_audio_2_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audiocom_detail">
									<?php echo $w_audio_2_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>


					<?php $w_audio_3 = get_field('w_audio_3');?>
					<?php if(empty($w_audio_3)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audio_detail">
									<?php echo $w_audio_3; ?>
								</div>
							</div>
						</div>
						<?php endif;?>


						<?php $w_audio_3_com = get_field('w_audio_3_com');?>
						<?php if(empty($w_audio_3_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audiocom_detail">
									<?php echo $w_audio_3_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>



					<div class="detail_wrap">
						<table class="list-mv07">
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


								<?php $w_instrument = get_field('w_instrument');?>
								<?php if(empty($w_instrument)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Instrumentation détaillée
									</td>
									<td class="t_detail">
										<?php echo $w_instrument; ?>
									</td>
								</tr>
								<?php endif;?>


								<?php $w_length = get_field('w_length');?>
								<?php if(empty($w_length)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Durée
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
										Création
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
										Commande
									</td>
									<td class="t_detail">
										<?php echo $w_appointee; ?>
									</td>
								</tr>
								<?php endif;?>


								<?php $w_prize = get_field('w_prize');?>
								<?php if(empty($w_prize)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Prix
									</td>
									<td class="t_detail">
										<?php echo $w_prize; ?>
									</td>
								</tr>
								<?php endif;?>



								<?php $w_dedication = get_field('w_dedication');?>
								<?php if(empty($w_dedication)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Dédicataire
									</td>
									<td class="t_detail">
										<?php echo $w_dedication; ?>
									</td>
								</tr>
								<?php endif;?>



								<?php $w_publisher = get_field('w_publisher');?>
								<?php if(empty($w_publisher)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Éditeur
									</td>
									<td class="t_detail">
										<?php echo $w_publisher; ?>
									</td>
								</tr>
								<?php endif;?>


								<?php $w_catalognum = get_field('w_catalognum');?>
								<?php if(empty($w_catalognum)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Numéro de catalogue
									</td>
									<td class="t_detail">
										<?php echo $w_catalognum; ?>
									</td>
								</tr>
								<?php endif;?>


								<?php $w_copyright = get_field('w_copyright');?>
								<?php if(empty($w_copyright)):?>

								<?php else:?>
								<tr>
									<td class="t_item">
										Droit d'auteur
									</td>
									<td class="t_detail">
										<?php echo $w_copyright; ?>
									</td>
								</tr>
								<?php endif;?>


							</tbody>
						</table>
					</div>

					<?php $w_ec = get_field('w_ec');?>
					<?php if(empty($w_ec)):?>
					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_item ec_site">
									<a href="<?php echo $w_ec; ?>" target="_blank">Acheter la partition</a>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>

					<?php $w_other = get_field('w_other');?>
					<?php $w_other_title = get_field('w_other_title');?>
					<?php if(empty($w_other)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_item other_item">
									<?php echo $w_other_title; ?>
								</div>
							</div>
							<div class="list-mv07">
								<div class="t_detail other_detail">
									<?php echo $w_other; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>



					<?php $w_excerpt = get_field('w_excerpt');?>
					<?php if(empty($w_excerpt)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail excerpt_detail">
									<?php echo $w_excerpt; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>


					<?php $w_commentary = get_field('w_commentary');?>
					<?php if(empty($w_commentary)):?>

					<?php elseif(!empty($post->post_content)||(empty($w_commentary))):?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_item commentary_item">
									Note de programme
								</div>
							</div>
							<div class="list-mv07">
								<div class="t_detail commentary_detail">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_item commentary_item">
									Note de programme
								</div>
							</div>
							<div class="list-mv07">
								<div class="t_detail commentary_detail">
									<?php echo $w_commentary; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>



					<?php $w_audio_4 = get_field('w_audio_4');?>
					<?php if(empty($w_audio_4)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audio_detail">
									<?php echo $w_audio_4; ?>
								</div>
							</div>
						</div>
						<?php endif;?>

						<?php $w_audio_4_com = get_field('w_audio_4_com');?>
						<?php if(empty($w_audio_4_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audiocom_detail">
									<?php echo $w_audio_4_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>


					<?php $w_audio_5 = get_field('w_audio_5');?>
					<?php if(empty($w_audio_5)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audio_detail">
									<?php echo $w_audio_5; ?>
								</div>
							</div>
						</div>
						<?php endif;?>

						<?php $w_audio_5_com = get_field('w_audio_5_com');?>
						<?php if(empty($w_audio_5_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audiocom_detail">
									<?php echo $w_audio_5_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>


					<?php $w_audio_6 = get_field('w_audio_6');?>
					<?php if(empty($w_audio_6)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audio_detail">
									<?php echo $w_audio_6; ?>
								</div>
							</div>
						</div>
						<?php endif;?>

						<?php $w_audio_6_com = get_field('w_audio_6_com');?>
						<?php if(empty($w_audio_6_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail audiocom_detail">
									<?php echo $w_audio_6_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>



					<?php $w_video_1 = get_field('w_video_1');?>
					<?php if(empty($w_video_1)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail video_detail">
									<div class="video-container">
										<?php echo $w_video_1; ?>
									</div>
								</div>
							</div>
						</div>
						<?php endif;?>

						<?php $w_video_1_com = get_field('w_video_1_com');?>
						<?php if(empty($w_video_1_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail videocom_detail">
									<?php echo $w_video_1_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>


					<?php $w_video_2 = get_field('w_video_2');?>
					<?php if(empty($w_video_2)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail video_detail">
									<div class="video-container">
										<?php echo $w_video_2; ?>
									</div>
								</div>
							</div>
						</div>
						<?php endif;?>

						<?php $w_video_2_com = get_field('w_video_2_com');?>
						<?php if(empty($w_video_2_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail videocom_detail">
									<?php echo $w_video_2_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>


					<?php $w_video_3 = get_field('w_video_3');?>
					<?php if(empty($w_video_3)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail video_detail">
									<div class="video-container">
										<?php echo $w_video_3; ?>
									</div>
								</div>
							</div>
						</div>
						<?php endif;?>

						<?php $w_video_3_com = get_field('w_video_3_com');?>
						<?php if(empty($w_video_3_com)):?>

						<?php else:?>
						<div class="detail_w">
							<div class="list-mv07">
								<div class="t_detail videocom_detail">
									<?php echo $w_video_3_com; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>


					<?php $w_discography = get_field('w_discography');?>
					<?php if(empty($w_discography)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">

							<div class="list-mv07">
								<div class="t_item disco_item">
									Discographie
								</div>
							</div>

							<div class="list-mv07 flex">
								<div class="t_item disco_img">
									<?php if( get_field('w_discography_img') ): ?>
									<img src="<?php the_field('w_discography_img'); ?>" />
									<?php endif; ?>
								</div>
								<div class="t_detail disco_text">
									<?php echo $w_discography; ?>
								</div>
							</div>

						</div>
					</div>
					<?php endif;?>



					<?php $w_replay = get_field('w_replay');?>
					<?php if(empty($w_replay)):?>

					<?php else:?>
					<div class="detail_wrap">
						<div class="detail_w">

							<div class="list-mv07">
								<div class="t_item replay_item">
									Reprise
								</div>
							</div>
							<div class="list-mv07">
								<div class="t_detail replay_detail">
									<?php echo $w_replay; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif;?>




					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>
<div id="cat_m">
	<div class="cat_l_sp_btn">
		<div class="cat_l_sp_btn_txt">
			<span class="cat_cat">Catégorie</span>
			<span class="cat_close">Fermer</span>
		</div>
	</div>
	<div class="cat_l_sp archives works">
		<?php include("inc/works_cat_fr.php"); ?>
	</div>
</div>
<?php get_footer(); ?>