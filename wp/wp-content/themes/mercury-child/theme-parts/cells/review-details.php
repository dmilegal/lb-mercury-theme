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
    'ico' => 'cpu'
  ],
  [
    'slug' => 'deposit_method',
    'title' => __('Deposit Methods', 'mercury-child'),
    'terms' => $casino_deposit_methods,
    'ico' => 'deposite'
  ],
  [
    'slug' => 'withdrawal_method',
    'title' => __('Withdrawal Methods', 'mercury-child'),
    'terms' => $casino_withdrawal_methods,
    'ico' => 'withdraw'
  ],
  [
    'slug' => 'withdrawal_limit',
    'title' => __('Withdrawal Limits', 'mercury-child'),
    'terms' => $casino_withdrawal_limits,
    'ico' => 'coins'
  ],
  [
    'slug' => 'restricted_countries',
    'title' => __('Restricted Countries', 'mercury-child'),
    'terms' => $casino_restricted_countries,
    'ico' => 'flag'
  ],
  [
    'slug' => 'licences',
    'title' => __('Licences', 'mercury-child'),
    'terms' => $casino_licences,
    'ico' => 'file-text'
  ],
  [
    'slug' => 'languages',
    'title' => __('Languages', 'mercury-child'),
    'terms' => $casino_languages,
    'ico' => 'message-circle'
  ],
  [
    'slug' => 'currencies',
    'title' => __('Currencies', 'mercury-child'),
    'terms' => $casino_currencies,
    'ico'  => 'money'
  ],
  [
    'slug' => 'devices',
    'title' => __('Devices', 'mercury-child'),
    'terms' => $casino_devices,
    'ico' => 'smartphone'
  ],
  [
    'slug' => 'owner',
    'title' => __('Owner', 'mercury-child'),
    'terms' => $casino_owner,
    'ico' => 'home'
  ],
  [
    'slug' => 'est',
    'title' => __('Established', 'mercury-child'),
    'terms' => $casino_est,
    'ico' => 'zap'
  ],
];

$infoListFiltered = array_filter($infoList, fn ($el) => !!$el);

if (!$infoListFiltered) return; ?>

<div class="<?= classNames($className, 'lb-review-details') ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-review-details__list">
    <? foreach ($infoListFiltered as $info) { ?>
      <div class="lb-review-details-item">
        <? get_template_part('theme-parts/molecules/featured-icon', null, [
          'size' => 'xl',
          'variant' => 'outlined-bold',
          'color' => 'gray',
          'icon' => $info['ico'],
          'className' => 'lb-review-details-item__ico'
        ]); ?>
        <div class="lb-review-details-item__content">
          <div class="lb-review-details-item__header">
            <div class="lb-review-details-item__title">
              <?php if (get_option('casinos_' . $info['slug'] . '_title')) { ?>
                <?php echo esc_html(get_option('casinos_' . $info['slug'] . '_title')); ?>:
              <?php } else { ?>
                <?= $info['title'] ?>
              <?php } ?>
            </div>
          </div>
          <div class="lb-review-details-item__tags">
            <?php foreach ($info['terms'] as $term) {
              $term_logo = get_term_meta($term->term_id, 'taxonomy-image-id', true);
              if ($term_logo) { ?>
                <span class="lb-review-details-tag">
                  <?php echo wp_get_attachment_image($term_logo, 'mercury-9999-32', "", array("class" => "lb-review-details-tag__logo"));  ?>
                </span>
              <?php } else {  ?>
                <span class="lb-review-details-tag"><?php echo esc_html($term->name); ?></span>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    <? } ?>
  </div>
</div>