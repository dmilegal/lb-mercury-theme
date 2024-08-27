<?
$widgetId = $args['widget_id'] ?? 'default_sidebar';
?>
<div class="lb-sidebar not-prose">
	<ul class="lb-sidebar__inner">
		<? dynamic_sidebar($widgetId); ?>
	</ul>
</div>