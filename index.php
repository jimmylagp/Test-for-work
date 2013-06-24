<?php get_header(); ?>
			<section id="posts">
				<div id="visible">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<?php the_post_thumbnail( array(80,80) ); ?>
						<div class="message">
							<div class="arrrow-shadow"></div>
							<div class="arrrow-border"></div>
							<div class="arrow"></div>
							<div class="box">
								<?php the_excerpt(); ?>
								<small class="author">
									- <?php the_author_firstname(); ?>, <?php the_author_lastname(); ?>
								</small>
							</div>	
						</div>
					</article>
						<?php endwhile; ?>
					<?php else : ?>
						<h2><?php echo 'No se encontro nada.'; ?></h2>
					<?php endif; ?>
				</div>
			</section>
		</section>
	</section>
<?php get_footer(); ?>