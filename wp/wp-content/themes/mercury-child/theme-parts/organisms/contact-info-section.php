<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = $args['title'] ?? '';
$emails = $args['email_list'] ?? [];
$phones = $args['phone_list'] ?? [];
$address = $args['address'] ?? [];
?>

<section class="<?= classNames(
                  'lb-contact-info-section',
                  'not-prose',
                  $className,

                ) ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-contact-info-section__container">
    <? if ($title) { ?>
      <header class="lb-contact-info-section__header lb-section__header">
        <h2 class="lb-contact-info-section__title lb-section__title"><?= $title ?></h2>
      </header>
    <? } ?>
    <? if ($emails) { ?>
      <div class="lb-contact-info-section__emails">
        <? foreach ($emails as $email) { ?>
          <div class="lb-contact-info-section__email">
            <a href="mailto:<?= $email['email'] ?>" class="lb-contact-info-section__email-link"><?= $email['email'] ?></a>
            <span class="lb-contact-info-section__email-desc"><?= $email['description'] ?></span>
          </div>
        <? } ?>
      </div>
    <? } ?>
    <? if ($address) { ?>
      <div class="lb-contact-info-section__address">
        <div class="lb-contact-info-section__address-map" data-map="<?= esc_attr(json_encode($address)) ?>"></div>
        <div class="lb-contact-info-section__address-detail">
          <span class="lb-contact-info-section__address-full"><?= $address['address'] ?></span>
          <span class="lb-contact-info-section__address-caption"><?= __('Address', 'mercury-child') ?></span>
        </div>
      </div>
    <? } ?>
    <? if ($phones) { ?>
      <div class="lb-contact-info-section__phones">
        <? foreach ($phones as $phone) { ?>
          <div class="lb-contact-info-section__phone">
            <a href="tel:<?= preg_replace('/[\s\-\/]/', '', $phone['phone']) ?>" class="lb-contact-info-section__phone-link"><?= $phone['phone'] ?></a>
            <span class="lb-contact-info-section__phone-desc">
              <?= !empty($phone['description']) ? $phone['description'] : __('Phone number', 'mercury-child')  ?>
            </span>
          </div>
        <? } ?>
      </div>
    <? } ?>
  </div>
</section>