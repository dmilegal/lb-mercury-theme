<div class="lb-sidebar not-prose">
	<div class="lb-sidebar__block">
		<div class="lb-sidebar__block-title">
			<?= __('Table of contents', 'mercury-child') ?>
		</div>
		<div class="lb-sidebar__block-content">
			<?= get_template_part('theme-parts/molecules/toc'); ?>
		</div>
	</div>
	<div class="lb-sidebar__block">
		<div class="lb-sidebar__block-content">
			<?= get_template_part('theme-parts/cells/share-links', null, [
				'title' => get_the_title(),
				'link' => get_permalink(),
			]); ?>
		</div>
	</div>
</div>