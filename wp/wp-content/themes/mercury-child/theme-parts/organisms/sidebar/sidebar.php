<?
global $post;

$contributorIds = get_field('co-authors');
$authorId = $post->post_author;
?>
<div class="lb-sidebar not-prose">
	<div class="lb-sidebar__inner">
		<div class="lb-sidebar__block lb-sidebar__block--toc">
			<button class="lb-sidebar__block-title">
				<?= __('Table of contents', 'mercury-child') ?>
			</button>
			<div class="lb-sidebar__block-content">
				<? get_template_part('theme-parts/molecules/toc'); ?>
			</div>
		</div>
		<? if ($contributorIds) { ?>
			<div class="lb-sidebar__block lb-sidebar__block--contributors">
				<div class="lb-sidebar__block-title">
					<?= __('Contributors', 'mercury-child') ?>
				</div>
				<div class="lb-sidebar__block-content">
					<? get_template_part('theme-parts/organs/contributor-list', null, [
						'user_ids' => $contributorIds,
						'size' => 'lg'
					]); ?>
				</div>
			</div>
		<? } ?>
		<div class="lb-sidebar__block lb-sidebar__block--soc">
			<div class="lb-sidebar__block-content">
				<? get_template_part('theme-parts/cells/share-links', null, [
					'title' => get_the_title(),
					'link' => get_permalink(),
				]); ?>
			</div>
		</div>
	</div>
</div>