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
      <header class="lb-contact-info-section__header">
        <h2 class="lb-contact-info-section__title"><?= $title ?></h2>
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
        <iframe class="lb-contact-info-section__address-map"
          loading="lazy"
          allowfullscreen
          referrerpolicy="no-referrer-when-downgrade"
          frameborder="0"
          style="border:0"
          src="https://www.google.com/maps/embed/v1/place?key=<?= get_field('gmap_api_key', 'option') ?>
    &q=<?= esc_attr($address['address']) ?>"></iframe>
        </iframe>
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