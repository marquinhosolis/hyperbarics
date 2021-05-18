<?php
/*
Template Name: Our Team Page
*/
?>
<?php get_header(); ?> 

<main class="ourTeamPage">
	<div class="cover coverOurTeam" >
		<div class="coverImage" style="background-image: url(<?php the_field('our_team_background_image'); ?>"></div>
		<div class="container">
			<div class="coverContent" data-aos="fade-up">
				<h1>Making patients our priority</h1>
			</div>
		</div>
	</div>
	<section class="ourMissionCopy">
		<div class="container" data-aos="fade-up">
			<?php the_field('our_team_intro_copy'); ?>
		</div>
	</section>
	<section class="ourTeam">
		<div class="container">
			<h2 class="subtitle">Our Team</h2>
				<?php
					if( have_rows('team_members') ):
						while ( have_rows('team_members') ) : the_row(); ?>
							<div class="teamMember" data-aos="fade-up">
								<div class="teamMemberImage">
									<div class="teamMemberPhoto" style="background-image: url(<?php the_sub_field('team_member_image'); ?>);"></div>
									<div class="teamMemberCircle"></div>
								</div>
								<div class="teamMemberCopy">
									<div class="teamMemberName"><?php the_sub_field('team_member_name'); ?></div>
									
									<?php if( get_sub_field('team_member_video_link') ): ?>
										<a href="#" class="watchVideoLink"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Watch video</a>
									<?php endif; ?>
									<p class="teamMemberRole"><?php the_sub_field('team_member_role'); ?></p>
									<div class="teamMembersProfile">
										<?php the_sub_field('team_member_profile'); ?>
									</div>
								</div>
								<?php if( get_sub_field('team_member_video_link') ): ?>
									<div class="modalMask">
										<a href="#" class="closeModal">
											<i class="fa fa-times" aria-hidden="true"></i>
										</a>
										<div class="modalTeamMember">
											<?php the_sub_field('team_member_video_link'); ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
								
						<?php endwhile;
					endif;
				?>
		</div>
	</section>
</main>
<?php get_footer(); ?>	