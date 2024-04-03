<footer class="footer">
	<div class="container footer__container d-flex justify-content-between">
		<a href="/" class="footet-logo">
			<img src="<?= ASSETS_PATH ?>/img/footer-logo.svg" alt="Footer Logo">
		</a>
		<address class="address">
			<?php
			foreach (carbon_get_theme_option('contact_locations') as $location) :
			?>
				<div class="address__list">
					<h6 class="text-uppercase"><?= $location['title'] ?></h6>
					<?= nl2br($location['text']) ?>
				</div>
			<?php
			endforeach;
			?>
		</address>
	</div>
	<div class="all-rights text-center">
		© <?= date('Y') ?> Sierra West Airlines. All Rights Reserved. | <a href="/">Privacy Statement</a>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>