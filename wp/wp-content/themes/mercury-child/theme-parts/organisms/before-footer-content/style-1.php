<?
$content = get_field("before_footer_content");
if (!$content) return;
?>
<div class="lb-layout__aftercontent">
  <div class="lb-layout__aftercontent-inner">
    <?= $content ?>
  </div>
</div>