<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php
		moire_post_thumbnail()
	?>

	<div class="entry-header">
    <div class="archive-content-inner-wrap">
			<div class="archive-content-desc">
				<div class="archive-item-author-wrap">
					<?php
						moire_posted_date()
					?>
				</div>
			</div>

			<?php
				the_title( '<h2 class="archive-item-title">', '</h2>' );
			?>
		</div>
	</div>

	<a
	  href="<?php echo esc_url(get_permalink()) ?>"
		rel="bookmark"
	>
	</a>
</article><!-- #post-## -->
