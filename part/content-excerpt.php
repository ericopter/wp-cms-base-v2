<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
		?>
<article>
	<header>
		<h1 class="post-title">
			<?php the_title(); ?>
		</h1>
	</header>

	<div class="post-excerpt">
		<?php
		the_excerpt();
		echo ewd_continue_reading_link();
		?>
	</div>
</article>
		<?php
	endwhile;
endif;
?>