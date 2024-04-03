<?php
get_header();
?>
<section class="blog-article pb-12 pt-5-c">
	<div class="container">
		<h2 class="h2 text-center">
			<?php the_title(); ?>
		</h2>

		<div class="article mx-auto">
			<article class="blog-grid__item">
				<div class="desc blog-grid__desc blog-grid__desc_auth blog-grid__desc_auth-article d-block text-center mb-3">
					<?= get_the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?> | <?= get_the_date('j F Y'); ?>
				</div>
				<div class="blog-grid__img blog-grid__img_bt blog-grid__img_art">
					<?php the_post_thumbnail('large') ?>
				</div>
				<div class="blog-grid__content rich-container">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	</div>
</section>
<?php

get_footer();
