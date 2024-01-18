<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$casinoId = $args['post_id'] ?? null;

$casino_software = wp_get_object_terms($casinoId, 'software');
$casino_deposit_methods = wp_get_object_terms($casinoId, 'deposit-method');
$casino_withdrawal_methods = wp_get_object_terms($casinoId, 'withdrawal-method');
$casino_withdrawal_limits = wp_get_object_terms($casinoId, 'withdrawal-limit');
$casino_restricted_countries = wp_get_object_terms($casinoId, 'restricted-country');
$casino_licences = wp_get_object_terms($casinoId, 'licence');
$casino_languages = wp_get_object_terms($casinoId, 'casino-language');
$casino_currencies = wp_get_object_terms($casinoId, 'currency');
$casino_devices = wp_get_object_terms($casinoId, 'device');
$casino_owner = wp_get_object_terms($casinoId, 'owner');
$casino_est = wp_get_object_terms($casinoId, 'casino-est');


$infoList = [
  [
    'slug' => 'software',
    'title' => __('Software', 'mercury-child'),
    'terms' => $casino_software,
  ],
  [
    'slug' => 'deposit_method',
    'title' => __('Deposit Methods', 'mercury-child'),
    'terms' => $casino_deposit_methods
  ],
  [
    'slug' => 'withdrawal_method',
    'title' => __('Withdrawal Methods', 'mercury-child'),
    'terms' => $casino_withdrawal_methods
  ],
  [
    'slug' => 'withdrawal_limit',
    'title' => __('Withdrawal Limits', 'mercury-child'),
    'terms' => $casino_withdrawal_limits
  ],
  [
    'slug' => 'restricted_countries',
    'title' => __('Restricted Countries', 'mercury-child'),
    'terms' => $casino_restricted_countries
  ],
  [
    'slug' => 'licences',
    'title' => __('Licences', 'mercury-child'),
    'terms' => $casino_licences
  ],
  [
    'slug' => 'languages',
    'title' => __('Languages', 'mercury-child'),
    'terms' => $casino_languages
  ],
  [
    'slug' => 'currencies',
    'title' => __('Currencies', 'mercury-child'),
    'terms' => $casino_currencies
  ],
  [
    'slug' => 'devices',
    'title' => __('Devices', 'mercury-child'),
    'terms' => $casino_devices
  ],
  [
    'slug' => 'owner',
    'title' => __('Owner', 'mercury-child'),
    'terms' => $casino_owner
  ],
  [
    'slug' => 'est',
    'title' => __('Established', 'mercury-child'),
    'terms' => $casino_est
  ],
];

$infoListFiltered = array_filter($infoList, fn ($el) => !!$el);

if ($organization_disable_details == true || !$infoListFiltered) return; ?>

<div class="<?= classNames($className, 'lb-casino-details') ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-casino-details__list">
    <? foreach ($infoListFiltered as $info) { ?>
      <div class="lb-casino-details-item">
        <? get_template_part('theme-parts/molecules/featured-icon', null, [
          'size' => 'xl',
          'variant' => 'outlined-bold',
          'color' => 'gray',
          'icon' => 'zap',
          'className' => 'lb-casino-details-item__ico'
        ]); ?>
        <div class="lb-casino-details-item__content">
          <div class="lb-casino-details-item__header">
            <div class="lb-casino-details-item__title">
              <?php if (get_option('casinos_' . $info['slug'] . '_title')) { ?>
                <?php echo esc_html(get_option('casinos_' . $info['slug'] . '_title')); ?>:
              <?php } else { ?>
                <?= $info['title'] ?>
              <?php } ?>
            </div>
          </div>
          <div class="lb-casino-details-item__tags">
            <?php foreach ($info['terms'] as $term) {
              $term_logo = get_term_meta($term->term_id, 'taxonomy-image-id', true);
              if ($term_logo) { ?>
                <span class="lb-casino-details-tag">
                  <?php echo wp_get_attachment_image($term_logo, 'mercury-9999-32', "", array("class" => "lb-casino-details-tag__logo"));  ?>
                </span>
              <?php } else {  ?>
                <span class="lb-casino-details-tag"><?php echo esc_html($term->name); ?></span>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    <? } ?>
  </div>
</div>