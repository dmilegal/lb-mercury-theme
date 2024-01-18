<?
global $post;

$contributorIds = get_field('co-authors');
$authorId = $post->post_author;
?>
<div class="lb-sidebar not-prose">
	<div class="lb-sidebar__inner">
		<div class="lb-sidebar__block lb-sidebar__block--collapse lb-sidebar__block--state_opened">
			<button class="lb-sidebar__block-title">
				<?= __('Table of contents', 'mercury-child') ?>
				<i class="icon-minus-circle lb-sidebar__block-ico lb-sidebar__block-ico--opened"></i>
				<i class="icon-plus-circle lb-sidebar__block-ico lb-sidebar__block-ico--closed"></i>
			</button>
			<div class="lb-sidebar__block-content">
				<? get_template_part('theme-parts/molecules/toc'); ?>
			</div>
		</div>
		<? if ($contributorIds) { ?>
		<div class="lb-sidebar__block lb-sidebar__block--gap_lg">
			<div class="lb-sidebar__block-title">
				<?= __('Contributors', 'mercury-child') ?>
			</div>
			<div class="lb-sidebar__block-content">
				<? get_template_part('theme-parts/organs/contributor-list', null, [
					'user_ids' => $contributorIds,
				]); ?>
			</div>
		</div>
		<? } ?>
		<div class="lb-sidebar__block">
			<div class="lb-sidebar__block-content">
				<? get_template_part('theme-parts/cells/share-links', null, [
					'title' => get_the_title(),
					'link' => get_permalink(),
				]); ?>
			</div>
		</div>
	</div>
</div>